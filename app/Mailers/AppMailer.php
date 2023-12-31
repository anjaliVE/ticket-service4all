<?php

namespace App\Mailers;

use App\Models\Ticket;
use Illuminate\Contracts\Mail\Mailer;
use Mail;
class AppMailer
{
    protected $mailer;
    protected $fromAddress = 'ticket@service4all-facturatie.nl';
    protected $fromName = 'Ticket-Service4All';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    /**
     * AppMailer constructor.
     * @param $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendTicketInformation(Ticket $ticket)
    {
        $this->to = $ticket->email;

        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->name";

        $this->view = 'emails.ticket_info';

        $this->data = compact('ticket');


        return $this->deliver();
    }

    public function sendTicketComments($ticketOwner, $user, Ticket $ticket, $comment)
    {
        $this->to = $ticketOwner->email;

        $this->subject = "RE: $ticket->name (Ticket ID: $ticket->ticket_id)";

        $this->view = 'emails.ticket_comments';

        $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');

        return $this->deliver();
    }

    public function sendTicketStatusNotification($ticketOwner, Ticket $ticket)
    {
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->name (Ticket ID: $ticket->ticket_id)";
        $this->view = 'emails.ticket_status';
        $this->data = compact('ticketOwner', 'ticket');

        return $this->deliver();
    }

    public function deliver()
    {
        Mail::send($this->view, $this->data, function($message){

            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);

        });
    }
}