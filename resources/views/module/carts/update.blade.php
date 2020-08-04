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
            <h1 class="h4 text-gray-900 mb-4">Update Product!</h1>
            {{-- @if(session('message'))
            <span class="text-success">{{ session('message') }}</span>
          @endif --}}
          </div>
        <form class="user" method="POST" action="{{route('product.update',$product->id)}}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <input type="text" class="form-control form-control-user" value="{{ $product->name }}" placeholder="Name" name="name">
            </div>

            <div class="form-group">
              <input type="number" class="form-control form-control-user" value="{{ $product->price }}" placeholder="Price" name="price">
            </div>

            <div class="form-group">
              <input type="number" class="form-control form-control-user" value="{{ $product->sale_price }}" placeholder="Price Sale" name="sale_price">
            </div>

            <div class="form-group">
              <input type="file"  value="{{ $product->image }}" name="image">
              <img src="" alt="" class="img-thumbnail" width="100">

            </div>

            <div class="form-group">
              <input type="checkbox"
              class="form-control form-control-user"
              {{ $product->is_hot == 1 ? 'checked' : '' }}
              name="is_hot">
              <label for="Hot">Hot</label>
              <input
              type="checkbox"
              class="form-control form-control-user"
              {{ $product->is_new == 1 ? 'checked' : '' }}
              name="is_new">
              <label for="New">New</label>
            </div>

            <div class="form-group">
                @php
                    $sizes = ['36','37','38'];
                @endphp
              <select class="form-control" name="size" id="size">
                  @foreach ($sizes as $size)
                    <option {{ $size == $product->size ? 'selected' : '' }} value="{{ $size }}">{{ $size }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="child-category">Danh mục</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="child-category">Thương hiệu</label>
                <select class="form-control" name="brand_id">
                    @foreach ($brands as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="ckeditor" cols="30" rows="10" name="content"></textarea>
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
