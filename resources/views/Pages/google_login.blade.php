@extends('pages.layout')
@section('content')


<!--- By this code get session information --->
<?php 
$customer_id=Session::get('customer_id');
$customer_name=Session::get('customer_name');
$customer_password=Session::get('customer_password');
$customer_email=Session::get('customer_email');
					?>
<!-- Google login user information showing -->

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Registrition with google Data
  </a>
  <div class="list-group-item list-group-item-action">=> Name : <?php echo $customer_name; ?></div>
  <div class="list-group-item list-group-item-action">=>Email : <?php echo $customer_email; ?></div>
  <div class="list-group-item list-group-item-action">=>Password : <?php echo $customer_password; ?> <b>(Keep Password)</b></div>
  <div class="list-group-item list-group-item-action disabled">=>ID : <?php echo $customer_id; ?></a>
</div>


@endsection
