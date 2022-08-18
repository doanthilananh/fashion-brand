<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\HotProductsComposer;
use App\Http\View\Composers\CategoryComposer;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use App\Product;
=======
>>>>>>> d9a8d6e (create api login, order detail)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        // view composer        
        View::Composer(['frontend/Home'], HotProductsComposer::class);
        View::Composer(['layouts/client','frontend/Home','backend/product/ProductCreate','backend/product/ProductUpdate'],CategoryComposer::class);
   
    }
    
    protected function configureRateLimiting()
    {
        
        RateLimiter::for('test', function (Request $request) {
            return Limit::perMinute(100)->by($request->ip())->response(function(){
                return response('denied',429);
            });
        });
=======
        //
>>>>>>> d9a8d6e (create api login, order detail)
    }
}
