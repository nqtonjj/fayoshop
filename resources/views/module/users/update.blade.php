@extends('master')

@section('content')

<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-6">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Update User!</h1>
            @if(session('message'))
            <span class="text-success">{{ session('message') }}</span>
          @endif
          </div>
        <form class="user" method="POST" action="{{route('users.update', $user->id)}}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" value="{{$user->email}}">
            </div>
            <input type="submit" value="Update User" class="btn btn-primary btn-user btn-block">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

@endsection
