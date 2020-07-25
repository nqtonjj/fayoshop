@extends('front-end.master')
@section('title', 'Đăng ký tài khoản')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6  ">
            <div class="re-container mt-5 w-100">
                <h4 class="text-center">
                    Đăng Kí
                </h4>
                <form>
                    </div>
                    <div class="form-group">
                        <div class="form-group ">
                            <label for="inputFirstname">Họ và tên</label>
                            <input type="text" class="form-control" id="inputFirstname" placeholder="Nhập họ và tên" name="name">
                          </div>
                      <label for="inputEmail">Email</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Nhập địa chỉ Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Mật Khẩu</label>
                        <input type="password" class="form-control" id="inputAddress" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="inputVeripass">Xác Nhận Mật Khẩu</label>
                        <input type="password" class="form-control" id="inputVeripass" placeholder="">
                      </div>
                    <button type="submit" class="btn review_submit_btn">
                        Đăng kí
                      </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
