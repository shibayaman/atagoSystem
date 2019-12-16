<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class cust_resister_Provider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Validater::extend('kana-validate', function($attribute,$value,$parameters,$validator){
        //     if(preg_match("/^(\xe3\x82[\xa1-\xbf]|\xe3\x83[\x80-\xbe])+$/u",$str)){
        //         return true;
        //       }else{
        //         return false;
        //       }
        // });
    }
}
