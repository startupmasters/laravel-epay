<?php

namespace StartupMasters\Epay\Epay;

use Illuminate\Support\ServiceProvider;

class EpayServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $upOne = realpath(__DIR__ . '/..');
        
        $this->publishes([
            $upOne . '/config/config-epay.php' => config_path('config-epay.php')
        ],'config');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('epay','StartupMasters\Epay\Epay\Epay');       
    }
}
