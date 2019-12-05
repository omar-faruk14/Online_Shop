@extends('admin.admin_layout')
@section('admin_content')


<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Mobile</th>
									   <th>Email</th>


									                                            
								  </tr>
							  </thead>  

							  @foreach($order_by_id as $v_order)  
							  <tbody>
								<tr>
									<td>{{$v_order->customer_name}}</td>
									<td class="center">{{$v_order->customer_mobile_number}}</td>
									<td class="center">{{$v_order->customer_email}}</td>
									                                     
								</tr>
								                                 
							  </tbody>
							     @endforeach
						 </table>  
						     
					</div>
				</div><!--/span-->




				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Address</th>
									  <th>mobile</th>                                          
								  </tr>
							  </thead>
							   @foreach($order_by_id as $v_order)   
							  <tbody>
								<tr>
									<td></td>
									<td class="center">{{$v_order->shipping_address}}</td>
									<td class="center">{{$v_order->shipping_mobile_number}}</td>
									                                      
								</tr>
								                                  
							  </tbody>
							   @endforeach
						 </table>  
						    
					</div>
				</div><!--/span-->
			</div><!--/row-->








			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>ID</th>
									  <th>Product Name</th>
									  <th>Product Price</th>
									  <th>Quantity</th>
									  <th>Order_Status</th>                                          
								  </tr>
							  </thead> 


							  @foreach($order_by_id as $v_order)  
							  <tbody>
								<tr>
									<td>{{$v_order->order_id}}</td>
									<td class="center">{{$v_order->product_name}}</td>
									<td class="center">{{$v_order->product_price}}</td>
									<td class="center">
										<span class="label label-success">{{$v_order->product_sales_quantity}}</span>
									</td> 
									<td class="center">{{$v_order->order_status}}</td>                                      
								</tr>
								                                
							  </tbody>
							  @endforeach
						 </table>  
						    
					</div>
				</div><!--/span-->
			</div><!--/row-->


@endsection