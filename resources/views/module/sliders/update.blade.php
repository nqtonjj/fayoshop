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
                        <form class="user" method="POST" action="{{ route('sliders.update', $slider->id ) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Tiêu đề"
                                    name="title" value="{{$slider->title}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Nội dung"
                                    name="location" value="{{$slider->location}}">
                            </div>
                            <div class="form-group">
                                @foreach ($slider->slides as $item)
                                {{-- @php
                                    echo $item->image['name'];
                                    die;
                                @endphp --}}
                                <img width="200" src="{{ route('asset.show', $item->image['name']) }}" />
                                @endforeach
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
