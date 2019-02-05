<?php

namespace App\Providers;



use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Permiso;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Permiso::get()->map(function ($permiso){
            Gate::define($permiso->slug, function ($user) use ($permiso){
                return $user->hasPermisosTo($permiso);
            });
        });



        // Blade::directive('role', function ($role){
        //     return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) :";
        // });

        // Blade::directive('endrole', function ($role){
        //     return "<?php endif; ";
        // });


  


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
