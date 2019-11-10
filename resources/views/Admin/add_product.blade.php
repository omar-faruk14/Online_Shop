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
			<form class="form-horizontal" action="{{url('/save_product')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field()}}
			  <fieldset>

			  	<!-- Product Name Form -->
				
				
				<div class="control-group">
	  <label class="control-label" for="date01">Product Name</label>
	  <div class="controls">
		<input type="text" class="input-xlarge" name="product_name" required="">
	  </div>
	</div>



				<!-- Product Category Form -->






	<div class="control-group">
		<label class="control-label" for="selectError3">Product Category</label>
		<div class="controls">
		  <select id="selectError3">
		  	<option>Select Categories</option>
         <?php 
         $all_published_category=DB::table('tbl_category')
          ->where('publication_status',1)
          ->get();

          foreach ($all_published_category as $v_category) 

          { ?>
          	<option>{{$v_category->Categories_name}}</option>
          <?php } ?>


         

			
			
		  </select>
		</div>
	  </div>



<!-- product manufacture Form -->


	  <div class="control-group">
		<label class="control-label" for="selectError3">Manufacture Name</label>
		<div class="controls">
		  <select id="selectError3">
			<option>Select Manufacture</option>
         <?php 
         $all_published_manufacture=DB::table('tbl_manufacture')
          ->where('publication_status',1)
          ->get();

          foreach ($all_published_manufacture as $v_manufacture) 

          { ?>
          	<option>{{$v_manufacture->manufacture_name}}</option>
          <?php } ?>
			
		  </select>
		</div>
	  </div>


<!-- product short description form -->

	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">Product Short description</label>
	  <div class="controls">
		<textarea class="cleditor" name="product_short_description" rows="3" required=""></textarea>
	  </div>
	</div>


<!-- product long description form -->

	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">Product Long description</label>
	  <div class="controls">
		<textarea class="cleditor" name="product_long_description" rows="3" required=""></textarea>
	  </div>
	</div>

<!-- product price form -->

	<div class="control-group">
	  <label class="control-label" for="date01">Product Price</label>
	  <div class="controls">
		<input type="text" class="input-xlarge" name="product_price" required="">
	  </div>
	</div>

<!-- product image input form -->

<div class="control-group">
			  <label class="control-label" for="fileInput">Product Image</label>
			  <div class="controls">
				<input class="input-file uniform_on"  name="product_image" id="fileInput" type="file">
			  </div>
			</div>  


 <!-- Product Size -->
 <div class="control-group">
	  <label class="control-label" for="date01">Product Size</label>
	  <div class="controls">
		<input type="text" class="input-xlarge" name="product_size" required="">
	  </div>
	</div>


<!-- Product Color -->


	<div class="control-group">
	  <label class="control-label" for="date01">Product Color</label>
	  <div class="controls">
		<input type="text" class="input-xlarge" name="product_color" required="">
	  </div>
	</div>


<!-- product status form -->

	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">product Status</label>
	  <div class="controls">
		<input type="checkbox" name="product_status" value="1" required="">
	  </div>
	</div>



<!-- submit form -->


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