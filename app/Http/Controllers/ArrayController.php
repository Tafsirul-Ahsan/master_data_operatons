<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CardDetails;
use Illuminate\Http\Request;
use Knp\Snappy\Pdf as Snappy;
use PDF;

class ArrayController extends Controller
{
    public function csvtoarray()
    {
        // $file = file_get_contents(base_path('public/js/Sample100.csv'));
        // $data = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $file));
        // prd($data);

        $row = 1;
        $array = array();
        $marray = array();
        $handle = fopen('js/Sample100.csv', 'r');
        if ($handle !== FALSE) {
            while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                if ($row === 1) {
                    $num = count($data);
                    for ($i = 0; $i < $num; $i++) {
                        array_push($array, $data[$i]);
                    }
                }
                else {
                    $c = 0;
                    foreach ($array as $key) {
                        $marray[$row - 1][$key] = $data[$c];
                        $c++;
                    }
                }
                $row++;
            }
            echo '<pre>';
            print_r($marray);
            echo '</pre>';
}
    }
    public function array()
    {
        return View('products.array');
    }

    public function associatve_array(){

        $jsonString = file_get_contents(base_path('public/js/attendances.json'));
        $data = json_decode($jsonString, true);
        $res = array_filter($data, function($value){
            $attDate = date('Y-m-d', strtotime($value['timestamp']));
            $today = date('2021-10-12');
            //return $today == $attDate;

            return $value['user_id'] == 1 && $today == $attDate;
        });

        $pdf = PDF::loadView('products.json', [
            'data' => $res
        ]);
        return $pdf->inline('abc.pdf');

    
    }

    public function associatve_array1()
    {
        $jsonString = file_get_contents(base_path('public/js/attendances.json'));
        $data = json_decode($jsonString, true);
        
        $res = [];

        $uniqueUsers = array_unique(
            array_column($data, 'user_id')
        );
    
        foreach ($uniqueUsers as $userId) {
            $res['u-'.$userId] = array_filter($data, function($att){
                return $att['user_id'] == 'user_id';
            });
        }
        prd($res);
        $pdf = PDF::loadView('products.json', [
            'data' => $res
        ]);
        return $pdf->inline('abc.pdf');
    }

    public function associatve_array2()
    {
        $jsonString = file_get_contents(base_path('public/js/attendances.json'));
        
        //prd($jsonString);
        $data = json_decode($jsonString, true);
        $res = [];

        foreach ($data as $value) {
            $res['u-'.$value['user_id']] = array_filter($data, function($att) use($value) {
                return $att['user_id'] == $value['user_id'];
            });
        }
        prd($res);
        
    }

    public function associatve_array3(){
       
        $jsonString = file_get_contents(base_path('public/js/attendances.json'));
        $data = json_decode($jsonString, true);

        $res = [];

        $res["u-1"] = [];

        $res["u-1"] = array_filter($data, function($value){

            return $value['user_id'] == 1;

        });
        prd($res);
        
    }

    
}
