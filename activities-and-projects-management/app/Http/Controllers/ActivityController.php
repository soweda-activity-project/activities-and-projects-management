<?php

namespace App\Http\Controllers;

use App\Application;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Village;
use Webpatser\Uuid\Uuid;

require_once __DIR__ . '/../../../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


class ActivityController extends Controller
{

    public function validatorApplication(array $data){
        return Validator::make($data, [
            'division'=> 'required|string|min:1|max:255',
            'subdivision'=> 'required|string|min:1|max:255',
            'village'=> 'required|string|min:1|max:255',
            'applicant'=> 'required|string|min:1|max:255',
            'namerepresentative0'=> 'required|string|min:1|max:255',
            'emailrepresentative0'=> 'required|email|min:1|max:255',
            'telrepresentative0'=> 'required|string|min:1|max:255',
            'description' => 'required|string|min:1|max:5000'
        ]);
    }

    public  function receiveApplication(Request $request){

        $application = new Application();

        $application->division = $request->get('division');
        $application->subdivision = $request->get('subdivision');
        $application->b_id = Uuid::generate()->string;
        $application->village = $request->get('village');
        $application->applicant = $request->get('applicant');
        $application->namerepresentative0 = $request->get('namerepresentative0');
        $application->emailrepresentative0 = $request->get('emailrepresentative0');
        $application->telrepresentative0 = $request->get('telrepresentative0');
        $application->description = $request->get('description');

        $application->namerepresentative1 = ($request->get('namerepresentative1'))?$request->get('namerepresentative1'):'';
        $application->emailrepresentative1 = ($request->get('emailrepresentative1'))?$request->get('emailrepresentative1'):'';
        $application->telrepresentative1 = ($request->get('telrepresentative1'))?$request->get('telrepresentative1'):'';

        $application->namerepresentative2 = ($request->get('namerepresentative2'))?$request->get('namerepresentative2'):'';
        $application->emailrepresentative2 = ($request->get('emailrepresentative2'))?$request->get('emailrepresentative2'):'';
        $application->telrepresentative2 = ($request->get('telrepresentative2'))?$request->get('telrepresentative2'):'';


        $villages = Village::where('division', '=', $request->get('division'))
            ->where('subdivision', '=', $request->get('subdivision'))
            ->where('name', '=', $request->get('village'))
            ->get();


        $village = new Village();
        //var_dump($villages);
        if (count($villages) === 0){
            //$village = $villages[0];'code','name','head_quarter', 'division', 'divisionname', 'subdivision', 'subdivisionname', 'latitude', 'longitude'
            //$village->save();
            $village->code = $application->village ;
            $village->name = $application->village ;
            //$village->head_quarter = $application->village ;
            $village->division = $application->division ;
            $village->divisionname = $request->get('divisionname'); ;
            $village->subdivision = $application->subdivision ;
            $village->subdivisionname = $request->get('subdivisionname'); ;
            $village->latitude = 0 ;
            $village->longitude = 0 ;

            $village->save();

        }else{
            $village = $villages[0];
        }

        $rank = 1;
        self::makeActivityMatricule($application, $rank);

        $application->save();

        $event = new Event();
        //['object_id','event_name', 'object_json_version', 'description', 'created_at', 'updated_at'];
        $event->object_id = $application->id;
        $event->event_name = 'ApplicationRequestInitiated';
        $event->object_json_version = json_encode($application);
        $event->application = $application;
        $event->description = "The system receiv the application of " . $application->applicant . " in date of " . $application->created_at.
            ". This event can be used at any time to notify the representative refered in this application";

        $event->save();


        $connection = null;

        try {
            $connection = new AMQPStreamConnection('192.168.100.10', 5672, 'test', 'test');
            $channel = $connection->channel();
            $channel->queue_declare('INITIATED-APPLICATIONS-QUEUE', false, true, false, false);

            $msg = new AMQPMessage($event->getNotificationMessage());
            $channel->basic_publish($msg, '', 'INITIATED-APPLICATIONS-QUEUE');
            $channel->close();
        } catch (\Exception $exception){
            // manage failled event
        }
        if ($connection != null){
            $connection->close();
        }



        //return response($application, 200);
        return $application;

    }

    /*
     *
     */
    public static function makeActivityMatricule(Application $application, $rank){
        $firstPart = substr($application->applicant, 0, 3);
        $leng = strlen($firstPart);
        if ($leng < 3){
            if ($leng === 0){
                $firstPart = $firstPart."ABC";
            }else if ($leng === 1){
                $firstPart = $firstPart."AB";
            }else if ($leng === 2){
                $firstPart = $firstPart."A";
            }
        }
        $date = new \DateTime();
        $secondPart = $date->format('d-m-Y');

        $tirdtPart = substr($application->b_id, 0, 4);

        //$tirdtPart = "";

        $matricule = strtoupper($firstPart. $rank . "-" . $secondPart . "-" . $tirdtPart);

        $application0 = Application::where('matricule', '=', $matricule)->get();
        if (count($application0) > 0){
            self::makeActivityMatricule($application, $rank+1);
        }else{
            $application->matricule = $matricule;
        }
    }


    function followup(Request $request){
        $matricle = $request->get('matricle');
        $applications = Application::where('matricule', '=', $matricle)->get();
        if (count($applications) === 0){
            return response(array(), 200);
        }

        $application = $applications[0];

        return response(Event::where('object_id', '=', $application->id)->orderBy('created_at')->get(), 200);

    }


}
