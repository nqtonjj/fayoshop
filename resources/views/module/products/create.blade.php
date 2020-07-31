@extends('master')

@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <form class="user" method="POST" action="{{ route('product.store') }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Product</h1>
                                @if(session('message'))
                                <span class="text-success">{{ session('message') }}</span>
                                @endif
                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Name"
                                    name="name">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" placeholder="Price"
                                    name="price">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" placeholder="Price Sale"
                                    name="sale_price">
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="image_id">
                                @include('module.images.model')
                                <br>
                                <img id="view-image" width="200" class="mt-2">
                            </div>

                            <div class="form-group">
                                <label>Tình trạng </label>
                                {{-- chỗ này làm gì có name nó k nhận là đúng rồi
                                    vs defau trong DB k có new hot thì auto là new, gio sua~ la` phai sua~ trong db nua a`
                                    giờ m muốn sp vừa hot vừa new
                                    hay sp chỉ hot hoặc chỉ new, cả hai đi, lúc khởi tạo ấy
                                    vậy chỗ này để select là sai r nó phải là check box, hôm qua t có làm checkbox rồi mà
                                    nó lại lấy giá trị bên thằng update nên t để lại option :v, là khởi tạo ra nó báo lỗi, mà thế thì sai sai thì phải
                                    sản phẩm mới tạo thì làm gì có hot đuocj đúng ko
                                    tuù m muon lam ntn thoi, vậy bỏ qua để thứ 7 gặp ông thầy, ông nói sao làm theo
                                    giờ có cái là mô tả với nội dung nó ko ra --}}
                                <select class="form-control">

                                    <option value="">Hot</option>
                                    <option value="">New</option>

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
                                    @foreach ($brand as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
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
                        <div class="attr_box"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div style="display: none" class="template">
    <div id="tmp" class="row">
        <div class="col-3">
            <div class="form-group"><input type="text" name="attributes[label][]" placeholder="label"></div>
        </div>
        <div class="col-3">
            <div class="form-group"><input type="text" name="attributes[value][]" placeholder="value"></div>
        </div>
        <div class="col-3">
            <div class="form-group"><input type="text" name="attributes[price][]" placeholder="price"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#add_attr').on('click', function () {
            const self = $(this);
           $('#tmp').clone().appendTo('.attr_box')
            $('.attr_box').find('#tmp').attr('id', '')
        })
    })
</script>
@endsection
