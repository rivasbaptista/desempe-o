<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;


trait checkRouterUsersTrait {


    public function redirect(){

        if(Auth::user()->hasRole('rrhh')){
                return $route = '/recursos-humanos';
            }else if (Auth::user()->hasRole('evaluador')){
                return $route = '/evaluador';
            }else{
                return $route = 'login';
            }


        return $route;
    }
}