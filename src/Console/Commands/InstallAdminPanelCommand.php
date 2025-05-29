<?php

namespace RsCode\AdminTabler\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallAdminPanelCommand extends Command
{
    protected $signature = 'admin:install';
    protected $description = 'Install the admin dashboard package (views, migration, controller, routes, middleware, lang)';

    public function handle(): void
    {
        // Publish files
        $this->call('vendor:publish', ['--tag' => 'bootstrap']);
        $this->call('vendor:publish', ['--tag' => 'migrations']);
        $this->call('vendor:publish', ['--tag' => 'seeders']);
        $this->call('vendor:publish', ['--tag' => 'controllers']);
        $this->call('vendor:publish', ['--tag' => 'middleware']);
        $this->call('vendor:publish', ['--tag' => 'lang']);
        $this->call('vendor:publish', ['--tag' => 'models']);
        $this->call('vendor:publish', ['--tag' => 'public']);
        $this->call('vendor:publish', ['--tag' => 'views']);

        $this->info('Admin dashboard package installed successfully.');
    }
}
