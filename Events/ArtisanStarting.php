<?php

namespace WPWhales\Console\Events;

class ArtisanStarting
{
    /**
     * The Artisan application instance.
     *
     * @var \WPWhales\Console\Application
     */
    public $artisan;

    /**
     * Create a new event instance.
     *
     * @param  \WPWhales\Console\Application  $artisan
     * @return void
     */
    public function __construct($artisan)
    {
        $this->artisan = $artisan;
    }
}
