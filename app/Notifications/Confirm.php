<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Confirm extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'nexmo'];
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
                    ->from('apply@pupilscom-esl1.eu', 'Pupils\' Committee')
                    ->subject('Application confirmed')
                    ->greeting('Thank you for applying!')
                    ->line('Thank you for applying to join the Pupils\' Committee.')
                    ->line('The next step is to attend the election, on Wednesday 20 September at 11:10 in the Salle des Fêtes, and give your speech. Please don\'t be put off by it; the two minutes will pass faster than you think :)')
                    ->line('If you have any more questions, email me at any time at marks.polakovs@pupilscom-esl1.eu.')
                    ->line('See you at the election,')
                    ->salutation('Marks Polakovs and the Electoral Board');
    }

    public function toNexmo($notifiable) {
        return (new NexmoMessage)
            ->content('Application confirmed. Please check your email for further information');
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
        ];
    }
}
