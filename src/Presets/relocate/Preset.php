<?php


	namespace Atlas\Presets\Standard;


	use Illuminate\Foundation\Console\Presets\Preset as ConsolePreset;


	Class Preset extends ConsolePreset {

		public static function install() {

			static::resetPubicDirectory();
			
		}


		public static function resetPublicDirectory () {
			// Reset Public Directory
			File::cleanDirectory(public_path());
			File::copyDirectory(__DIR__ . '/stubs/public', public_path());
		}

	}