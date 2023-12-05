@extends('layouts.admin')

@section('main-section')
    <div class="main justify-start  ">
            
        <div class="container mt-4 ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-lg">Agent Task</h2>
                            
                        </div>
                        <div class="card-body">
                            {{-- <table class="table table-bordered ">
                                <thead>
                                    <tr class="text-center">
                                        <th>Sr. #</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Category</th>
                                        <th>Label</th>
                                        <th>File-Path</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $key => $ticket )
                                        <tr class="text-center">
                                            <td>{{$key+1}}</td>
                                            <td>{{$ticket->title}}</td>
                                            <td>{{$ticket->message}}</td>
                                            <td>{{$ticket->category}}</td>
                                            <td>{{$ticket->label}}</td>
                                            <td>{{$ticket->file}}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    
