<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputControoer extends Controller
{
    public function myInput(){
        $data = [
            'name'  => 'PHEAREN',
            'phone' => '0964613125',
        ];
        return view('inputs.index', $data);
    }
}
