extends('admin.admin_layout')
@section('admin_content')



<!-- Edit manufacture html form -->

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Update manufacture</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update manufacture</h2>
						
					</div>

					<!-- Display message showing failed or success edit -->


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
						<form class="form-horizontal" action="{{url('/update_manufacture/'.$manufacture_info->manufacture_id)}}" method="post">
							{{ csrf_field()}}
						  <fieldset>


						  	<!-- Manufacture Name edit -->
							
							<div class="control-group">
							  <label class="control-label" for="date01">manufacture Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="manufacture_name" value="{{$manufacture_info->manufacture_name}}">
							  </div>
							</div>

							<!-- Categories DESCRIPTION Edit field  -->
         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">manufacture Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacture_description" rows="3">
									{{$manufacture_info->manufacture_description}}

								</textarea>
							  </div>
							</div>

							



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update manufacture</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>

			</div>


@endsection