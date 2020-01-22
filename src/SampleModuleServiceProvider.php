<?php

namespace Quill\SampleModule;

use Vellum\Module\Quill;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Quill\SampleModule\Listeners\RegisterSampleModuleModule;
use Quill\SampleModule\Resource\SampleModuleResource;
use Quill\SampleModule\Models\SampleModuleObserver;

class SampleModuleServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadModuleCommands();
        $this->loadRoutesFrom(__DIR__ . '/routes/samplemodule.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'samplemodule');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/samplemodule.php', 'samplemodule');

        SampleModuleResource::observe(SampleModuleObserver::class);

        // $this->publishes([
        //     __DIR__ . '/config/samplemodule.php' => config_path('samplemodule.php'),
        // ]);

        $this->publishes([
        	__DIR__ . '/database/factories/SampleModuleFactory.php' => database_path('factories/SampleModuleFactory.php'),
            __DIR__ . '/database/seeds/SampleModuleTableSeeder.php' => database_path('seeds/SampleModuleTableSeeder.php'),
        ], 'migration.samplemodules');
    }

    public function register()
    {
        Event::listen(Quill::MODULE, RegisterSampleModuleModule::class);
    }

    public function loadModuleCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                
            ]);
        }
    }
}
