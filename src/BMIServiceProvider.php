<?php
/**
 * Created by PhpStorm.
 * User: Siddhesh Bhatkar
 * Date: 19-11-2016
 * Time: 13:19
 */

namespace Laravel\BMI;

use Illuminate\Support\ServiceProvider;

class BMIServiceProvider extends ServiceProvider{

    /**
     * Bootstrap the application services
     *
     * @return void
     */
    public function boot(){
        include __DIR__ . '/routes.php';

        $this->loadViewsFrom(__DIR__ . 'Views','bmi');
    }

    /**
     * Register the application Services
     *
     * @return void
     */

    public function register(){
        $this->app['bmi'] = $this->app->share(function($app){
            return new BMI;
        });
    }
}
?>