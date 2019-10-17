<?php
function currencyConverter($from_Currency,$to_Currency,$amount) {	
    $urlPart = urlencode($from_Currency . "_" . $to_Currency);
	$get = file_get_contents("https://free.currencyconverterapi.com/api/v6/convert?apiKey=d2f3a1b7174c3a665d3e&q=$urlPart&compact=y");
    $get = json_decode($get, true);
    $rate = $get[$from_Currency . "_" . $to_Currency]['val'];
	$converted_amount = $amount*$rate;
  
    $converted_amount = number_format($converted_amount, 2);
	$data = array( 'rate' => $rate, 'converted_amount' =>$converted_amount, 'from_Currency' => strtoupper($from_Currency), 'to_Currency' => strtoupper($to_Currency));
	return json_encode( $data );	
}
?> 