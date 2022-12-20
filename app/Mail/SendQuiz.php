<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQuiz extends Mailable
{
    use Queueable, SerializesModels;

    public $respect;
    public $spirit;
    public $growth;
    public $simplicity;
    public $lovecustomer;
    public $respect_chart;
    public $spirit_chart;
    public $growth_chart;
    public $simplicity_chart;
    public $lovecustomer_chart;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($respect, $spirit, $growth, $simplicity, $lovecustomer)
    {
        $this->respect = $respect;
        $this->spirit = $spirit;
        $this->growth = $growth;
        $this->simplicity = $simplicity;
        $this->lovecustomer = $lovecustomer;

        $this->respect_chart = $respect * 100/2;
        $this->spirit_chart = $spirit * 100/2;
        $this->growth_chart = $growth * 100/2;
        $this->simplicity_chart = $simplicity * 100/2;
        $this->lovecustomer_chart = $lovecustomer * 100/2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Quiz Score')->from('test@test.pl')->markdown('emails.sendquiz');
    }
}
