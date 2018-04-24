<?php

namespace Pingecom\Tabler\Providers;

use Collective\Html\HtmlServiceProvider;
use Illuminate\Support\ServiceProvider;
use Lavary\Menu\ServiceProvider as Menu;
use Pingecom\Tabler\Commands\TablerCommand;

class TablerServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'tabler');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'tabler');

        $this->publishes([
            __DIR__ . '/../../config/tabler.php' => config_path('tabler.php')
        ], 'config');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/tabler'),
        ], 'views');
        $this->publishes([
            base_path('vendor/tabler/tabler/dist/assets') => public_path('admin/assets')
        ], 'assets');
        $this->publishes([
            __DIR__ . '/../../resources/lang' => resource_path('lang/vendor/tabler')
        ], 'translations');

        $this->commands(TablerCommand::class);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/tabler.php', 'tabler');
        $this->app->register(Menu::class);
        $this->app->register(ComposerServiceProvider::class);
        $this->app->register(HtmlServiceProvider::class);
    }
}
