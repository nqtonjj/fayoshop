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
            <h1 class="h4 text-gray-900 mb-4">Product Version</h1>
            @if(session('message'))
            <span class="text-success">{{ session('message') }}</span>
          @endif
          </div>
        <form class="user" method="POST" action="{{ route('product-version.create') }}">
            @csrf
            <div class="form-group">
              <input type="number" class="form-control form-control-user" placeholder="Price" name="price">
            </div>
            <div class="form-group">
              <select class="form-control" name="size" id="size">
                <option value="Size">Size</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
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

