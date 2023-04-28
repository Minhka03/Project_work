<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator as UtilsPaginator;

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
        PaginationPaginator::useBootstrapFour();
        PaginationPaginator::useBootstrapFive();

        view()->composer("*" , function($view) {


            $cartGlobal = Cart::all();
            $view->with(compact('cartGlobal'));

        });
    }
    
}
