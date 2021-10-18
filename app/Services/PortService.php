<?php

namespace App\Services;

class PortService{

    public function Curl($curl_url, $method, $data, $authorization)
    {
        ob_start();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $curl_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

        $output = json_decode( curl_exec($ch) );

        
        return $output;


    }

}
