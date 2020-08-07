@extends('front-end.master')
@section('title', 'Đăng nhập')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6  ">
            <div class="re-container mt-5 w-100">
                <h4 class="text-center">
                    Đăng nhập
                </h4>

                <form method="POST" action="{{ route('dang-nhap') }}">
                @csrf
                    </div>
                    <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Nhập địa chỉ Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Mật Khẩu</label>
                        <input type="password" class="form-control" id="inputAddress" placeholder="">
                      </div>
                    <button type="submit" class="btn review_submit_btn">
                        Đăng nhập
                      </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




