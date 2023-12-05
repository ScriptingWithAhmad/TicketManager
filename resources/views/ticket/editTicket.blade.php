@extends('layouts.admin')

@section('main-section')
    <section class="section dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Ticket</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-xl">Title</label>
                                    <input type="text" class="form-control rounded" name="title" value="{{$details->title}}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mt-2">
                                    <label class="text-xl">Message:</label>
                                    <input class="container rounded" name="message" id="message" cols="10" rows="6" value="{{$details->message}}">
                                    {{-- @if ($errors->has('message')) --}}
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                    {{-- @endif --}}
                                </div>
                                <div class="container form-group mt-2">
                                    <label class="text-xl" for="label">Labels</label><br>
                                    @foreach ($labels as $label)
                                        <label for="{{ $label->name }}">{{ $label->name }}</label>
                                        <input type="checkbox" name="label" id="{{ $label->name }}" name="label"
                                            class="form-check-input" value="{{$details->label}}">
                                    @endforeach


                                </div>
                                <div class="container form-group mt-2">
                                    <label class="text-xl" for="category">Categories</label><br>
                                    @foreach ($categories as $category)
                                        <label for="{{ $category->name }}">{{ $category->name }}</label>
                                        <input type="checkbox" name="category" id="{{ $category->name }}"
                                            class="form-check-input" value="{{$details->category}}">
                                    @endforeach

                                </div>

                                {{-- @hasanyrole('admin') --}}
                                    <div class="nav-item w-2/3">
                                        <div class="form-group">
                                            <label for="priority">Priorty</label>
                                            <select class="form-control" id="priority">
                                                <option value="high">High</option>
                                                <option selected value="medium">Medium</option>
                                                <option value="low">Low</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                {{-- @endhasrole --}}
                                <div class="form-group container mt-4s">
                                    <label class="text-xl" for="usr">Add Files:</label>
                                    <input type="file" class="form-control " name="file" id="file" accept=".png">
                                </div>
                                <button type="submit" href="" class="btn border-dark mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="container text-center">
                    
                </div>

                <div class="container text-justify col-sm-6">

                    
                </div>
        </div> --}}
    </section>
@endsection
