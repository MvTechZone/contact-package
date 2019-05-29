<?php

namespace TechGuy\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/config/contact.php', 'contact'
        );

        //publishing configurations of the package
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
        ]);

        //publishing migrations here
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'migrations');

        //publishing models
        $this->publishes([
            __DIR__ . '/Models' => public_path('app'),
        ]);


        //publishing views here
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/contact'),
        ]);
    }

    public function register() {
    }
}
