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


//Route::get('/', function () {
//    $sql = 'SELECT * FROM users WHERE id = ?';
//    $users = \DB::select($sql, [29]);
//    $users = \DB::table('users')
//        ->where('id', 29)
//        ->get();
//        ->select('name','id')
//        ->first();
//        ->toSql();
//    $users = \App\User::all();
//    dd($users);
//
//$usuarios = \App\Usuario::where('id_usuario',1)->select('id_usuario','nome_usuario')->first();
//dd($usuarios);
//
//    $user = new \App\User;
//
//    $user = \App\User::find(31);
//
//    $user->name = 'Railson Ramés';
//    $user->email = 'railson.rames@gmail.com';
//    $user->password = bcrypt('123456');
//
//    $user->save();
//
//    $userData = [
//        'name' => 'Joaquin Roriz Júnior'
//    ];
//
//    $user = \App\User::whereIn('id',[29,30,2]);
//    $user->delete();
//    $users = [
//        ['name' => 'Railson Ramés Sousa', 'email' => 'railson@msn.com'],
//        ['name' => 'Rayanne de Brito Uchoa', 'email' => 'ryuchoa@hotmail.com'],
//        ['name' => 'Banda Calcinha Preta', 'email' => 'calcinha@preta.com.br']
//    ];
//    $usuarios = \App\User::all();
//
//    return view('welcome', compact('usuarios'));
//});
//
//Route::get('/hello/{name}', function ($name) {
//    return view('hello', compact('name'));
//});
//
//Route::resource('cardapio', 'CardapioController');
//
//Route::get('/users', 'UserController@index');
//Route::get('/users/{id}', 'UserController@show');
//
//Route::resource('/usuarios', 'UsuarioController');
//
//Route::view('/view', 'view', ['name' => 'Railson'])->middleware(\App\Http\Middleware\TestCheck::class);


Route::get('/', function () {
    return view('inicio');
});

Route::prefix('/administracao')->group(function () {
    Route::get('restaurante', 'Administracao\\RestauranteController@index')->name('restaurante.index');
    Route::get('restaurante/novo', 'Administracao\\RestauranteController@new')->name('restaurante.new');
    Route::post('restaurante/store', 'Administracao\\RestauranteController@store')->name('restaurante.store');
    Route::get('restaurante/editar/{restaurante}', 'Administracao\\RestauranteController@edit')->name('restaurante.edit');
    Route::post('restaurante/atualizar/{id}', 'Administracao\\RestauranteController@update')->name('restaurante.update');
});
