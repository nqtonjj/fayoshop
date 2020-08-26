@extends('master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800">Đơn hàng</h1>
    <p class="mb-4">Đơn hàng</a></p>
    <div class="card shadow mb-4">
        <!-- DataTales Example -->

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách </h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Att</th>
                            <th>Tổng giá</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Att</th>
                            <th>Tổng giá</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($cart as $item)
                        <tr>
                            <td>{{$item->user->name}}</td>
                            {{-- nếu muốn lấy nhiều sp thì loop đoạn này --}}
                            <th>{{$item->is_numberphone}}</th>
                            <th>{{$item->is_address}}</th>
                            <th>{{$item->orders->product_orders[0]->product['name']}}</th>
                            {{--
                                1 cái mảng nó sẽ có nhiều obj nên phần này phải loop
                                t đang làm mẫu nên t trỏ thẳng tới phần tử đầu tiên, okay, t bị ngu :v chưa hiểu lắm
                            --}}
                            {{-- cái [0] này có bắt buộc không?  --}}
                            <th>{{$item->orders->product_orders[0]->quantity}}</th>
                            <th>{{$item->orders->product_orders[0]->custom_attr}}</th>
                            <th>{{$item->orders->product_orders[0]->amount}}</th>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="text-primary p-1 mr-2">
                                        <button class="btn btn-info" type="submit">
                                            Chi tiết
                                        </button>
                                    </a>
                                    <form action="#" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn btn-primary" type="submit" data-toggle="tooltip"
                                            title="Xoá">
                                            <i class="fas fa-trash-restore-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- {{ $products->links() }} --}}
            </div>
        </div>
    </div>

</div>
@endsection
