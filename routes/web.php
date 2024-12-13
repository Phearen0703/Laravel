<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputControoer;
use App\Http\Controllers\Backend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

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


Route::get('myInput',[InputControoer::class,'myInput'])->name('myInput');

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/detail',[HomeController::class,'detail'])->name('detail');




// Route::fallback(function(){
//     return view('404');
// });