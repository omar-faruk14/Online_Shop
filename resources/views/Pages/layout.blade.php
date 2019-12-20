<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Titile Off Online Shop -->
    <title>Home | Oneline Shop</title>



<!-- CSS Bootstrap Link Set -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}"rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
 






<!-- image icon display -->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->




<!-- Header HTML Code  Email and Phone Number-->
<body onload="startTime()">
    <header id="header">

        <div class="header_top">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +880 151 7805 450</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@Oneline_shop.com</a></li>
                            </ul>
                        </div>
                    </div>






                    <!-- Social Link  -->
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="//www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="//www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<!-- Logo and Wishlist -->
        
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">


                        <!-- Home Page Logo Add -->
                        <div class="logo pull-left">
                            <a href="/"><img src="{{URL::to('frontend/images/home/HomePage_Omar.png')}}" alt="" /></a>
                        </div>
                        
                    </div>



                    <?php $customer_id=Session::get('customer_id');
                             $Shipping_id=Session::get('Shipping_id');?>


                               

                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php if($customer_id )   {?>
                                <li><a href="{{URL::to('/profile/'.$customer_id)}}"><i class="fa fa-user"></i>Account</a></li>

                            <?php } ?>





                      



<!-- set checkout by session customer_id ,if find customer id then not showing checkout otherwise showing checkout -->





 <!-- 3 condition set here,checkout execute this condition -->

                      <?php if($customer_id != NULL && $Shipping_id== NULL)  {?>

                        <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>


                    <?php } else if($customer_id != NULL && $Shipping_id != NULL) {?>
                        <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>



                        <?php } else {?>
                  <li><a href="{{URL::to('/login_check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                         <?php } ?>


                              
                                <li><a href="{{URL::to('/show_cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>












<!-- customer id session gate and if customer id have show logout otherwise show login -->

    <?php $customer_id=Session::get('customer_id');?> <!-- Get Customer ID from the session-->
    <?php if($customer_id !=NULL)  {?>     <!-- Check weather the cutomer ID in the session or not-->
<li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i>logut</a></li> <!-- If the customer want to log out then the session will be destroy-->
    <?php } else {?>
     <li><a href="{{URL::to('/login_check')}}"><i class="fa fa-lock"></i> Login</a></li> <!-- It will redirect the user to the login page -->
    <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Header Bottom -->

    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                                
                                <li class="dropdown"><a href="/blog">Blog</a>
                                    
                                </li> 
                                
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->









                       @yield('slider') ; 









    <!-- Categories List HTML Code -->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">



            <!-- php laravel code for published Categories Home Page -->

            <?php

            $all_published_Categories=DB::table('tbl_category')
            ->where('Publication_status',1)
            ->get();

            foreach($all_published_Categories as $v_category)

            {

            ?>


            <!-- Product Categories List -->
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{URL::to('/show_product_category/'.$v_category->Categories_id)}}">{{$v_category->Categories_name}}</a></h4>
                </div>
            </div>

        <?php } ?>
        </div><!--/category-products-->











                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">


                           
           <!-- Laravel Brand Display Code retrive manufacture from Database -->


       <?php

        $all_published_manufacture=DB::table('tbl_manufacture')
        ->where('Publication_status',1)
        ->get();

        foreach($all_published_manufacture as $v_manufacture)//loop from database

        {

        ?>


<!-- every loop made each manufacture item -->
 
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{URL::to('/show_product_manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right"><!-- (50) --></span>{{$v_manufacture->manufacture_name}}</a></li>
                
            </ul>
               <?php } ?>
        </div>
    </div> <!--/brands_products-->





                        
                        
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->


                       @yield('content')      
                </div>
            </div>
        </div>
    </section>
    








    <!-- Footer List -->
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © Online Shop</p>
                    <p id="txt"></p>
<h6>All right received.</h6>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.youtube.com/omartech24">Omar_Tech</a></span></p>
                </div>
            </div>
        </div>
    </div>
        
    </footer><!--/Footer-->
    



<!-- Bootstrap JavaScrip  -->
  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script>
        function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('txt').innerHTML ="Current Time: "+
          h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
        }
        </script>
</body>
</html>