@extends('layouts.app')

@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Agent</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('agent.store') }}" >
                        @csrf 
                            <div class="form-group">
                                <label class="text-xl">Agent Name</label>
                                <input type="text" class="form-control rounded" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <label class="text-xl">Email</label>
                                <input type="text" class="form-control rounded" name="email">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <label class="text-xl">Password</label>
                                <input type="password" class="form-control rounded" name="password">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <input type="hidden" class="form-control rounded" name="roleId" value="2">
                                <button type="submit" class="btn border-dark mt-2">Submit</button>
                                
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
