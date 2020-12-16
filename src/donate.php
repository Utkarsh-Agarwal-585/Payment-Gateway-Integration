<?php 
if (isset($_GET['id']) && $_GET['id'] == 100){
	$purpose  = "Fund Raiser";
	$amnt = 100 ;
}
else{
	echo "Error in Donation :(";
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Mojo</title>
	<h1 align="center" style="font-size:90px;color:white;font-family:Ink Free;">Covoid - 19 fund raiser</h1>
<style>
label{
width:240px;
display:inline-block;
}
</style>
</head>
<body style="background-image:url('img/IMG-20190610-WA0007.jpg');height:100vh; width:100%;background-repeat: repeat-y;background-size: 100% 100%;background-attachment: fixed;s">

	<div style="height:30px;line-height:30px;text-align:center;">
		<p>
			<b>Purpose : </b> <?php echo $purpose; ?>
		</p>
		<p>
			<b>Amount : </b> <?php echo $amnt; ?> <b>/-</b>
		</p>
	</div>
	<br>
	<br>
<h1 align="center">Your Payment Details</h1>
<div id="login_form" style="height:30px;line-height:30px;text-align:center;">
<form action="pay.php" method="post" accept-charset="utf-8" >
	<input type="hidden" name="purpose" value="<?php echo $purpose; ?>">
	<input type="hidden" name="amount" value="<?php echo $amnt; ?>">
	<div class="form-group">
<label> Your Name</label>
<input type="text" class = "form-control" name="name" placeholder="Enter your Full name "required><br>
</div>
<div class="form-group">
<label> Your Phone</label>
<input type="text" class = "form-control" name="phone" placeholder="Enter your phone number"required><br>
</div>
<div class="form-group">
<label> Your Email</label>
<input type="email" class = "form-control" name="email" placeholder="Enter your email "required><br>
</div>
<input type="submit" class="btn btn-success btn-lg" value="Click here to pay Rs:<?php echo $amnt; ?>">

</form>
</div>


</body>
</html>