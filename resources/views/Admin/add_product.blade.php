@extends('admin.admin_layout')
@section('admin_content')

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
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
			
		</div>


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
			<form class="form-horizontal" action="" method="post">
				{{ csrf_field()}}
			  <fieldset>
				
				
				<div class="control-group">
				  <label class="control-label" for="date01">product Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="product_name" required="">
				  </div>
				</div>






			<div class="control-group">
				<label class="control-label" for="selectError3">Product Category</label>
				<div class="controls">
				  <select id="selectError3">
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
					<option>Option 4</option>
					<option>Option 5</option>
				  </select>
				</div>
			  </div>






			  <div class="control-group">
				<label class="control-label" for="selectError3">Manufacture Name</label>
				<div class="controls">
				  <select id="selectError3">
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
					<option>Option 4</option>
					<option>Option 5</option>
				  </select>
				</div>
			  </div>




				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Product Short description</label>
				  <div class="controls">
					<textarea class="cleditor" name="product_description" rows="3" required=""></textarea>
				  </div>
				</div>




				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Product Long description</label>
				  <div class="controls">
					<textarea class="cleditor" name="product_description" rows="3" required=""></textarea>
				  </div>
				</div>




				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">product Status</label>
				  <div class="controls">
					<input type="checkbox" name="product_status" value="1" required="">
				  </div>
				</div>



				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add product</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div>

</div>


@endsection