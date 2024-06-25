<?php

namespace App\Providers;

use App\Models\Activities;
use App\Models\Erasmus;
use App\Models\Projekti;
use App\Models\Prvacinja;
use App\Models\Takmicenja;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('frontend_views.layout.layout', function ($view) {
            $view->with('logo', $this->cacheLogo());
           });
        View::composer('admin_views.layout.admin_layout', function ($view) {
            $view->with('logo', $this->cacheLogo());
           });
        Paginator::useBootstrap();
        
    }
    public function cacheLogo(){
        $logoUrl = 'assets/images/VojdanLogo.png';
        Cache::put('image_url_vojdan_logo', $logoUrl, now()->addMinutes(60));
        $image = Cache::get('image_url_vojdan_logo');
        return $image;
    }
}
