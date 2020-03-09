<!--payment_content.blade.php-->
@extends('about_layout')

@section('content')
<section class="payment">
	<h4 class="pay">Payment Method</h4>
<div class="bkash">
<img src="/front/images/bkash.png">
</div>

<div class="roket">
<img src="/front/images/roket.png">
</div>

<p class="tr">TrxID: Every bKash/Roket transaction has a Unique ID which is called TrxID. bKash/Roket provides the TrxID to both sender and receiver through an sms immediately after a transaction. It helps in identifying or verifying the transaction.</p>
<p class="ag">Agent Number / bKash Number: The number from which the money is sent. If TrxID cannot be provided for some reason, the agent number can be used for verification.</p>

<h5 class="mo">"Every team must send their TrxID when they registar.Aftar registar we send a confirmation sms in your mobile"</h5>


</section>
<!--<img src="/front/images/roket.png"height="400"width="400"align="right">
<img src="/front/images/bkash.png"height="400"width="400"align="top-left">
<img src="/front/images/bkash.png"height="400"width="400"align="top-right">-->






@endsection