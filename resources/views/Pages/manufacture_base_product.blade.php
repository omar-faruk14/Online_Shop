@extends('pages.layout')
@section('content')



<h2 class="title text-center">Features Items</h2>





<!-- manufacture Base Product show -->
<?php


foreach($manufacture_base_product as $v_product) {?>  
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to($v_product->product_image)}}" style="height: 207px; width: 183px" alt="" />
                            <h2>{{$v_product->product_price}}</h2>
                            <p>{{$v_product->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{$v_product->product_price}}</h2>
                                <p>{{$v_product->product_name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>View Product</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- end product display code -->


    <?php } ?>

@endsection