@extends('layouts.app')

@section('main-section')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tickets</h2>
                            {{-- <div class="container text-right"> 
                                <a href="{{route('Role.form')}}"><button  class="btn btn-primary  text-right">Create Role</button></a>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>User name</th>
                                        <th>Email</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr class="text-center">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>                                            
                                            <td>{{ $user->email }}</td>                                            
                                            {{-- <td>
                                                <img src="/ticket/{{ $ticket->file }}" width="60" height="60">
                                            </td> --}}
                                            <td>
                                                <a href="{{ route('user.delete', ['id' => $user->id]) }}"><button
                                                        class="btn btn-danger btn-sm">Delete</button></a>

                                                {{-- <a href="{{ route('detail.view', ['id' => $ticket->id]) }}"><button
                                                        class="btn btn-success btn-sm">View</button></a> --}}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
