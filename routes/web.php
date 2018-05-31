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
//    return view('welcome');
//});

Route::group([],
        function () {
                /************** 后台管理首页 **********************/
                Route::get('/', [
                        'uses' => 'HomeController@index'
                ]);
        });
//api/company/register
Route::group(['prefix'=>'api/{module}'],function ()
{
        Route::get(
                'register',function ($module) {
                return "Write LaravelAcademy {$module}";
        });
        //company

});
//Route::group(['prefix'=>'api/{version}'],function(){
//        Route::get('register',function($version){
//                return "Write LaravelAcademy {$version}";
//        });
//        Route::get('update',function($version){
//                return "Update LaravelAcademy {$version}";
//        });
//});
