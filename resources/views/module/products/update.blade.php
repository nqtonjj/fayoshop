@extends('master')

@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <form class="user" method="POST" action="{{route('product.update',$product->id)}}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Product!</h1>
                            </div>
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="{{ $product->name }}"
                                    placeholder="Name" name="name">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user"
                                    value="{{ $product->price }}" placeholder="Price" name="price">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user"
                                    value="{{ $product->sale_price }}" placeholder="Price Sale" name="sale_price">
                            </div>

                            <div class="form-group">
                                <input type="file" value="{{ $product->image }}" name="image">
                                <img src="" alt="" class="img-thumbnail" width="100">

                            </div>

                            <div class="form-group">
                                <input type="checkbox" class="form-control form-control-user"
                                    {{ $product->is_hot == 1 ? 'checked' : '' }} name="is_hot">
                                <label for="Hot">Hot</label>
                                <input type="checkbox" class="form-control form-control-user"
                                    {{ $product->is_new == 1 ? 'checked' : '' }} name="is_new">
                                <label for="New">New</label>
                            </div>

                            <div class="form-group">
                                @php
                                $sizes = ['36','37','38'];
                                @endphp
                                <select class="form-control" name="size" id="size">
                                    @foreach ($sizes as $size)
                                    <option {{ $size == $product->size ? 'selected' : '' }} value="{{ $size }}">
                                        {{ $size }}</option>
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
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" id="add_attr">Add Attr</button>
                        <br>
                        <br>
                        <div class="attr_box">
                            @foreach ($attr as $item)
                            <div class="row" attr-id="{{$item->id}}">
                                <input type="hidden" name="attributes[id][]" value="{{$item->id}}">
                                <div class="col-3">
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            name="attributes[label][]" value="{{$item->label}}" placeholder="label">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            name="attributes[value][]" value="{{$item->value}}" placeholder="value">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            name="attributes[price][]" value="{{$item->price}}" placeholder="price">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button class="del-attr btn btn-danger" type="button"
                                        data-attr-id="{{$item->id}}">Del</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div style="display: none" class="template">
    <div id="tmp" class="row">
        <div class="col-3">
            <div class="form-group"><input type="text" class="form-control form-control-user" name="attributes[label][]"
                    placeholder="label"></div>
        </div>
        <div class="col-3">
            <div class="form-group"><input type="text" class="form-control form-control-user" name="attributes[value][]"
                    placeholder="value"></div>
        </div>
        <div class="col-3">
            <div class="form-group"><input type="text" class="form-control form-control-user" name="attributes[price][]"
                    placeholder="price"></div>
        </div>
    </div>
</div>

<style>
    .form-group input {
        width: 100%;
    }

</style>

<script>
    $(function () {
        $('#add_attr').on('click', function () {
            const self = $(this);
            $('#tmp').clone().appendTo('.attr_box')
            $('.attr_box').find('#tmp').attr('id', '')
        })
        $('.del-attr').on('click', function () {
            const that = $(this);
            const baseUrl = "{{ url('/api/attr') }}";
            const data = {
                _token: $('[name="_token"]').val()
            }
            $.ajax({
                url: `${baseUrl}/${that.attr('data-attr-id')}`,
                method: 'DELETE',
                contentType: 'application/json',
                success: function (result) {
                    $(`.row[attr-id="${that.attr('data-attr-id')}"]`).remove();
                },
                error: function (request, msg, error) {
                    // handle failure
                }
            });
        })
    })

</script>

@endsection
