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
            <form action="{{ route('images.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="file-field d-inline-flex align-items-center">
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose file</span>
                        <input name="images[]" multiple type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="submit" id="submit" value="Upload Image">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($images as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>
                                <img width="100" src="{{ route('asset.show', $item->name) }}" alt="{{ $item->name }}">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{route('images.destroy', $item->id)}}" method="post">
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
                {{ $images->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
