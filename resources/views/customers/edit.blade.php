@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card col-6 offset-3">
  <h5 class="card-header">Edit Customer</h5>
  <div class="card-body">
      @include('messages')
    <form action="/customers/{{$customer->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" class="form-control @error('name') is-invalid @enderror" value="{{$customer->name}}">
            @error('name')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" class="form-control @error('email') is-invalid @enderror" value="{{$customer->email}}">
            @error('email')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" class="form-control @error('phone') is-invalid @enderror" value="{{$customer->phone}}">
            @error('phone')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-info" type="submit">Submit</button>
        </div>
    </form>

  </div>
</div>
</div>

@endsection
