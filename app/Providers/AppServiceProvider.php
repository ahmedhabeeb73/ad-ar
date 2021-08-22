<?php

namespace App\Providers;

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
        view()->composer(
            ['partials.categoryNav','partials.searchform','lists.categories'],'App\HTTP\ViewComposers\CategoryComposer'
        );
        view()->composer(['partials.searchform','lists.countries'],'App\HTTP\ViewComposers\CountryComposer');
    }
}
