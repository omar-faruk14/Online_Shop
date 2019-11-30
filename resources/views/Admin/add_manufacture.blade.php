@extends('admin.admin_layout')
@section('admin_content')


<!-- Manufacture HTML form code -->

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Manufacture</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufaceture</h2>
						
					</div>


					<!-- Session failed or success Message showing This code -->


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
						<form class="form-horizontal" action="{{url('/save_manufacture')}}" method="post">
							{{ csrf_field()}}
						  <fieldset>


						  	<!-- Manufacture Name field -->
							
							<div class="control-group">
							  <label class="control-label" for="date01">Manufacture Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="manufacture_name" required="">
							  </div>
							</div>


							<!-- Manufacture Description Field -->
         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Manufacture Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacture_description" rows="3" required=""></textarea>
							  </div>
							</div>


							<!-- Publication Status -->

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="Publication_status" value="1" required="">
							  </div>
							</div>


                     <!-- ADD manufacture Submit button html code -->

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add manufacture</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>

			</div>


@endsection