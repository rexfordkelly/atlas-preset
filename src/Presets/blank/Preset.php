<?php


	namespace Atlas\Presets\Standard;


	use Illuminate\Foundation\Console\Presets\Preset as ConsolePreset;


	Class Preset extends ConsolePreset {

		public static function install() {

			static::resetPubicDirectory();
			static::pruneRootDirectory();			
		}

		public static function pruneRootDirectory() {
			// Removes unwanted files from the rootdir
		}

		public static function resetPublicDirectory () {
			// Reset Public Directory
			File::cleanDirectory(public_path());
			File::copyDirectory(__DIR__ . '/stubs/public', public_path());
		}

		public static function finalizeInstall(){
			File::copy( __DIR__ . '/stubs/_singles/atlas.json', base_path() . '/atlas.json');
		}

	}