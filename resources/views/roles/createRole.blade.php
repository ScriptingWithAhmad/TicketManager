@extends('layouts.app')

@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Role</h2>
                    </div>
                    <div class="card-body">
                        {{-- <form action="#" method="POST"> --}}
                        <form action="{{route('role.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="text-xl">Role Name</label>
                                <input type="text" class="form-control rounded" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn border-dark mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
