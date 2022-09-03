<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function contactFormSubmit()
    {
        $contact = $this->validate();

        Mail::send('mail/contact',
            [
                'name' => $this->name,
                'email' => $this->email,
                'comment' => $this->comment,
            ],
            function($message){
                $message->to(env('CONTACT_TO_EMAIL', ''))->subject('Adam-Hayward.co.uk Contact Form');
                $message->replyTo($this->email);
            }
        );

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
