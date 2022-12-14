<?php
namespace Jrios\ApexBuilder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BuilderFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('builder', function()
        {
            return new \Jrios\ApexBuilder\BuilderForm;
        });
    }
}