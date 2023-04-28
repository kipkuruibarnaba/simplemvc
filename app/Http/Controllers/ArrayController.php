<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function count_strawberry(){

        $array = [
            'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
            'red' => ['strawberry', 'cheer', 'tomato'],
            'sweet' => ['sugar', 'cake', 'strawberry'],
        ];

       $strawberry =[];
        foreach ($array as $arr){
            if (in_array("strawberry", $arr))
                {
                    array_push($strawberry,"strawberry");
                }

        }
        echo (count($strawberry));
    }
}
