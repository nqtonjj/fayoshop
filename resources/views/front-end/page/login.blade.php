@extends('front-end.master')
@section('title', 'Đăng nhập')

@section('content')
@guest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6  ">
            <div class="re-container mt-5 w-100">
                <h4 class="text-center">
                    Đăng nhập
                </h4>
                @if(session('message'))
                <span class="text-success">{{ session('message') }}</span>
              @endif
            <form action="{{route('login')}}" method="POST">
            @csrf
                    </div>
                    <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Nhập địa chỉ Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Mật Khẩu</label>
                        <input type="password" class="form-control" name="password" id="inputAddress" placeholder="">
                      </div>
                    <button type="submit" class="btn review_submit_btn">
                        Đăng nhập
                      </button>
                </form>
            </div>
        </div>
    </div>
</div>
@else
<div class="alert alert-success text-center">
<a href="{{ route('trang-chu') }}" class="btn btn-primary">Back Home</a>
</div>
@endguest
@endsection
