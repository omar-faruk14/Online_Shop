@extends('pages.layout')
@section('content')


<!-- section Start -->


<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">





<!-- all data retrive darryldecode laravel package -->
				<?php 
                
                $content= Cart::getContent();

				 ?>





<!-- add_to_cart product table -->

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="total">Action</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<!-- blade php for loop use -->

						@foreach($content as $v_content) <!-- darryldecode retrive all data -->
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_content->attributes->image)}}" height="80px" weidth="80px"   alt=""></a>
							</td>
							<td class="cart_name">
								<p>{{$v_content->name}}</p>
								<p>Product ID: {{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{$v_content->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">

									





       <form action="{{url('/update_plus')}}" method="post">
			{{csrf_field()}}
		<input class="cart_quantity_input" type="text" name="quantity" value="{{$v_content->quantity}}" autocomplete="off" size="2">
		<input  type="hidden" name="id" value="{{$v_content->id}}" >
		<button type="submit" class="cart_quantity_up"> + </button>
		
		</form>







									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_content->getPriceSum()}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete_from_cart/'.$v_content->id)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> 


	<!-- Main Cart Item end -->








	<section id="do_action">
		<!-- <div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div> -->



				<!-- calculate total price and subprice -->
				<div class="col-sm-8">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::getSubTotal()}}</span></li>
							<li>Eco Tax <span>0</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::getTotal()}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="{{URL::to('/login_check')}}" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection