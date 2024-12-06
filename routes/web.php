<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function(){
    return view('user.user');
})->name('user');

Route::get('input', function(){
    return view('input');
})->name('input');

Route::post('/user/store',function(){
    $getAllData = request()->all();
    $getByGetMethod = request()->get('name','phone');
    $getByObject = request()->name;
    $viaPhpRaw = $_POST['name'];

    $name = $getByGetMethod;
// return view('user.show', compact('name'));
return view('/user/show',[
   'name' => $name,
   'phone'=> request()->POST('phone'),
]

);

})->name('user.store');

Route::get('detail/{myID?}/{myPhone}',function($myID='',$myPhone=''){


    echo "hello".$myID;
    echo "my phone:".$myPhone;
})->name('detail');

Route::fallback(function(){
    return view('404');
});