<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Logout;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(function (Login $event) {
            DB::table('audit_logs')->insert([
                'user_id' => $event->user->id,
                'event' => 'login_success',
                'ip_address' => Request::ip(),
                'user_agent' => Request::userAgent(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        Event::listen(function (Failed $event) {
            DB::table('audit_logs')->insert([
                'user_id' => $event->user ? $event->user->id : null,
                'event' => 'login_failed',
                'ip_address' => Request::ip(),
                'user_agent' => Request::userAgent(),
                'payload' => json_encode(['email' => $event->credentials['email'] ?? null]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        Event::listen(function (Logout $event) {
            DB::table('audit_logs')->insert([
                'user_id' => $event->user ? $event->user->id : null,
                'event' => 'logout_success',
                'ip_address' => Request::ip(),
                'user_agent' => Request::userAgent(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });
    }
}
