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
            <h1 class="h4 text-gray-900 mb-4">Product</h1>
            @if(session('message'))
            <span class="text-success">{{ session('message') }}</span>
          @endif
          </div>
        <form class="user" method="POST" action="{{ route('product.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user" placeholder="Name" name="name">
            </div>

            <div class="form-group">
              <input type="number" class="form-control form-control-user" placeholder="Price" name="price">
            </div>

            <div class="form-group">
              <input type="number" class="form-control form-control-user" placeholder="Price Sale" name="sale_price">
            </div>

            <div class="form-group">
              <input type="hidden" name="image_id">
              @include('module.images.model')
              <br>
              <img id="view-image" width="200" class="mt-2">
            </div>

            <div class="form-group">
              <select class="form-control" name="color" id="color">
                <option value="Hot">Hot</option>
                <option value="New">New</option>

              </select>
            </div>

            <div class="form-group">
              <select class="form-control" name="size" id="size">
                <option value="Size">Size</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
              </select>
            </div>

            {{-- <div class="form-group">
                <select class="form-control"  name="parent_id" id="parent_id">
                  <option value="0">Chọn danh mục cấp 1</option>
                  @foreach($products as $item)
                    <option value="{{ $item->id }}">{{$item->name}}</option>
                  @endforeach
                </select>
            </div> --}}
            <input type="submit" value="Create" class="btn btn-primary btn-user btn-block">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

@endsection
{{-- rồi hiểu dó k giờ k làm vay nhìn nó sai sai :v thế giờ bỏ nó đi à. k update sau tam thoi dê nó = null di
    update sau, ngu luôn rồi @@, null chỗ nào  --}}
    {{-- paren_id = null set trong controller a, coò view thì comment đoan render products laạ --}}
