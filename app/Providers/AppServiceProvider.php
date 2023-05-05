<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Auth;
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

            if(Auth::guard('cus')->user()) {

                $cartTotal = Cart::where('id_cus', Auth::guard('cus')->user()->id)->count();

                $cartGlobal = Cart::where('id_cus', Auth::guard('cus')->user()->id)->get();

                $check =  Cart::where('id_cus', Auth::guard('cus')->user()->id)->get();

                
                $view->with(compact('cartGlobal' , 'cartTotal' , 'check'));


            }
            else {
                $cartGlobal = [];
                $check = 0;
               
                $view->with(compact('cartGlobal', 'check'));
            }

           
          
           

        });
    }
    
}
