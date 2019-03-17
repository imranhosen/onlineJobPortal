<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Employee;
use Session;
use App\SocialLink;
use App\About;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

//       View::share('userInfo', Employee::find(Session::get('userId')));

        View::composer('front.includes.footer', function ($view){
            $view->with('socialLinkInfo', SocialLink::all());
        });
        View::composer('front.includes.footer', function ($view){
            $view->with('footerAboutDetails', About::find(1));
        });
       View::composer(['front.home.home-content', 'front.includes.top-sub-navbar'], function ($view){
           $view->with('userInfo', Employee::find(Session::get('userId')));
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
