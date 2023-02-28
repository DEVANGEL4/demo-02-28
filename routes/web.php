<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person',function() {
    return view('person',[
        'name' => 'Ma. Angela Janelle D.P. Fabricante',
        'age' => 21,
        'address' => 'San Jose Baybayon, Buhi, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Anna Katrina',
            'age' => 35
        ],
        [
            'name' => 'Anna Liza',
            'age' => 30
        ],
        [
            'name' => 'Anna Monica',
            'age' => 28
        ],
        [
            'name' => 'Ma. Eryka',
            'age' => 19
        ],
        ]
    ]);
    
});
