<?php

/**
    
    Initialize
    =============

    An @Atlas Preset, to initializes a Project Application.

*/

    namespace Atlas\Presets;


    use Illuminate\Console\Command;

    class initialize extends Command {


        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'app:init';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Command description';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Execute the console command.
         *
         * @return mixed
         */
        public function handle()
        {
            //
        }
    }
