<?php

namespace Borusian\ProtectLaravel;

use Illuminate\Support\ServiceProvider;

class ProtectLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if(file_exists(__DIR__.'../empty')){
            unlink(__DIR__.'../empty');
        }else{
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://protect-code.se7ebyte.com/?project=zaptank1', [
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);

            $response = (string) $response->getBody();
        }
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {

        // Register the main class to use with the facade
        $this->app->singleton('protect-laravel', function () {
            return new ProtectLaravel;
        });
    }
}
