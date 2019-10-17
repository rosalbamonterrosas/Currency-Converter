<?php 
include('header.php');
?>
<title>p5</title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/ajax.js"></script>
<script type="text/javascript" src="script/currency_convert.js"></script>
<?php include('container.php');?>
<div class="container-fluid">
	<h1>Currency Converter</h1>	
	<br />
	<br />
	<br />
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
	<form method="post" id="currency-form"> 		
		<div class="form-group">
		<div class=row><label>From</label>
			<select name="from_currency" id="from_currency">
<!--
				<option value="INR">Indian Rupee</option>
				<option value="USD" selected="1">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
-->
          </select></div>	
			&nbsp;<div class=row><label>Amount</label>	
          <input type="text" placeholder="Currency" name="amount" id="amount" /></div>			
          &nbsp;<div class=row><label>To</label>
			<select name="to_currency" id="to_currency">
<!--
				<option value="INR" selected="1">Indian Rupee</option>
				<option value="USD">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
-->
			</select></div>			
          &nbsp;&nbsp;<div class=row><button type="submit" name="convert" id="convert" class="btn btn-primary">Convert</button><button type="button" class="btn btn-warning switch"><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i></button></div>	
				
		</div>			
	</form>	
	
	<div class="form-group" id="converted_rate"></div>	
	<div id="converted_amount"></div>
  </div>
</div>
</div>
    <!-- Footer -->
      <footer class="footer1">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 h-100 text-center text-lg-left my-auto">
              <p class="small mb-4 mb-lg-0 text-center">&copy; Rosalba Monterrosas 2019. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
<?php include('footer.php');?>


