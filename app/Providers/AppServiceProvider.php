<?php

namespace App\Providers;

use App\Models\CompanyContact;
use App\Models\Treatment;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        $contact = CompanyContact::get();
        $treatments = Treatment::all();
        view()->share(['contact'=>$contact, 'treatments'=>$treatments]);
    }
}
