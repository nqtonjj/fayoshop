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
                            <h1 class="h4 text-gray-900 mb-4">Update Slider!</h1>
                            @if(session('message'))
                            <span class="text-success">{{ session('message') }}</span>
                            @endif
                        </div>
                        <form class="user" method="POST"
                            action="{{ route('sliders.update', $slider->id ) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Tiêu đề" name="title"
                                    value="{{$slider->title}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Nội dung"
                                    name="priority" value="{{$slider->content}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="link"
                                    placeholder="Liên kết..." value="{{$slider->link}}" >
                            </div>
                            <div class="file-field d-inline-flex align-items-center mb-3">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose file</span>
                                    <input name="image" multiple type="file">
                                </div>
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
