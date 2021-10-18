<?php
//
//namespace App\Notifications;
//
//use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Notifications\Messages\MailMessage;
//use Illuminate\Notifications\Notification;
//use Melipayamak;
//
//class RegisterNotification extends Notification
//{
//    use Queueable;
//    protected $user;
//    /**
//     * Create a new notification instance.
//     *
//     * @return void
//     */
//    public function __construct($user)
//    {
//        $this->user = $user;
//    }
//
//    /**
//     * Get the notification's delivery channels.
//     *
//     * @param  mixed  $notifiable
//     * @return array
//     */
//    public function via($notifiable)
//    {
//        try{
//
//            $sms = Melipayamak::sms();
//            $to = $this->user->phone_number;
//            $from = '50004001649505';
//            $text = 'هم وطن عزیز به سایت گم و پیدا خوش آمدید';
//            $response = $sms->send($to,$from,$text);
//            $json = json_decode($response);
//            echo $json->Value; //RecId or Error Number
//        }catch(Exception $e){
//            echo $e->getMessage();
//        }
//
//        return [];
////        return ['mail'];
//    }
//
//    /**
//     * Get the mail representation of the notification.
//     *
//     * @param  mixed  $notifiable
//     * @return \Illuminate\Notifications\Messages\MailMessage
//     */
//    public function toMail($notifiable)
//    {
//        return (new MailMessage)
//                    ->line('The introduction to the notification.' . $this->user->name)
//                    ->action('Notification Action', url('/'))
//                    ->line('Thank you for using our application!');
//    }
//
//    /**
//     * Get the array representation of the notification.
//     *
//     * @param  mixed  $notifiable
//     * @return array
//     */
//    public function toArray($notifiable)
//    {
//        return [
//            //
//        ];
//    }
//}


//


namespace App\Notifications;

use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Melipayamak;

class RegisterNotification extends Notification
{
    use Queueable;

    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via()
    {
        try {

            $sms = Melipayamak::sms();
            $to =$this->user->phone_number;
            $from = '50004001649505';
            $text = 'هم وطن عزیز به سایت گم و پیدا خوش آمدید';
            $response = $sms->send($to, $from, $text);
            $json = json_decode($response);
            echo $json->Value; //RecId or Error Number
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return [];
//        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.' . $this->user->name)
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

