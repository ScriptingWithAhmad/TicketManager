@extends('layouts.app')
<style>
    .btn-primary,
    button,
    [type=button],
    [type=reset],
    [type=submit] {
        background-color: #0069d9 !important;
    }
</style>

@section('main-section')
    <div class="main justify-start  ">

        <div class="container mt-4 ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <h2 class="text-lg">User Ticket Details</h2>

                        </div>
                        <div class="card-body">
                            <div class="container text-right mt-4">
                                <div class="dropdown">
                                    <button type="button" href="{{ route('available.agent') }}" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        Assign
                                    </button>
                                    @foreach ($assignTo as $agent)
                                    {{-- {{ dd($agent) }} --}}
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                            href="{{ route('assign.agent') }}">{{ $agent->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <table class="table table-bordered mt-4">
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
                            <div class="container w-40 h-10">
                                <img src="/ticket/{{ $details->file }}" class="container h-auto w-auto">
                            </div>
                            <div class="container">
                                <a href="{{ route('ticket.view') }}"><button class="btn btn-primary">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
