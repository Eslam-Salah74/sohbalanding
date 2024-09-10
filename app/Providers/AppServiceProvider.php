<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // SweetAlertServiceProvider::class,

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
        //     $switch
        //         ->locales(['ar','en']) // also accepts a closure
        //         ->displayLocale('ar') 
        //         ->circular();
        //         // ->visible(outsidePanels: true)
                
        // });
    }
}
