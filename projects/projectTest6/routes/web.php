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

Route::get('/hola', 'holaController')->name('hola');

Route::get('/usuario/{nombre?}', 'UsuarioController@usuarioUnParametro')->name('usuarionombre');

Route::get('/user/{nombre}', 'Usuario\UserController@user');

Route::get('/user1/{id}', 'Usuario\UserController@user1')->where('id', '[0-9]+');

Route::get('/user2/{id}/comentario/{comentario}', 'Usuario\UserController@user2')->where(
    [
        'id' => '[0-9]+',
        'comentario' => '[A-Za-z]+'
    ]
);
Route::get('/usuario/{nombre}/comentario/{comentarioId}', 'UsuarioController@usuarioDosParametros');


Route::resource('varios', 'variosMetodosRecursos');

//llamando a metodos en especifico
Route::resource('varios', 'variosMetodosRecursos')->only([
    'index', 'show'
]);

//restringiendo a metodos en especifico
Route::resource('varios2', 'variosMetodosRecursos')->except([
    'create', 'store', 'update', 'destroy'
]);


//modificando nombres de las rutas
Route::resource('varios3', 'variosMetodosRecursos')->only([
    'index', 'show'
])->names([
    'index' => 'varios.inicio'
]);

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
