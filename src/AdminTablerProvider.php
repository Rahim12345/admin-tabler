<?php

namespace RsCode\AdminTabler;
use Illuminate\Support\ServiceProvider;

class AdminTablerProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../src/bootstrap/app.php' => base_path('bootstrap/app.php'),
        ], 'bootstrap');

        $this->publishes([
            __DIR__ . '/../src/database/migrations/2024_09_23_021808_create_visitors_table.php' => database_path('migrations/2024_09_23_021808_create_visitors_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../src/database/seeders/VisitorSeeder.php' => database_path('seeders/VisitorSeeder.php'),
        ], 'seeders');

        $this->publishes([
            __DIR__ . '/../src/database/seeders/UserSeeder.php' => database_path('seeders/UserSeeder.php'),
        ], 'seeders');

        $this->publishes([
            __DIR__ . '/../src/database/seeders/DatabaseSeeder.php' => database_path('seeders/DatabaseSeeder.php'),
        ], 'seeders');

        $this->publishes([
            __DIR__ . '/../src/Http/Controllers/RSCODE/DashboardController.php' => app_path('Http/Controllers/Back/DashboardController.php'),
        ], 'controllers');

        $this->publishes([
            __DIR__ . '/../src/Http/Middleware/setLocale.php' => app_path('Http/Middleware/setLocale.php'),
        ], 'middleware');

        $this->publishes([
            __DIR__ . '/../src/Http/Middleware/VisitorSaver.php' => app_path('Http/Middleware/VisitorSaver.php'),
        ], 'middleware');

        $this->publishes([
            __DIR__ . '/../src/lang' => lang_path(),
        ], 'lang');

        $this->publishes([
            __DIR__ . '/../src/Models/Visitor.php' => app_path('Models/Visitor.php'),
        ], 'models');

        $this->publishes([
            __DIR__ . '/../src/public' => public_path('/'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../src/resources/views' => resource_path('views/'),
        ], 'views');

    }


    public function register(): void
    {
        $this->commands([
            \RsCode\AdminTabler\Console\Commands\InstallAdminPanelCommand::class,
        ]);
    }
}
