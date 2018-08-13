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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('nhanvat','NhanVatController');

// Route::get('cutomers', function(){
//     $faker = Faker\Factory::create();
//     $limit = 400;
//     $peoples = [];
//     for ($i = 0; $i < $limit; $i++) {
//         $peoples[$i] = [
//             'Họ và tên'     => $faker->name,
//             'Age'         => $faker->birthday,
//             'Avatar' => $faker->location,         
//         ];
//     }
//     return response()->json($peoples);
// });

// Route::get('nhanvat','NhanVatController@index');

// Route::get('nhanvat/create','NhanVatController@create');

// Route::post('nhanvat/store','NhanVatController@store');

// Route::get('nhanvat/{id}/edit','NhanVatController@edit');

// Route::put('nhanvat/{id}/update','NhanVatController@update');

// Route::get('nhanvat/{id}','NhanVatController@show');

// Route::delete('nhanvat/{id}','NhanVatController@destroy');

//Cookie
Route::get('setCookie', 'NhanVatController@setCookie');
Route::get('getCookie', 'NhanVatController@getCookie');

Route::get('contact', 'ContactController@showContactForm');

Route::post('contact', 'ContactController@insertMessage');

// blade temple
Route::get('first', function(){
	return view('fontend.first');
});

Route::get('login', function(){
	return view('fontend.login');
});

Route::post('login', function(Request $request){
	$username = $request->username;
	$password = $request->password;


    // $password = Request::input('password');
    if($username == 'admin' && $password == '123456'){
        // $request->session()->put('login', true);
        // $request->session()->put('name', 'Nguyễn Văn A');
        // 
        Session::put('login', true);
        Session::put('name', 'Nguyễn Văn A');

        return view('fontend.login')->with('success', 'Đăng nhập thành công.');
    } else {
        return view('fontend.login')->with('fail', 'Đăng nhập không thành công, sai username hoặc password.');
    }
});

Route::get('logout', function(Request $request){
    $request->session()->flush();
    return view('fontend.login');
});