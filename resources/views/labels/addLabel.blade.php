@extends('layouts.app')

@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Label</h2>
                    </div>
                    <div class="card-body">
                        <form  method="POST"
                        @if (isset($label))
                            action="{{route('label.update', ['id' => $label->id])}}"
                            @method('put')
                        @else
                            action="{{route('label.add')}}" >
                        @endif
                            @csrf
                            <div class="form-group">
                                <label class="text-xl">Label Name</label>
                                <input type="text" class="form-control rounded" name="name" value="{{isset($label->name) ? $label->name : ''}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            {{-- <div class="container form-group mt-2">
                                    <label class="text-xl" for="category">Categories</label><br>
                                    @foreach ($category as $item)
                                    <label for="{{ $item->CategoryName }}">{{ $item->CategoryName }}</label>
                                    <input type="checkbox" name="category" id="{{ $item->CategoryName }}" class="form-check-input" value="{{ $item->id }}">  
                                    @endforeach
                                </div> --}}
                            <button type="submit" class="btn border-dark mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
