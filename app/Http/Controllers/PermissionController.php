<?php

namespace App\Http\Controllers;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions= Permission:: all();
        return view('permissions.indexPer', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'permissions.createPer' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permissions = new Permission();
        $permissions->name = $request->name;
        $permissions->guard_name = 'web';
        $permissions->save();

        return redirect( route( 'Per.index' ) );
    }

    public function delete( $id ) {
        $permissions = Permission::find( $id );
        if ( !is_null( $permissions ) ) {
            $permissions->delete();
        }
        return redirect( route( 'Per.index' ) );
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
