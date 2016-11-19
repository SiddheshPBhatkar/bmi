<?php
/**
 * Created by PhpStorm.
 * User: Siddhesh Bhatkar
 * Date: 19-11-2016
 * Time: 13:25
 */

Route::group(['namespace' => 'Laravel\BMI\Controllers','prefix' => 'laravel/bmi'],function(){
    Route::get('/', ['as' => 'bmmi_path', 'uses' => 'BMIController@index']);
});
?>