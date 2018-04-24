<?php

namespace Pingecom\Tabler\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            '*', 'Pingecom\Tabler\Composers\CurrentUserComposer'
        );
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }
}