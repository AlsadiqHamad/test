<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcont extends Controller
{



    public function hello(Request $request ){


        if ($request->hasFile('input_img')) {
          
            if($request->file('input_img')->isValid()) {

                    $file = $request->file('input_img');


                    echo $file->getClientOriginalExtension();


            }
        }
    }
}
