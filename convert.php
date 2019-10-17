<?php 
include_once("functions.php");
if(isset($_POST['convert'])) {
	$from_currency = trim($_POST['from_currency']);
	$to_currency = trim($_POST['to_currency']);
	$amount = trim($_POST['amount']);
    
    // Input validation
    
    if(!(is_numeric($amount) && (int) $amount >= 0)) {
      $data = array('error' => '2');
		echo json_encode( $data );	
		exit;
    }
  
    // Checking for the same selected currency name in both drop-down menus
  
	if($from_currency == $to_currency) {
	 	$data = array('error' => '1');
		echo json_encode( $data );	
		exit;
	}
	$converted_currency=currencyConverter($from_currency, $to_currency, $amount);
  
	// Print output
	echo $converted_currency;
} 
?>