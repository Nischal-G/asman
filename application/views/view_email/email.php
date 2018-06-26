<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url('lib/css/bootstrap.css')?>">
	

	<script src="<?=base_url('lib/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('lib/js/bootstrap.min.js')?>"></script>
</head>
<style type="text/css">
	.head{color:#51211B;}
	.green{color:#AEE025;}
	.blue{color: #20948F;}
</style>
 <body>
  	<div class="container">
		<div class="row " ><br><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8 well">
				
					<h3 class="head">New Member Request</h3>
					<h4>New Member has been requested from <?=$name?></h4>
					<hr>
					<h4 class="head">Full Name :<strong class="green"><?=$name?></strong></h4>
					<h4 class="head">Address :<strong class="green"><?=$address?></strong></h4>
					<h4 class="head">Email Address :<strong class="green"><?=$email?></strong></h4>
					<h4 class="head">Date of Birth :<strong class="green"><?=$dob?></strong></h4>
					<h4 class="head">Sex :<strong class="green"><?=$sex?></strong></h4>
					<h4 class="head">Batch :<strong class="green"><?=$batch?></strong></h4>
					<h4 class="head">Occupation :<strong class="green"><?=$contact?></strong></h4>
					<h4 class="head">Contact Detail :<strong class="green"><?=$choice?></strong></h4>
					<h4 class="head">Organization :<strong class="green"><?=$occ?></strong></h4>
					<h4 class="head">Maritial Status :<strong class="green"><?=$org?></strong></h4>
					<h4 class="head">Spouse Name :<strong class="green"><?=$spousename?></strong></h4>
					<h4 class="head">Spouse Occupation :<strong class="green"><?=$spouseocc?></strong></h4>
					<h4 class="head">Message :<strong class="green"><?=$message?></strong></h4>
					<hr>
				
				<h5>Please don't hesitate for a query. We'll be always hearing you. Thank you!</h5>
				
			<div class="footer">
				<h4><STRONG class="blue">Thanks and regards,<br>Aryan</STRONG><br>CEO <br>Cell: +977-9849985905</h4>
				<!-- <img src="<?=base_url('lib/images/logo.png')?>" alt="Frugal Store" width="150px" /> -->
                <!-- <h3>Frugal Store</h3> -->
			</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
 </body>
 </html>