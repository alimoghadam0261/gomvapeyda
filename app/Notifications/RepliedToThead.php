<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RepliedToThead extends Notification
{
    use Queueable;


    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase()
    {[
        'repliedTime'=>Carbon::now()];
}

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
