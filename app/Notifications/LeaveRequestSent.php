<?php

namespace App\Notifications;

use App\LeaveRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class LeaveRequestSent extends Notification implements ShouldQueue
{
    use Queueable;
    public $leaveRequest;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(LeaveRequest $leaveRequest)
    {
        //
        $this->leaveRequest=$leaveRequest;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Bonjour')
                    ->line('Votre demande de congé a été envoyée avec succès')
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
            'leave_request_id' => $this->leaveRequest->id,
        ];
    }
}
