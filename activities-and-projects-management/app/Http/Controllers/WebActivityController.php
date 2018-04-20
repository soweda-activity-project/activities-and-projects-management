<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class WebActivityController extends Controller
{
    public function receiveApplication(Request $request){


        $activityController =  new ActivityController();
        //return $request;

        //return $activityController->validatorApplication($request->all())->fails()?"0":"1";
        $validator = $activityController->validatorApplication($request->all());
       // Redirect::

        if ($validator->fails()){

            return Redirect::to('/')->withErrors($validator);
        }

       $returnValue = $activityController->receiveApplication($request);

       return view('welcome', array('receiveResultStatusCode' => 200, 'divisions'=> Division::all(),'applicationCreated'=>$returnValue));

    }
}
