<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mailers\AppMailer;
use Illuminate\Support\Str;
use Mail;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllTickets()
    {
        $tickets = Ticket::paginate(10);

        return view('tickets.index', compact('tickets'));
    }

    public function createNewTicket()
    {
        $categories = Category::all();

        return view('tickets.create', compact('categories'));
    }

    public function storeNewTicketRecord(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'category' => 'required',
            'priority' => 'required',
            'message' => 'required'
        ]);

        $ticket = new Ticket([
            'user_id' => Auth::user()->id,
            'ticket_id' => strtoupper(Str::random(12)),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'subject' => $request->input('subject'),
            'zip_code' => $request->input('zip_code'),
            'category_id' => $request->input('category'),
            'priority' => $request->input('priority'),
            'message' => $request->input('message'),
            'status' => "Open"
        ]);

        $ticket->save();

        $mailer->sendTicketInformation($ticket); 

        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
    }

    public function userTickets()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);

        return view('tickets.user_tickets', compact('tickets'));
    }

    public function getTicketData($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        return view('tickets.show', compact('ticket'));
    }

    public function closeTicket($ticket_id, AppMailer $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = "Closed";
        
        $ticket->save();

        $ticketOwner = $ticket->user;

        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with("status", "The ticket has been closed.");
    }
}