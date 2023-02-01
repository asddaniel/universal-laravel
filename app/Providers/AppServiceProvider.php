<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);
        $this->publishes([
            __DIR__.'/../packages/migrations/2023_01_31_072001_create_donnees_table.php' => database_path('migrations/create_donnees_table.php'),
            __DIR__.'/../packages/migrations/2023_01_31_072119_create_relations_table.php' => database_path('migrations/create_relations_table.php'),
            __DIR__.'/../packages/migrations/2023_01_31_072221_create_colonnes_table.php' => database_path('migrations/create_relations_table.php'),
            __DIR__.'/../packages/migrations/2023_01_31_072352_create_enregistrements_table.php' => database_path('migrations/create_relations_table.php'),
        ], 'migrations');

    }
}
