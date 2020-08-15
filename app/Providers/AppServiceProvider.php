<?php

namespace App\Providers;

use App\Customer;
use App\CustomerType;
use App\EntityType;
use App\Observers\CustomerObserver;
use App\Observers\ModelObserver;
use App\Page;
use App\Product;
use App\ProductCategory;
use App\ProductStock;
use App\Remark;
use App\Store;
use App\User;
use App\UserType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        // model observers

        Page::observe(ModelObserver::class) ;
        User::observe(ModelObserver::class) ;
        UserType::observe(ModelObserver::class) ;
        ProductCategory::observe(ModelObserver::class);
        Product::observe(ModelObserver::class);
        ProductStock::observe(ModelObserver::class);
        Customer::observe(CustomerObserver::class);
        Customer::observe(ModelObserver::class);
        CustomerType::observe(ModelObserver::class);
        EntityType::observe(ModelObserver::class);
        Remark::observe(ModelObserver::class);
        Store::observe(ModelObserver::class);

        //partials._pages_menu
        View::composer('partials._pages_menu', function($view)
        {
            $pages= Page::whereNull('parent_page_id')->with('sub_pages')->orderBy('sort_order', 'ASC')->get();
            $view->with('pages', $pages );
        });
    }
}
