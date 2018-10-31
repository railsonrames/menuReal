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
//    $sql = 'SELECT * FROM user WHERE id = ?';
//    $user = \DB::select($sql, [29]);
//    $user = \DB::table('user')
//        ->where('id', 29)
//        ->get();
//        ->select('name','id')
//        ->first();
//        ->toSql();
//    $user = \App\User::all();
//    dd($user);
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
//    $user = [
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
//Route::get('/user', 'UserController@index');
//Route::get('/user/{id}', 'UserController@show');
//
//Route::resource('/usuarios', 'UsuarioController');
//
//Route::view('/view', 'view', ['name' => 'Railson'])->middleware(\App\Http\Middleware\TestCheck::class);


Route::get('/', function () {
    return view('inicio');
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('/administracao')->namespace('Administracao')->group(function () {
        Route::prefix('restaurante')->group(function () {
            Route::get('/', 'RestauranteController@index')->name('restaurante.index');
            Route::get('novo', 'RestauranteController@new')->name('restaurante.new');
            Route::post('store', 'RestauranteController@store')->name('restaurante.store');
            Route::get('editar/{restaurante}', 'RestauranteController@edit')->name('restaurante.edit');
            Route::post('atualizar/{id}', 'RestauranteController@update')->name('restaurante.update');
            Route::get('excluir/{id}', 'RestauranteController@delete')->name('restaurante.delete');
        });
        Route::prefix('user')->group(function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::get('novo', 'UserController@new')->name('user.new');
            Route::post('store', 'UserController@store')->name('user.store');
            Route::get('editar/{user}', 'UserController@edit')->name('user.edit');
            Route::post('atualizar/{id}', 'UserController@update')->name('user.update');
            Route::get('excluir/{id}', 'UserController@delete')->name('user.delete');
        });
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
