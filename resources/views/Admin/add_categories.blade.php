@extends('admin.admin_layout')
@section('admin_content')


<!-- Add Categories Form -->
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Categories</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Categories</h2>
						
					</div>





<!-- Session Message showing This code  -->

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
						<form class="form-horizontal" action="{{url('/save_categories')}}" method="post">
							{{ csrf_field()}}
						  <fieldset>
							

							<!-- Categories Name Field -->


							<div class="control-group">
							  <label class="control-label" for="date01">Categories Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="Categories_name" required="">
							  </div>
							</div>


							<!-- Categories Description Field -->
         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Categories Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="Categories_description" rows="3" required=""></textarea>
							  </div>
							</div>


							<!-- Publication Status -->

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="Publication_status" value="1" required="">
							  </div>
							</div>



							<!-- Submit Add Categories -->



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Categories</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>

			</div>


@endsection