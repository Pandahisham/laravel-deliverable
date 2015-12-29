<?php

namespace Tshafer\Deliverable;

use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

class DeliverableServiceProvider extends BaseProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->setup(__DIR__)->publishMigrations();
    }

    public function when()
    {
        return ['artisan.start'];
    }
}
