<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $entry_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($entry_data)
    {
        $this->entry_data = $entry_data;
        $this->subject = '【株式会社Creation】求人応募の申込を受付いたしました';
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->entry_data['email'])->from(env('MAIL_FROM_ADDRESS'))
        ->subject($this->subject)
        ->view('mail.confirmation');
    }
}
