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
                            action="{{ route('slides.update', $slide->id ) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Tiêu đề" name="title"
                                    value="{{$slide->title}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Nội dung"
                                    name="content" value="{{$slide->content}}">
                            </div>
                            <div class="form-group">
                                <label for="sliders">Danh sliders</label>
                                <select class="form-control" id="sliders" name="slider_id">
                                    <option value=""></option>
                                    @foreach ($sliders as $item)
                                    <option value="{{$item->id}}" @if ($slide->slider_id === $item->id) selected  @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                @include('module.images.model-single', ['id' => $slide->image['id'],'img' => '/asset/'.$slide->image['name']])
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
