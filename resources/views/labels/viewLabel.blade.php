@extends('layouts.app')

@section('main-section')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Total Labels</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Label Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($label as $key => $l )
                                        <tr class="text-center">
                                            <td>{{$key + 1}}</td>
                                            <td>{{$l->name}}</td>
                                            <td>
                                                <a href="{{route('label.edit', ['id' => $l->id])}}"><button class="btn btn-secondary btn-sm">Edit</button></a>
                                                <a href="{{route('label.delete', ['id' => $l->id])}}"><button class="btn btn-danger btn-sm">Delete</button></a>
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
