@extends('layouts.app')

@section('main-section')
<div class="main justify-start  ">
    <div class="container position-relative text-right ">
        <a href="{{ route('agent.create') }}" class="btn btn-primary btn-sm">Create Agent</a>
    </div>
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-lg">Agent</h2>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered ">
                            <thead>
                                <tr class="text-center">
                                    <th>Sr. #</th>
                                    <th>Agent Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agents as $key => $agent )
                                    <tr class="text-center">
                                        <td>{{$key+1}}</td>
                                        <td>{{$agent->name}}</td>
                                        <td>{{$agent->email}}</td>
                                        <td>
                                            <a href="{{route('agent.delete' , ['id' => $agent->id])}}"><button class="btn btn-danger">Delete</button></a>
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
