@extends('layouts.admin')

@section('main-section')
    <div class="main justify-start  ">

        <div class="container mt-4 ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            
                            <h2 class="text-lg">User Ticket</h2>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $details->title }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $details->message }}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{ $details->categories->name }}</td>
                                </tr>
                                <tr>
                                    <th>Label</th>
                                    <td>{{ $details->labels->name }}</td>
                                </tr>
                            </table>
                            <h3>Attached File</h3>
                            <div class="container">
                                <img src="/ticket/{{ $details->file }}" class="container h-auto w-auto">
                            </div>
                            <div class="container text-right">
                                <a href="{{ route('user.view')}}"><button class="btn btn-primary">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
