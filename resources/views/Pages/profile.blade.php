@extends('pages.layout')
@section('content')



 <div class="panel panel-success">
      <div class="panel-heading">{{$user_view_details->customer_name}} Profile</div>
      <div class="panel-body">



<!-- User Profile Code -->


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well well-sm">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <img src="{{URL::to('frontend/images/home/customer.jpg')}}" alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-6 col-md-8">
            <h4>
                 <!-- User Name by Database -->
                {{$user_view_details->customer_name}}</h4> 

           


            <p>
                <i class="glyphicon glyphicon-envelope"></i>{{$user_view_details->customer_email}}
                <br />
                <i class="glyphicon glyphicon-globe"></i>{{$user_view_details->customer_mobile_number}}
                </p>
            <!-- Split button -->
            
        </div>
    </div>
    </div>
        </div>
    </div>
</div>



</div>
    </div>



@endsection