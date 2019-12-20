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





<!-- all retrive darryldecode laravel package -->
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
			<td class="cart_quantity"> <!-- cart -->
				<div class="cart_quantity_button">

									







<!-- Update 1 Quantity By this form -->

       <form action="{{url('/update_plus')}}" method="post"><!-- cart quantity-->
			{{csrf_field()}}
		<input class="cart_quantity_input" type="text" name="quantity" value="{{$v_content->quantity}}" autocomplete="off" size="2">
		<input  type="hidden" name="id" value="{{$v_content->id}}" >
		<button type="submit" class="cart_quantity_up"> + </button>
		
		</form>


								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_content->getPriceSum()}}</p> <!-- Individual get price sum -->
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








<!-- Payment Method -->

<div>
<form action="{{url('/order_place')}}" method="post"> <!-- payment Bkash,cash,rocket --> 
		{{csrf_field()}}
	<input type="radio" name="payment_method" value="Handcash">Hand Cash<br>
	<input type="radio" name="payment_method" value="Bkash">Bkash<br>
	<input type="radio" name="payment_method" value="Rocket">Rocket<br>
	<input type="submit" name="" value="Done">
	
</div>


</form>


@endsection
