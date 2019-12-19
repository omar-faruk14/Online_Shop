@extends('pages.layout')
@section('content')


<!-- Product Details page -->

<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($product_view_details->product_image)}}" style="height: 207px; width: 183px" alt="" />
								<h3>ZOOM</h3>
							</div>
							
						</div>


						<!-- product name,brand ,price ,image etc details showing from database -->
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{ $product_view_details->product_name}}</h2>
								<p>Product ID: {{ $product_view_details->product_id}}</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>{{ $product_view_details->product_price}} TK</span>

									<!-- quantity form create -->

									<form action="{{url('/add_to_cart')}}" method="post">
										{{csrf_field()}}


									<label>Quantity:</label>
									<input name="qty" type="text" value="1" />
									<input type="hidden" name="product_id" value="{{$product_view_details->product_id}}">
									<button  type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
									</form>
								</span>



								<p><b>Color: </b>{{ $product_view_details->product_color}}</p>
								<p><b>Category: </b>{{ $product_view_details->categories_name}}</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>{{ $product_view_details->manufacture_name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->











@endsection