@extends('pages.layout')
@section('content')
<div class="bg-primary"><h2> Please use following steps to pay now:</h2> </div>
                                                                                                                                            
<?php $customer_id=Session::get('customer_id');?>
<?php $content= Cart::getContent(); ?>

<li>Go to bKash Menu by dialing *247#</li>
<li>Choose 'Payment' option by pressing '3'</li>
<li>Enter our Merchant wallet number : 01730791523</li>
<li>Enter BDT. amount you have to pay : {{Cart::getTotal()}}</li>
<li>Enter a reference against your payment : <?php echo $customer_id; ?></li>
<li>Enter the counter number : 1</li>
<li>Now enter your PIN to confirm: xxxx</li>
<li>Done! You will get a confirmation SMS</li> 
<li>Enter your bKash wallet/ contact number and transaction ID in the below form and submit</li>




@endsection