@extends('pages.layout')
@section('content')



<!-- Feature Product Item List -->

 <h2 class="title text-center">Welcome To Our Blog</h2>




  
 
<!-- Single Feature Product Display -->
<?php
        

foreach($all_published_product as $v_product) {?>
       
       <div class="card" style="margin:5px;padding:5px;border:2px solid #f1f1f1;min-height:200px;">
            <div class="card-body">
                       
                            <img src="{{URL::to($v_product->product_image)}}" style="height: 207px; width: 183px" alt="" />
                            
                        <div class="col-lg-9" style="float:right; margin-bottom:5px; padding:5px;">
                            <p style="font-size:20px;color:blue">{{($v_product->product_name)}}</p>
                                {{($v_product->product_long_description)}}
                        </div>
                        
                </div>
              
            </div>
       


    <?php } ?>




<!-- end feature product raw php code -->

        
        
   

@endsection