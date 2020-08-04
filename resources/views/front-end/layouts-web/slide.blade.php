<section id="banner-header" class="header-banner">
    <div class="banner_carousel">
        <div class="swiper-wrapper">
            @foreach ($slider as $item)
            <div class="swiper-slide">
                <div class="banner">
                    <img src="./images/slider_2.png" alt="banner header" />
                    <div class="caption-car">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 caption">
                                    <h1>{{$item->title}}</h1>
                                    <span class="caption-itr">{{$item->content}}
                                    </span>
                                    <div class="caption-button">
                                        <a href="#">MUA NGAY</a>
                                        <a href="#">XEM THÊM</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 caption-animation">
                                    <div class="caption-images">
                                        <div class="caption-image">
                                            <div class="caption-items">
                                                <div class="caption-item">
                                                <img src="uploads/slider/{{$item->image}}" />
                                                </div>
                                                <div class="caption-item caption-item-content">
                                                    <img src="uploads/slider/{{$item->image}}" />
                                                </div>
                                                <div class="caption-item">
                                                    <img src="uploads/slider/{{$item->image}}" />
                                                </div>
                                            </div>
                                            <div class="loader-caption"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Add Pagination -->
            <div class="swiper-pagination indicators"></div>
        </div>
</section>
