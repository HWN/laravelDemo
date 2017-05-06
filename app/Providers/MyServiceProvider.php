<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gate;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('mytest', function ($expression) {
            return "<?php echo 123; ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\Repositories\HouseRepositoryInterface', 'App\Repositories\DbHouseRepository');
    }
}
