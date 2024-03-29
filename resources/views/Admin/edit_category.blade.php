@extends('admin.admin_layout')
@section('admin_content')

<!-- Edit Manufacture Code -->

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Update Categories</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Categories</h2>
						
					</div>


					<!-- Display session  message by this code -->


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
						<form class="form-horizontal" action="{{url('/update_category/'.$category_info->Categories_id)}}" method="post">
							{{ csrf_field()}}
						  <fieldset>


						  	<!-- Categories Name Edit field  -->
							
							<div class="control-group">
							  <label class="control-label" for="date01">Categories Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="Categories_name" value="{{$category_info->Categories_name}}">
							  </div>
							</div>
         



                      <!-- Categories description Edit field  --> 
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Categories Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="Categories_description" rows="3">
									{{$category_info->Categories_description}}

								</textarea>
							  </div>
							</div>

							
                  <!-- Update Categories Submit button  -->


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Categories</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>

			</div>


@endsection