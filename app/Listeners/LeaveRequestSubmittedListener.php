<?php

namespace App\Listeners;
use App\Mail\LeaveRequestSubmittedConfirmationMail;
use App\Events\LeaveRequestSubmitted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class LeaveRequestSubmittedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LeaveRequestSubmitted  $event
     * @return void
     */
    public function handle(LeaveRequestSubmitted $event)
    {
        //
        Notification::send(Auth::user(),new \App\Notifications\LeaveRequestSent($event->leaveRequest));
        //Mail::to(Auth::user())->send(new LeaveRequestSubmittedConfirmationMail($event->leaveRequest));

        
    }
}
