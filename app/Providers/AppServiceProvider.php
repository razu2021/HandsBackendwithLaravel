<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\WebHeader;
use App\Models\WebFooter;
use App\Models\OurSocial;





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
        //
        $footercon =WebFooter::where('status',1)->limit('1')->get();
        view()->share('footercon',$footercon);

        $header =WebHeader::where('status',1)->limit('1')->get();
        view()->share('header', $header);

        $social =OurSocial::where('status',1)->limit('1')->get();
        view()->share('social',$social);


    }
}
