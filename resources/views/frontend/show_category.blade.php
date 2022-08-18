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
    <div class="features_items"><!--features_items-->
    @foreach($cate_name as $key => $pro)
        <h2 class="title text-center">Sản phẩm thuộc {{$pro->category_name}}</h2>
        @endforeach
        @foreach($product as $key => $pro)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{url('../public/upload/product/'.$pro->product_image)}}" alt="" />
                            <h2>{{$pro->product_price}} VND</h2>
                            <p>{{$pro->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>
                        
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                    </ul>
                </div>
            </div>
        </div> 
        @endforeach
    </div><!--features_items-->
@endsection

