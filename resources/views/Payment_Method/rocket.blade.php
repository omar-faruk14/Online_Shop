@extends('pages.layout')
@section('content')

<?php $customer_id=Session::get('customer_id');?>
<?php $content= Cart::getContent(); ?>





<div dir="ltr" style="text-align: left;" trbidi="on">
<div class="row" style="background-color: white; box-sizing: border-box; color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; margin-left: -15px; margin-right: -15px;">
<div style="box-sizing: border-box; margin-bottom: 10px; padding-left: 50px; text-align: justify;">
A). Go to your Rocket Mobile Menu by dialing *322#<br />
B). Choose Bill Pay<br />
C). Choose Self or Others<br />
D). Choose 0.Other<br />
E). Enter Biller ID number : 888<br />
F). Enter Your Bill Number: <?php echo $customer_id; ?><br />
G). Enter the bill amount : {{Cart::getTotal()}}<br />
H). Now enter your Rocket Mobile Menu “PIN” to confirm<br />
I). Done! You will receive a confirmation message from 16216</div>

@endsection