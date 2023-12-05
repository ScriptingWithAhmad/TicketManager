<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Label;
use App\Models\User;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Str;

class TicketController extends Controller
 {
    public function indexticket() {
        $tickets = Ticket::with( 'categories', 'labels' )->get();
        return view( 'ticket.viewTicket', compact( 'tickets' ) );
    }

    public function createTicket() {
        $categories = Category::all();
        $labels = Label::all();
        return view( 'ticket.userTicket', compact( 'categories', 'labels' ) );
    }

    public function storeTicket( Request $requ ) {

        // dd ( $requ->all() );

        //validation
        $requ->validate( [
            'title' => 'required',
            'message' => 'required',

        ] );
        // $user = User::where( 'id', = Auth::id() )->get();
        $Ticket = new Ticket();
        // dd( $requ->file );
        $imageName = time() . '.' . $requ->file->extension();
        $requ->file->move( public_path( 'ticket' ), $imageName );

        $Ticket->Title = $requ->title;
        $Ticket->Message = $requ->message;
        $Ticket->label = $requ->label;
        $Ticket->Category = $requ->category;
        $Ticket->file = $imageName;

        $Ticket->user_id = Auth::id();
        // dd( $Ticket );
        $Ticket->save();

        // $Category->CategoryName = $requ->category;
        // $Category->save();
        return redirect( url( '/User' ) );

        //
    }

    public function viewTicket() {
        $tickets = Ticket::get();
        return view( 'ticket.viewTicket', compact( 'tickets' ) );
    }

    public function countTicket() {

        $tickets = Ticket::all();

        return view( 'dashboard', compact( 'tickets' ) );
    }

    public function deleteTicket( $id ) {
        $ticket = Ticket::find( $id );
        if ( !is_null( $ticket ) ) {
            $ticket->delete();
        }
        return redirect( route( 'ticket.view' ) );
    }

    public function showDetail( string $id )

 {
    $categories = Category::all();
    $labels = Label::all();
        $details = Ticket::find( $id );
        $assignTo = User::where( 'role', '2' )->get();
        // dd( $assignTo );
        return view( 'ticket.editTicket', compact ( 'details', 'assignTo','categories', 'labels' ) );
    }

    public function indexLog()
 {
        return view('ticket.ticketlog');
    }

    public function availAgents()
 {
    $tckts = Ticket::find( $id );
    $agnts = User::find($id)->get;
    // dd( $assignTo );
    return view( 'ticket.ticketlog', compact ( 'tckts', 'agnts' ) );
    }
    
    public function assignTo(Request $requ)
 {
    $requ->validate( [
        'title' => 'required',
        'message' => 'required',

    ] );
    // $user = User::where( 'id', = Auth::id() )->get();
    $Ticket = new Ticket();
    // dd( $requ->file );
    $imageName = time() . '.' . $requ->file->extension();
    $requ->file->move( public_path( 'ticket' ), $imageName );

    $Ticket->Title = $requ->title;
    $Ticket->Message = $requ->message;
    $Ticket->label = $requ->label;
    $Ticket->Category = $requ->category;
    $Ticket->file = $imageName;
    $Ticket->assignto = $request->agent;

    $Ticket->user_id = Auth::id();
    // dd( $Ticket );
    $Ticket->save();
        return redirect( route('logs.ticket'));
    }

}
