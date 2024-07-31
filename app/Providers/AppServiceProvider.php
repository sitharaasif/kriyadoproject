<?php

namespace App\Providers;

use App\Http\Livewire\Vendor;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        Livewire::component('vendor', Vendor::class);
        Schema::defaultStringLength(191);
    }
}
 