@extends('master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800">Danh sách thương hiệu</h1>
    <p class="mb-4">Danh mục thương hiệu</a></p>
    <a class="btn btn-primary" href="{{ route('brands.create') }}">Thêm mới</a>
    <div class="card shadow mb-4">
        <!-- DataTales Example -->

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách thương hiệu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Priority</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Priority</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($brands as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->priority}}</td>
                            <td>
                               <div class="d-flex">
                                <a href="{{ route('brands.edit', $item->id) }}" class="text-primary p-1 mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{route('brands.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn btn-primary" type="submit" data-toggle="tooltip" title="Xoá">
                                        <i class="fas fa-trash-restore-alt"></i>
                                    </button>
                                </form>
                               </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $brands->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
