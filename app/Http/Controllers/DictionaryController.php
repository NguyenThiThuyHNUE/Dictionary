<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public $dic = array(
        'Tao' => "apple",
        'Chuoi' => 'banana',
        'Cam' => 'orange'
    );


    public function formDictionary()
    {
        return view("dictionary.Dictionary");
    }
    public function dictionary(Request $request)
    {
        $result= '';
        $words = $request->words;
        $flag=false;
        foreach ($this->dic  as $vietnam => $english) {
            if ($words == $vietnam) {
                $result = $english;
                $flag=true;
            }
        }
        if(!$flag){
            echo "khong tim thay tu";
        }
        return view('dictionary.View_Dictionary',compact('words','result'));


    }


}
