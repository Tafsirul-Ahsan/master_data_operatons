<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Knp\Snappy\Pdf as Snappy;
use PDF;

class ApiController extends Controller
{
    public function api()
    {
        /***
         * 
         * 
         */
        $jsonString = file_get_contents(base_path('public/js/attendances.json'));
        $url = "https://jsonplaceholder.typicode.com/todos";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $jsonString = curl_exec($curl);
        curl_close($curl);
        //prd($jsonString);
        $data = json_decode($jsonString, true);
        prd($data);
        
        //prd($res);

        $pdf = PDF::loadView('products.json', [
            'data' => $data
        ]);
        return $pdf->inline('abc.pdf');
        
        
    }
}
