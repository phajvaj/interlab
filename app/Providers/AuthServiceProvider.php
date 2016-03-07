<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //user active = Y
        /*$gate->define('user-active', function($user){
            return ($user->active === 'Y');
        });*/

        //User
        $gate->define('user-index', function($user){
            return ($user->role === 1 or $user->role === 2);//1=admin,2=staff,3=user
        });

        $gate->define('user-create', function($user){
            return $user->role === 1;
        });

        $gate->define('user-edit', function($user){
            return $user->role === 1;
        });

        $gate->define('user-delete', function($user){
            return $user->role === 1;
        });
    }
}
