@extends('master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800">Bảng Sản phẩm</h1>
    <p class="mb-4">Sản phẩm</a></p>
    <div class="card shadow mb-4">
        <!-- DataTales Example -->

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
            <a class="btn btn-primary" href="{{ route('product.create') }}">Thêm mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Image</th>
                            <th>Size</th>
                            <th>Hot</th>
                            <th>New</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Image</th>
                            <th>Size</th>
                            <th>Hot</th>
                            <th>New</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{ number_format($item->price, 0, '', ',').__(' VND') }} </td>
                            <td>{{ number_format($item->sale_price, 0, '', ',').__(' VND') }}</td>
                            <td> <img width="100" src="{{ route('asset.show', $item->image['name']) }}">
                            </td>
                            <td>{{$item->size}}</td>
                            <td>{{$item->is_hot}}</td>
                            <td>{{$item->is_new}}</td>
                            <th>{{$item->parent_id}}</th>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('product.edit', $item->id) }}" class="text-primary p-1 mr-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('product.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-trash-restore-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
