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
        // Css
        (new Filesystem)->ensureDirectoryExists(resource_path('css'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/css', resource_path('css'));
        // Js
        (new Filesystem)->ensureDirectoryExists(resource_path('js'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/js', resource_path('js'));
        // Template
        (new Filesystem)->ensureDirectoryExists(resource_path('template'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/template', resource_path('template'));

        // Routes...
        copy(__DIR__.'/../../stubs/routes/web.php', base_path('routes/web.php'));

        // Tailwind / Webpack...
        copy(__DIR__.'/../../stubs/babel.config.js', base_path('babel.config.js'));
        copy(__DIR__.'/../../stubs/package.json', base_path('package.json'));
        copy(__DIR__.'/../../stubs/postcss.config.js', base_path('postcss.config.js'));
        copy(__DIR__.'/../../stubs/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../stubs/vue.config.js', base_path('vue.config.js'));

        $this->info('vue installed successfully.');
        $this->comment('Please execute the "npm install && npm run serve" or "npm install && npm run watch" command to build your assets.');
    }
}
