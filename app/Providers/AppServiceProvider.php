<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Services\MailchimpNewsletter;
use App\Services\Newsletter; 
use App\Services\ConvertKitNewsletter;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(Newsletter::class , function(){
            $client = (new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us10'
            ]);
            return new ConvertKitNewsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        Gate::define('admin', function($user){
            return $user->username === "Elyas";
        });

        Blade::if('admin', function(){
            return request()->user()?->can('admin');
        });
        
    }

}
