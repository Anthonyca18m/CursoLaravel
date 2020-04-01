<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/usuario3/{nombre?}', function($nombre){
//     return "Usuario: ".$nombre;
// })->name('usuarionametest');

// Route::get('/usuario/{nombre}/comentario/{comentarioId}', function($nombre, $comentario){
//     return "Usuario: ".$nombre . "<br> Comentario: " . $comentario;
// });

//ruta con parametro solo de tipo alfanumerica
// Route::get('/usuario/{nombre}', function($nombre){
//     return "Usuario: ".$nombre ;
// })->where('nombre', '[A-Za-z]+');

//ruta con parametro solo de tipo numerico
// Route::get('/usuario/{id}', function ($id) {
//     return "Usuario: " . $id;
// })->where('id', '[0-9]+');

// //ruta con parametro solo de tipo alfanumerica
// Route::get('/usuario2/{id}/{nombre}', function ($id, $nombre) {
//     return "Id: " . $id . " <br>Usuario: " . $nombre;
// })->where(
//     [
//         'id' => '[0-9]+',
//         'nombre' => '[A-Za-z]+'
//     ]
// );


// Route::get('prueba', function () {
//     return "Pagina de prueba";
// })->name('pruebaRoute');

// Route::get('redirigirprueba', function () {
//     return redirect()->route('usuarionametest', ['nombre' => 'Anthony']);
// });


// Route::redirect('/prueba4', '/usuarionametest', 301);
