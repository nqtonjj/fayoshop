@extends('master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800">Bảng Slider</h1>
    <p class="mb-4">Danh Sách</a></p>
    <a class="btn btn-primary" href="{{ route('sliders.create') }}">Thêm mới</a>
    <div class="card shadow mb-4">
        <!-- DataTales Example -->

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Title</th>
                            <th>Content</th>
                            <th>Images</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>Title</th>
                            <th>Content</th>
                            <th>Images</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sliders as $item)
                        <tr>

                            <td>{{$item->title}}</td>
                            <td>{{$item->content}}</td>
                            <td>{{$item->image}}</td>
                            <td>{{$item->link}}</td>
                            <td>
                               <div class="d-flex">
                                <a href="{{ route('sliders.edit', $item->id) }}" class="text-primary p-1 mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{route('sliders.destroy', $item->id)}}" method="post">
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
                {{ $sliders->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
