<?php

namespace App\Mail;

use App\Models\User_Regsitration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UpriseCityMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $qrCodePath;

    public function __construct($user, $qrCodePath)
    {
        $this->user = $user;
        $this->qrCodePath = $qrCodePath;
    }

    public function build()
    {
        return $this->view('mail.uprise')
                    ->subject('Your Global Wealth Conference Access')
                    ->with([
                        'user' => $this->user,
                    ]);
    }
}
