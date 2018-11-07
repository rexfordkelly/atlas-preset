<?php

    /**
        
        @Atlas Service Provider

    */

    namespace Atlas\Providers;


    use Illuminate\Support\ServiceProvider;
    use Illuminate\Foundation\Console\PresetCommand;


    class AtlasServiceProvider extends ServiceProvider {

        /**
         * Bootstrap services.
         *
         * @return void
         */
        public function boot()
        {
            PresetCommand::macro('standard', function ($command){
                Preset::install();
            });
        }

        /**
         * Register services.
         *
         * @return void
         */
        public function register()
        {
            //
        }

    }
