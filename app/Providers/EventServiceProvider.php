<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\SuccessfulLogin',
        ],

        'Illuminate\Auth\Events\Logout' => [
            'App\Listeners\SuccessfulLogout',
        ],

        'App\Events\LeaveRequestSubmitted' => [
            'App\Listeners\LeaveRequestSubmittedListener',
        ],

        'App\Events\ParSubmitted' => [
            'App\Listeners\ParSubmittedListener',
        ],

        'App\Events\ParValidatedBySupervisor' => [
            'App\Listeners\ParValidatedBySupervisorListener',
        ],

        'App\Events\RejectedBySupervisor' => [
            'App\Listeners\ParRejectedBySupervisorListener',
        ],

        'App\Events\ParValidatedByPayroll' => [
            'App\Listeners\ParValidatedByPayrollListener',
        ],

        'App\Events\ParRejectedByPayroll' => [
            'App\Listeners\ParRejectedByPayrollListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
