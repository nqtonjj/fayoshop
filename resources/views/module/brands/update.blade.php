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
                            <h1 class="h4 text-gray-900 mb-4">Update Brand!</h1>
                            @if(session('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                        </div>
                        <form class="user" method="POST"
                            action="{{ route('brands.update', $brand->id ) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Name" name="name"
                                    value="{{$brand->name}}">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" placeholder="Priority"
                                    name="priority" value="{{$brand->priority}}">
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="parent_id" id="parent_id">
                                    <option value='0'>Chọn thương hiệu</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" @if($item->id == $brand->parent_id) selected
                                        @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="submit" value="Update" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
