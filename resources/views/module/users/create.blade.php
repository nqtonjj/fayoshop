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
            <h1 class="h4 text-gray-900 mb-4">Create an User!</h1>
            @if(session('message'))
            <span class="text-success">{{ session('message') }}</span>
          @endif
          </div>
          <form class="user" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" name="name">
            </div>

            <div class="form-group">
              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
            </div>

            <div class="form-group">
                <label for="child-category">Chọn cấp bậc User</label>
                <select class="form-control" name="category_id">
                    @foreach ($roles as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Hình đại diện</label>
                <input type="file" name="image" class="file-upload-default">
            </div>



            <input type="submit" value="Create User" class="btn btn-primary btn-user btn-block">


          </form>


        </div>
      </div>
    </div>
  </div>
</div>

</div>

@endsection
