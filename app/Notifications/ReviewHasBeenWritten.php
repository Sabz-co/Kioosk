<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReviewHasBeenWritten extends Notification
{
    use Queueable;

    protected $user, $review;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $review)
    {
        $this->user = $user;
        $this->review = $review;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
            'message' => $this->user->name . ' برای کتاب ' . $this->review->book->title . ' یک نقد نوشت',
            'link' => $this->review->path()
        ];
    }
}
