<?php

namespace App\Providers;

use App\Events\QuickTaskShortcut;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Native\Laravel\Events\Windows\WindowBlurred;
use Native\Laravel\Facades\Window;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Event::listen(WindowBlurred::class, function (WindowBlurred $event) {
            if ($event->id === 'quick-task') {
                Window::close('quick-task');
            }
        });

        Event::listen(QuickTaskShortcut::class, function () {
            Window::open('quick-task')
                ->route('quick-task')
                ->alwaysOnTop()
                ->transparent()
                ->height(100)
                ->width(600)
                ->showDevTools(false);
        });
    }
}
