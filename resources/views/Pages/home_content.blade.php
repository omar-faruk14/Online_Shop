@extends('pages.layout')
@section('content')



<!-- Feature Product Item List -->

 <h2 class="title text-center">Features Items</h2>





<!-- Single feature Product Display -->
<?php


foreach($all_published_product as $v_product) {?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to($v_product->product_image)}}" style="height: 207px; width: 183px" alt="" />
                            <h2>{{$v_product->product_price}} TK</h2>
                            <p>{{$v_product->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{$v_product->product_price}} TK</h2>
                                <a href="{{URL::to('/view_product/'.$v_product->product_id)}}">
                                <p>{{$v_product->product_name}}</p></a>
                                <a href="{{URL::to('/view_product/'.$v_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><i class="fa fa-plus-square"></i>{{$v_product->manufacture_name}}</li>
                        <li><a href="{{URL::to('/view_product/'.$v_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                    </ul>
                </div>
            </div>
        </div>


    <?php } ?>




<!-- end feature product raw php code -->

        
        
   

@endsection
