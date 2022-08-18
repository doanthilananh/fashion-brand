<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Admin;
use App\Policies\ProductPolicy;
use App\Policies\UserPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\AdminPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\Category' => 'App\Policies\CategoryPolicy',
        'App\Models\Admin' => 'App\Policies\AdminPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();
 
        Gate::define('test',function($user){
            return true;
        });        
=======

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
>>>>>>> d9a8d6e (create api login, order detail)
    }
}
