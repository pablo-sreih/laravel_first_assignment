<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller{
    
    public function sayHi(){
        $message = "From DB";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ], 200);
    }

    public function time(){
        $year_since = (237*31536000) + (261 * 86400);
        $t = time();
        $diff = $t + $year_since;
        echo ($diff);
    }

    public function get_dad_jokes(){
        $get = file_get_contents('https://icanhazdadjoke.com/slack');
        $decode_text = json_decode($get);
        echo json_encode($get);
    }

    public function get_content_beer(){
        $get = file_get_contents('https://api.punkapi.com/v2/beers');
        $arr = json_decode($get);
        $random = rand(0, count($arr)-1);
        echo json_encode($arr[$random]);
    }

    public function palindrome(){
        $arr = ['beb', 'tel', 'rate', 'nominee', 'lol'];
        $count = 0;
        foreach ($arr as $word) {
            if ($word == strrev($word)){
                $count += 1;
            }
        }
        echo($count);
    }

    public function students(){
        $arr = ['pablo', 'ralph', 'nicole', 'george', 'charbel'];
        $half = floor(count($arr)/2);
        $first_grp = array_slice($arr, 0, $half);
        $scd_grp = array_slice($arr, count($first_grp), count($arr));
        echo json_encode($first_grp);
        echo json_encode($scd_grp);
    }

    public function nominee(){
        $arr = ['charbel', 'charbel', 'pablo', 'charbel', 'charbel'];
        $nominee = rand(0, count($arr)-1);
        echo ($arr[$nominee]);
    }
}
