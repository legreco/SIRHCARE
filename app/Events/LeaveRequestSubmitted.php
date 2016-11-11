<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\LeaveRequest;


class LeaveRequestSubmitted implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;
    public $leaveRequest;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(LeaveRequest $leaveRequest)
    {
        //
    $this->leaveRequest=$leaveRequest;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('test');
    }
}
