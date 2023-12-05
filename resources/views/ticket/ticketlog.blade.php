@extends('layouts.app')
{{-- <style>
     .btn-primary , button, [type=button], [type=reset], [type=submit]{
        background-color: #0069d9 !important;
    }
</style> --}}
@section('main-section')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tickets</h2>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Label</th>
                                        <th>Category</th>
                                        <th>Agent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tckts as $key => $ticket)
                                        <tr class="text-center">
                                            {{-- <td>{{$key+1}}</td> --}}
                                            <td>{{ $ticket->title }}</td>
                                            <td>{{ $ticket->message }}</td>
                                            <td>{{ $ticket->message }}</td>
                                            <td>{{ $ticket->Category }}</td>
                                    @endforeach
                                    @foreach ( $agnts as $agent )
                                            
                                            <td>{{ $agent->assignto }}</td>
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
