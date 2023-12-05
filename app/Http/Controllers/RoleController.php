<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
 {
    /**
    * Display a listing of the resource.
    */

    public function index()
 {
        $roles = Role:: all();
        return view( 'roles.indexRole', compact( 'roles' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create()
 {
        return view( 'roles.createRole' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request )
 {
        $role = new role();
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->save();

        return redirect( route( 'Role.index' ) );
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id )
 {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id )
 {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id )
 {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id )
 {
        //
    }
}
