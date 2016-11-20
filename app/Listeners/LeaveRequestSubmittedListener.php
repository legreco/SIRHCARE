<?php

namespace App\Listeners;
use App\Mail\LeaveRequestSubmittedConfirmationMail;
use App\Events\LeaveRequestSubmitted;
use App\Jobs\SendLeaveRequestSentEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;

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


       /* Log::info("Request Cycle with Queues Begins");
        $job=(new SendLeaveRequestSentEmail($event->leaveRequest))->delay(5);
        dispatch($job);
        Log::info("Request Cycle with Queues Ends");*/
        //
        dispatch(new SendLeaveRequestSentEmail($event->leaveRequest));
      
        Notification::send(Auth::user()->employee->employee->user,new \App\Notifications\LeaveRequestSent($event->leaveRequest));
        

        
    }
}
