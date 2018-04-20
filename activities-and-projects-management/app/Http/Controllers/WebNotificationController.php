<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebNotificationController extends Controller
{
    public function index(){

        $url = "http://192.168.100.10:8081/api/user";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_POST, true);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        /*$result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);*/
        //return 'OK';

        return view('notifications.index', ['users'=>[
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token'),
            array('name'=>'Nkalla Ehawe', 'email'=>'didnkallaehawe@gmail.com', 'phone'=>'671747569', 'token'=>'a long long long long token')
        ]]);
    }
}
