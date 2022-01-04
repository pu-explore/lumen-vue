<?php

namespace Lumen\Vue\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vue:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the vue resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Favicon
        copy(__DIR__.'/../../stubs/resources/js/assets/favicon.ico', base_path('public/favicon.ico'));
        // Css
        (new Filesystem)->ensureDirectoryExists(resource_path('css'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/css', resource_path('css'));
        // Js
        (new Filesystem)->ensureDirectoryExists(resource_path('js'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/js', resource_path('js'));
        // Views...
        copy(__DIR__.'/../../stubs/resources/views/app.blade.php', resource_path('views/app.blade.php'));

        // Routes...
        copy(__DIR__.'/../../stubs/routes/web.php', base_path('routes/web.php'));

        // Tailwind / Webpack...
        copy(__DIR__.'/../../stubs/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/../../stubs/webpack.config.js', base_path('webpack.config.js'));
        copy(__DIR__.'/../../stubs/jsconfig.json', base_path('jsconfig.json'));
        copy(__DIR__.'/../../stubs/package.json', base_path('package.json'));

        $this->info('vue installed successfully.');
        $this->comment('Please execute the "npm install && npm run dev" command to build your assets.');
    }
}
