@extends('master')
@section('content')
<div class="container-fluid">
            <!-- Page Heading -->

          <h1 class="h3 mb-2 text-gray-800">Bảng</h1>
          <p class="mb-4">Danh sách tài khoản khách</a>.</p>
          <div class="card shadow mb-4">
            <!-- DataTales Example -->

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách</h6>
              <a class="btn btn-primary" href="{{ route('customers.create') }}">Thêm mới</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($customers as $item)
                    <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                    <div class="d-flex">
                        <a href="{{route('customers.edit', $item->id)}}" class="text-primary p-1 mr-2">
                            <i class="fas fa-edit"></i>
                           </a>
                            {{-- <a href="" class="text-danger p-1">
                              <i class="fas fa-trash-restore-alt"></i>
                            </a> --}}
                            <form action="{{route('customers.destroy', $item->id)}}" method="post">
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
                {{ $customers->links() }}
              </div>
            </div>
          </div>

</div>
@endsection
