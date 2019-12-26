<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /*
    public function calculateFunc(Request $request) {
        
        $operator = $request->input('operator');
        $first_num = $request->input('first');
        $second_num = $request->input('second');

        $result = 0;

        if($operator == "plus"){
            $result = $first_num + $second_num;
        }
        elseif($operator == "minus"){
            $result = $first_num - $second_num;
        }
        elseif ($operator == "multiply"){
            $result = $first_num * $second_num;
        }
        elseif($operator == "divide"){
            $result = $first_num / $second_num;
        }
        else{
            $result = 0;
        }

        return redirect('/')->with('info','Answer is: '.$result);
    }
    */

    public function incrementFunc(Request $request){
        
        $request = $_POST;
        $value = isset($_POST['info']) ? $_POST['info'] : 0; //to be displayed
        if(isset($_POST['plus'])) { 
            $value = +1;
        }
        
        if(isset($_POST['minus'])) { 
            $value = -1; 
        }

        $value->increment('info'); 
        return redirect('/')->with('info', $value);
        
    }
}

