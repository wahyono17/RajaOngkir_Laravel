<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracking;

class TrackingController extends Controller
{
    public function province(){
        //open model
        $tracking = new Tracking;
        //call provinsi
        $url = "https://api.rajaongkir.com/starter/province?";
        $province = $tracking->serverApi($url);
        $provinceJson = json_decode($province,true);
        $provinceJson =  $provinceJson["rajaongkir"]["results"];
        $arrEmty = [
            "province_id" => "",
            "province" => ""
            ];
        array_unshift($provinceJson,$arrEmty);    
        return $provinceJson;
    }
    
    public function city(){
        //open model
        $tracking = new Tracking;

        $url = "https://api.rajaongkir.com/starter/city?";
        $city = $tracking->serverApi($url);
        $cityJson = json_decode($city,true);
        $cityJson =  $cityJson["rajaongkir"]["results"];
        $arrEmty = [
            "city_id" => "",
            "city_name" => ""
            ];
        array_unshift($cityJson,$arrEmty);    
        return $cityJson;
    }
    
    public function loadTracking(){
        $provinceJson = $this->province();
        $cityJson = $this->city();

        $provinceDestJson = $this->province();
        $cityDestJson = $this->city();
        return view('tracking/index',['province'=>$provinceJson,
        'city'=>$cityJson, 'provinceDest'=>$provinceDestJson, 'cityDest'=>$cityDestJson]);
    }

    public function cityByProvince($prov_id){
         //open model
         $tracking = new Tracking;

         $url = "http://api.rajaongkir.com/starter/city?province=$prov_id";
         $city = $tracking->serverApi($url);
         $cityJson = json_decode($city,true);
         $cityJson =  $cityJson["rajaongkir"]["results"];
         //add array emty to option default is emty
         $arrEmty = [
             "city_id" => "",
             "city_name" => ""
             ];
         array_unshift($cityJson,$arrEmty);    
         foreach($cityJson as $var){
            echo '<option value="'.$var['city_id'].'">'.$var['city_name'].'</option>';
         }
    }

    public function cetakCost($origin,$dest,$weight,$curier){
        //open model
        $tracking = new Tracking;
        
        $url = "origin=".$origin."&destination=".$dest."&weight=".$weight."&courier=".$curier."";
        $cost = $tracking->apiCost($url);
        $costJson = json_decode($cost,true);
        $costJson = $costJson["rajaongkir"]["results"];
        $code = $costJson[0]['code'];
        $name = $costJson[0]['name'];
        $cost = $costJson[0]['costs'];
        //var_dump($costJson);
        return view ('tracking/cost',[
            'code'=>$code,'name'=>$name,'cost'=>$cost
        ]);

    }
}    

    