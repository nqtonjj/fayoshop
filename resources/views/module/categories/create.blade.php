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
            <h1 class="h4 text-gray-900 mb-4">Danh mục </h1>
          </div>
          <form class="user" method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user" placeholder="Name" name="name">
            </div>

            <div class="form-group">
              <input type="number" class="form-control form-control-user" placeholder="Priority" name="priority">
            </div>

            <div class="form-group">
                <select class="form-control"  name="parent_id" id="parent_id">
                  <option value="0">Chọn danh mục cấp 1</option>
                  @foreach($categories as $item)
                    <option value="{{ $item->id }}">{{$item->name}}</option>
                  @endforeach
                </select>
            </div>
            <input type="submit" value="Create" class="btn btn-primary btn-user btn-block">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

@endsection
