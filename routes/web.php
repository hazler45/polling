<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;


//Route is a class where get has to have two parameter 'url/path' and function

Route::get('/{name?}', function ($name=null) {
    $data = compact('name');
    return view('welcome')->with($data);
});

Route::get('/demo',function(){
    //file name 'demo'
   return view ('demo');
});

