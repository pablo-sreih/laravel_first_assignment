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
        json_encode($first_grp);
        // echo ($first_grp);
    }
}
