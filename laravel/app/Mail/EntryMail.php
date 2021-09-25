<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class EntryMail extends Mailable
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
        $this->subject = 'CreationRecruitWebからお問い合わせ';
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to(env('MAIL_FROM_ADDRESS'))->from($this->entry_data['email'])
        ->subject($this->subject)
        ->view('mail.entry');
    }
}
