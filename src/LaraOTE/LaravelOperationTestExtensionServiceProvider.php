<?php
namespace Tuttti\LaraOTE;

use Illuminate\Support\ServiceProvider;

class LaravelOperationTestExtensionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->getConfigFile() => config_path('LaraOTE.php'),
            ], 'config');
        }
    }
    
    public function register()
    {
        $this->mergeConfigFrom(
            $this->getConfigFile(),
            'LaraOTE'
        );

        $this->commands([
            // ExportMakeCommand::class,
            // ImportMakeCommand::class,
        ]);
    }

    /**
     * @return string
     */
    protected function getConfigFile(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'LaraOTE.php';
    }
 
}