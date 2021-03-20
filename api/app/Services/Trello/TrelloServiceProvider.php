<?php

namespace App\Services\Trello;

use Illuminate\Support\ServiceProvider;

class TrelloServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('trello', function ($app) {
            return new Trello(
                $app['config']['trello']['api_key'],
                $app['config']['trello']['api_token'],
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
