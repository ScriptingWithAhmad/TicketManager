<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
 {
    public function indexLabel() {
        $label = Label::all();
        return view ( 'labels.viewLabel', compact( 'label' ) );
    }

    public function labelForm() {
        return view ( 'labels.addLabel' );
    }

    public function addLabel( Request $req ) {
        $req->validate( [
            'name' => 'required',
        ] );

        $label = new label();
        $label->name = $req->name;
        $label->save();

        return redirect( route( 'label.view' ) );
    }

    public function editLabel( $id ) {
        $label = Label::find( $id );
        return view( 'labels.addLabel', compact( 'label' ) );
    }

    public function updateLabel ( string $id, Request $req ) {
        $req->validate( [
            'name' => 'required',
            ] );
            
            $label = Label::find( $id );
            $label->name = $req['name'];
            // dd($label);
        $label->save();
        return redirect( route( 'label.view' ) );

    }

    public function deleteLabel( $id ) {
        $label = Label::find( $id );
        if ( !is_null( $label ) ) {
            $label->delete();
        }
        return redirect( route( 'label.view' ) );
    }
}
