<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //	id	object_id	event_name	object_json_version	description	created_at	updated_at

    protected $table = 'events';
    public $application;

    protected $fillable = ['object_id','event_name', 'object_json_version', 'description', 'created_at', 'updated_at'];

    public function getNotificationMessage(){
        $notification = array(
                'eventName'=>$this->event_name,
                'id' => $this->application->b_id,
                'villageName' => $this->application->village,
                'repInfos' => array(
                    array('fullName' => $this->application->namerepresentative0,'email'=>$this->application->emailrepresentative0, 'phone'=>$this->application->telrepresentative0),
                    array('fullName' => $this->application->namerepresentative1,'email'=>$this->application->emailrepresentative1, 'phone'=>$this->application->telrepresentative1),
                    array('fullName' => $this->application->namerepresentative2,'email'=>$this->application->emailrepresentative2, 'phone'=>$this->application->telrepresentative2)
                )
            );
        return json_encode($notification);
    }

    /*


    $event = "{\"eventName\"😕"ApplicationRequestInitiated\", \"id\"😕"1\", \"villageName\"😕"Fako\",
               \"repInfos\":[{\"fullName\": \"Didier Nkalla\", \"email\"😕"did@yahoo.fr\", \"phone\"😕"6696565626\"},
                             {\"fullName\": \"Didier Nkalla\", \"email\"😕"did@yahoo.fr\", \"phone\"😕"6696565626\"}
                             {\"fullName\": \"Didier Nkalla\", \"email\"😕"did@yahoo.fr\", \"phone\"😕"6696565626\"}]}";


     */

}
