<?php

namespace Trov\WhitePages;

use Livewire\Livewire;
use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class TrovWhitePagesServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('trov-whitepages')
            ->hasViews()
            ->hasCommand(Commands\InstallTrovWhitePages::class)
            ->hasMigrations([
                'create_white_pages_table',
            ]);
    }

    public function boot()
    {
        parent::boot();

        Livewire::component('whitepages-overview', Widgets\WhitePagesOverview::class);
    }
}
