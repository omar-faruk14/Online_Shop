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






				







		
					




		


		
			
									







<!-- Update 1 Quantity By this form -->

      
				
			</div>
		</div>
	</section> 








<!-- Payment Method -->

<div>
<form action="{{url('/order_place')}}" method="post">
		{{csrf_field()}}
	<input type="radio" name="payment_method" value="Handcash">Hand Cash<br>
	<input type="radio" name="payment_method" value="Bkash">Bkash<br>
	<input type="radio" name="payment_method" value="Rocket">Rocket<br>
	<input type="submit" name="" value="Done">
	
</div>


</form>


@endsection