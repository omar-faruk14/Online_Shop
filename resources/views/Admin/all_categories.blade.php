@extends('admin.admin_layout')
@section('admin_content')


<!-- All categories Form Display All Category -->
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

					<!-- Success or failed Message display -->

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
								  <th>Categories ID</th>
								  <th>Categories Name</th>
								  <th>Categories Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 


						  <!-- For each category Display loop code -->

						  @foreach($all_category_info as $v_category)



						  <tbody>
							<tr>
								<td>{{$v_category->Categories_id}}</td>
								<td class="center">{{$v_category->Categories_name}}</td>
								<td class="center">{{$v_category->Categories_description}}</td>
								<td class="center">
									@if($v_category->Publication_status==1)
									<span class="label label-success">Active</span>

									@else  
									<span class="label label-danger">
									Unactive</span>

									@endif
								</td>
								<td class="center">
									

									@if($v_category->Publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/unactive_category/'.$v_category->Categories_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>


									@else
                                       <a class="btn btn-success" href="{{URL::to('/active_category/'.$v_category->Categories_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									    </a>


									@endif


									<a class="btn btn-info" href="{{URL::to('/edit_category/'.$v_category->Categories_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete_category/'.$v_category->Categories_id)}}">
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