@extends('admin.admin_layout')
@section('admin_content')

<!-- All Product  Display HTML Table code -->

<ul class="breadcrumb">
	<li>
	<i class="icon-home"></i>
	<a href="index.html">Home</a> 
	<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Tables</a></li>
	</ul>

	<div class="row-fluid sortable">		
	<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>All Categories List</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>

	<!-- showing Alert message success or failed -->

	<p class="alert-success">


	<?php 
	$message=Session::get('message');

	if($message)
	{
		echo $message;
		Session::put('message',null);


	}
	 ?>
	</p>





	<div class="box-content">
		<table class="table table-striped table-bordered bootstrap-datatable datatable">
		  <thead>
			  <tr>
				  <th>Product ID</th>
				  <th>Product Name</th>
				 
				  <th>Product Image</th>
				  <th>Product Price</th>
				   <th>Category Name</th>
				  <th>Manufacture Name</th>
				  <th>Status</th>
				  <th>Actions</th>
			  </tr>
		  </thead> 

		  <!-- Retrive data from database and display here -->

		  @foreach($all_product_info as $v_product)



		  <tbody>
			<tr>
				<td>{{$v_product->product_id}}</td>
				<td class="center">{{($v_product->product_name)}}</td>
				


				<td> <img src="{{URL::to($v_product->product_image)}}" style="height: 80px; width: 80px">   </td>

				<td class="center">{{($v_product->product_price)}}</td>


				<td class="center">{{$v_product->Categories_name}}</td>
				<td class="center">{{$v_product->manufacture_name}}</td>
				<td class="center">
					@if($v_product->product_status==1)
					<span class="label label-success">Active</span>

					@else  
					<span class="label label-danger">
					Unactive</span>

					@endif
				</td>
				<td class="center">
					

					@if($v_product->product_status==1)
					<a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
						<i class="halflings-icon white thumbs-down"></i>  
					</a>


					@else
	                   <a class="btn btn-success" href="{{URL::to('/active_product/'.$v_product->product_id)}}">
						<i class="halflings-icon white thumbs-up"></i>  
					    </a>


					@endif


	
					<a class="btn btn-danger" href="{{URL::to('/delete_product/'.$v_product->product_id)}}">
						<i class="halflings-icon white trash"></i> 
					</a>
				</td>
			</tr>
			
		  </tbody>
		  @endforeach




	  </table>            
	</div>
	</div><!--/span-->

	</div><!--/row-->

			



@endsection