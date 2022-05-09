<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InvoicePaid extends Notification implements ShouldQueue
{
    /**************
     * از صف برای جلوگیری از انتظار کاربر استفاده می کنیم
     */
    use Queueable;

    protected $invoice;

    /**
     * Create a new notification instance.
     *
     * @param $invoice
     */
    public function __construct($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $price = $this->invoice['price'];
        $id = $this->invoice->id;

        return (new MailMessage)
            ->success()
            ->line('Thank you for your select')
            ->action('Notification Action', url('/'))
            ->line('Your Tracking Code: ' . $id)
            ->line('Your Amount: ' . $price)
            ->line('Thank you for using Gohari App!');
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
            'invoice_id' => $this->invoice['id'],
            'mobile' => $this->invoice['mobile'],
            'price' => $this->invoice['price'],
        ];
    }
}
