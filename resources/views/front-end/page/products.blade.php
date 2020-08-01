@extends('front-end.master')
@section ('title' , 'Sản phẩm theo loại')

@section('content')
<section class="single-banner">
    <div class="single__banner-img">
        <div class="single__banner-text line">
            <p class="text-line">
                Áo Nam
            </p>
        </div>
    </div>
</section>

<div class="container single_product_container">
    <div class="row">
        <div class="col">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Áo Nam</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active single__nav-custom shop__bg-tabs" id="all-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tất cả</a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link single__nav-custom shop__bg-tabs" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="profile" aria-selected="false">New</a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link single__nav-custom shop__bg-tabs" id="sale-tab" data-toggle="tab" href="#sale" role="tab" aria-controls="contact" aria-selected="false">Sale</a>
                </li>

            </ul>
        </div>
        <!-- Lọc product -->
        <div class="col-lg-9 col-sm-12">
            <form action="">
            <div class="shop-filter w-100">
                <span style="font-weight: bold;">
                    <button type="submit" class="btn btn-filter">
                        Lọc
                      </button>
                </span>
                <span class="pr-2">
                    <select name="" id="">
                        <option value="">Sort</option>
                        <option value="">Từ cao đến thấp</option>
                        <option value="">Từ thấp đến cao</option>
                    </select>
                </span>
            <span class="pr-2">
                <select name="" id="">
                    <option value="">Giá</option>
                    <option value="">100.000đ - 300.000đ</option>
                    <option value="">300.000đ - 500.000đ</option>
                    <option value="">500.000đ - 700.000đ</option>
                    <option value="">700.000đ - 1.000.000đ</option>
                    <option value="">1.000.000đ - 1.500.000đ</option>
                </select>
            </span>
            <span class="pr-2">
                <select name="" id="">
                    <option value="">Màu sắc</option>
                    <option value="">Xanh</option>
                    <option value="">Đen</option>
                    <option value="">Trắng</option>
                </select>
            </span>
            <span class="pr-2">
                <select name="" id="">
                    <option value="">Size</option>
                    <option value="">S</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                    <option value="">XXL</option>
                </select>
            </span>
            <span class="pr-2">
                <select name="" id="">
                    <option value="">Danh mục</option>
                    <option value="">Áo</option>
                    <option value="">Quần</option>
                    <option value="">Giầy</option>
                </select>
            </span>
            </div>
        </form>
        </div>
        <!--  -->
        <!-- * Product * -->
        <div class="col-lg-12">
            <div class="tab-content" id="myTabContent">
                <!-- All -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            @foreach ($sp_tatca as $item)
                            <div class="product-grid mt-4">
                                <div class="product-image">
                                <a href="#">
                                        <img class="pic-1" src="{{ route('asset.show', $item->image['name']) }}">
                                        <img class="pic-2" src="{{ route('asset.show', $item->image['name']) }}">
                                    </a>
                                    @if ($item['is_new'] === 1 || $item['is_hot'] === 1)
                                    <span
                                        class="product-trend-label">{{ $item['is_hot'] === 1 ? 'Hot' : 'Mới' }}</span>
                                    @endif
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                <h3 class="card__sell-title"><a href="{{route('chi-tiet-san-pham', $item->id)}}">{{$item->name}}</a></h3>
                                @if ($item->sale_price == 0)
                                <span style="font-size: 16px;color: tomato;">
                                    {{number_format($item->price, 0, '', ',').__(' VND')}}
                                </span>
                                @else
                                <span style="text-decoration: line-through;font-size: 13px">
                                    {{number_format($item->sale_price, 0, '', ',').__(' VND')}}
                                </span>
                                <span style="font-size: 16px;color: tomato;">
                                    {{number_format($item->price, 0, '', ',').__(' VND')}}
                                </span>
                                @endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <!-- End All -->
                <!-- New -->
                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            @foreach ($loai_sp as $item)
                            <div class="product-grid mt-4">
                                <div class="product-image">
                                <a href="#">
                                        <img class="pic-1" src="{{ route('asset.show', $item->image['name']) }}">
                                        <img class="pic-2" src="{{ route('asset.show', $item->image['name']) }}">
                                    </a>
                                    @if ($item['is_new'] === 1 || $item['is_hot'] === 1)
                                    <span
                                        class="product-trend-label">{{ $item['is_hot'] === 1 ? 'Hot' : 'Mới' }}</span>
                                    @endif
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                <h3 class="card__sell-title"><a href="#">{{$item->name}}</a></h3>
                                @if ($item->sale_price == 0)
                                <span style="font-size: 16px;color: tomato;">
                                    {{number_format($item->price, 0, '', ',').__(' VND')}}
                                </span>
                                @else
                                <span style="text-decoration: line-through;font-size: 13px">
                                    {{number_format($item->sale_price, 0, '', ',').__(' VND')}}
                                </span>
                                <span style="font-size: 16px;color: tomato;">
                                    {{number_format($item->price, 0, '', ',').__(' VND')}}
                                </span>
                                @endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <!-- End New -->
                <!-- Sale -->
                <div class="tab-pane fade" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="product-grid mt-4">
                                <div class="product-image">
                                    <a href="single.html">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-discount-label">-20%</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a></h3>
                                    <span style="text-decoration: line-through;font-size: 14px;">150.000
                                        đ</span>
                                    <span style="font-size: 16px;color: tomato;">200.000 đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-grid mt-4">
                                <div class="product-image">
                                    <a href="single.html">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-discount-label">-20%</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a></h3>
                                    <span style="text-decoration: line-through;font-size: 14px;">150.000
                                        đ</span>
                                    <span style="font-size: 16px;color: tomato;">200.000 đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product-grid mt-4">
                                <div class="product-image">
                                    <a href="single.html">
                                        <img class="pic-1" src="images/single_1.jpg">
                                        <img class="pic-2" src="images/single_2.jpg">
                                    </a>
                                    <span class="product-discount-label">-20%</span>
                                    <ul class="card_social">
                                        <li><a href="#" data-tip="Thêm vào giỏ hàng"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-tip="Yêu thích"><i class="fa fa-heart"></i></a>
                                        </li>
                                        <li><a href="single.html" data-tip="Chi tiết"><i class="fa fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="card__sell-title"><a href="single.html">Áo Men's Blazer</a></h3>
                                    <span style="text-decoration: line-through;font-size: 14px;">150.000
                                        đ</span>
                                    <span style="font-size: 16px;color: tomato;">200.000 đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sale -->
              </div>
        </div>
        <!--  -->
        <nav aria-label="Page navigation example" class="mr-0">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>
</div>

@endsection
