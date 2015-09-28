<?php

namespace Tshafer\Deliverable;

use Illuminate\Support\ServiceProvider;

class DeliverableServiceProvider extends ServiceProvider
{

    protected $defer = true;

    public function boot()
    {
        $this->publishes([
          __DIR__ . '/../migrations/2015_07_20_122949_create_deliveries_table.php' => database_path('migrations/2015_07_20_122949_create_deliveries_table.php'),
        ]);
    }

    public function register()
    {
    }

    public function when()
    {
        return ['artisan.start'];
    }
}