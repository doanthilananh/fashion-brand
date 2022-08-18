@extends('welcome')
<style>
    .bgimg1{
        display: none;
    
    }
    #slider{
        display:none;
    }
</style>
@section('feature-items')
    <div class="product-details"><!--product-details-->
    @foreach($product as $key => $pro)
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{url('../public/upload/product/'.$pro->product_image)}}" />
                <h3>ZOOM</h3>
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href=""><img src="images/product-details/cpu-product.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/cpu.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/fan.jpg" alt="" width="88px"></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="images/product-details/cpu-product.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/cpu.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/fan.jpg" alt="" width="88px"></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="images/product-details/cpu-product.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/cpu.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/fan.jpg" alt="" width="88px"></a>
                        </div>
                        
                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    </a>
            </div>

        </div>
        
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{$pro->product_name}}</h2>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                    <span>{{$pro->product_price}} VND</span>
                    <label>Số lượng:</label>
                    <input type="text" value="3" />
                    <button type="button" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Thêm vào giỏ hàng
                    </button>
                </span>
                <p><b>Khả dụng:</b> Trong kho</p>
                <p><b>Tình trạng:</b> Mới</p>
                <p><b>Thương hiệu:</b> {{$pro->brand_name}}</p>
                <a href=""><img src="{{url('../public/frontend/images/share.png')}}" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
    @endforeach
    </div><!--/product-details-->
    
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
                <li><a href="#content" data-toggle="tab">Nội dung sản phẩm</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details" >
                {{$pro->product_desc}}
            </div>
            <div class="tab-pane fade" id="details" >
                {{$pro->product_content}}
            </div>
            <div class="tab-pane fade active in" id="reviews" >
                
                <div class="col-sm-12">
                    @foreach($review_product as $review => $re_pro)
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>{{$re_pro->reviewer_name}}</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>19 Tháng 7 2022</a></li>
                    </ul>
                    <p>Sản phẩm dùng tốt, dễ dàng lắp đặt và sử dụng, phù hợp với nhiều loại máy. Hiệu xuất cao và có khả năng thích ứng tốt với nhiều dòng máy. Giá cả phù hợp, được đóng gói cẩn thận. Giao hàng nhanh tiện lợi.</p>
                    <p><b>Viết đánh giá của bạn</b></p>
                    @endforeach
                    <form action="{{url('/danh-gia-san-pham/'.$pro->product_id)}}" method="post">
                        <span>
                            <input type="text" placeholder="Họ Tên" name="reviewer_name"/>
                            <input type="email" placeholder="Email" name="reviewer_email"/>
                        </span>
                        <textarea name="review_content" ></textarea>
                        <b>Đánh giá: </b> <img src="{{url('../public/frontend/images/rating.png')}}" alt="" />
                        <button type="submit" class="btn btn-default pull-right">
                            Đăng bài
                        </button>
                    </form>
                </div>

            </div>
            
        </div>
    </div><!--/category-tab-->
    
    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">Các mặt hàng được đề xuất</h2>
        
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">	
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product12.jpg" alt="" />
                                    <h2>499.000₫</h2>
                                    <p>RAM G.SKILL Aegis 4 GB-DDR4-2666 MHz (F4-2666C19S-4GIS)</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product11.jpg" alt="" />
                                    <h2>5.399.000₫</h2>
                                    <p>Card đồ họa MSI GeForce GTX 1650 VENTUS XS 4G OC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product10.jpg" alt="" />
                                    <h2>569.500₫</h2>
                                    <p>Tản nhiệt khí Xigmatek AIR KILLER S ARCTIC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">	
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product12.jpg" alt="" />
                                    <h2>499.000₫</h2>
                                    <p>RAM G.SKILL Aegis 4 GB-DDR4-2666 MHz (F4-2666C19S-4GIS)</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product11.jpg" alt="" />
                                    <h2>5.399.000₫</h2>
                                    <p>Card đồ họa MSI GeForce GTX 1650 VENTUS XS 4G OC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product10.jpg" alt="" />
                                    <h2>569.500₫</h2>
                                    <p>Tản nhiệt khí Xigmatek AIR KILLER S ARCTIC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>			
        </div>
    </div><!--/recommended_items-->
@endsection