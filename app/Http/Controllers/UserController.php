<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
 {
    /**
    * Display a listing of the resource.

    */

    public function index()
 {
        // $tickets = Ticket::get()->where( 'id', $id );
        $tickets = Ticket::with( 'categories', 'labels' )->where( 'user_id', Auth::id() )->get();
        // $tickets = $ticket->user_id;
        return view( 'user.userDashboard', compact( 'tickets' ) );

    }

    /**
    * Show the form for creating a new resource.
    */

    public function indexAgent()
 {
        $agents = User::where( 'role', '2' )->get();
        return view( 'agent.agentindex', compact( 'agents' ) );
    }

    public function createAgent()
 {
        return view( 'agent.agentForm' );
    }

    public function storeAgent( Request $requ )
 {
        //validation
        $requ->validate( [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ] );
        // $user = User::where( 'id', = Auth::id() )->get();
        $User = new User();
        $User->name = $requ->name;
        $User->email = $requ->email;
        $User->password = Hash::make( $requ->password );
        $User->role = $requ->roleId;
        // dd( $User );
        $User->save() ;

        return redirect( route( 'agent.view' ) );
    }

    public function deleteAgent( $id ) {
        $agent = User::find( $id );
        if ( !is_null( $agent ) ) {
            $agent->delete();
        }
        return redirect( route( 'agent.view' ) );
    }
    
    public function dashboardAgent()
    {
        return view( 'user.agentDashboard' );
    }
    
    public function showTicket( string $id )
    {
        $details = Ticket::find( $id );
        return view( 'ticket.userview', compact ( 'details' ) );
    }
    public function deleteUser( $id ) {
        $user = User::find( $id );
        if ( !is_null( $user ) ) {
            $user->delete();
        }
        return redirect( route( 'user.show' ) );
    }

    public function showUser(  )
 {
        $users = User::where( 'role', '3' )->get();
        return view( 'user.availableUser', compact ( 'users' ) );
    }

}
