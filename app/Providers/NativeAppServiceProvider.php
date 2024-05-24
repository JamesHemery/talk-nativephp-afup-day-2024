<?php

namespace App\Providers;

use App\Events\QuickTaskShortcut;
use Native\Laravel\Facades\GlobalShortcut;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        MenuBar::create()
            ->route('menu-bar')
            ->alwaysOnTop();

        Window::open()
            ->showDevTools(false)
            ->title('Hello Poitiers !')
            ->width(400)
            ->height(400)
            ->rememberState()
            ->alwaysOnTop();

        GlobalShortcut::key('Option+P')
            ->event(QuickTaskShortcut::class)
            ->register();
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
