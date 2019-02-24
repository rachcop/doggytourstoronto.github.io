<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us | Doggy Tours Toronto</title>
<link rel="stylesheet" href="styles/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" href="styles/custom.css" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Assistant:200,600|Karma:300" rel="stylesheet">
</head>

<body>

<div id="container">
	
	<div class="row header">
		<div class="row col-xs-5 col-sm-5 col-md-5 col-lg-5 logo">
			<img src="images/logo.png" class="logo" alt="doggy tours logo" title="Doggy Tours logo">
		</div>
		<div class="row col-xs-7 col-sm-7 col-md-7 col-lg-7 headnav">		
			<h2>Dog Walking &amp; Boarding</h2>
             <div class="nav">
				 <ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
				 </ul>
             </div>
		</div><!--/headnav-->
	</div><!---/#header--->
	<div class="row main">
		<div class="row col-xs-12 col-sm-12 col-md-4 col-lg-4 info">
			<img src="images/IMG-3686.JPG" class="button" title="luna sleeping" alt="sleeping dog">
			<ul class="contactdetail">
				<li>Andrew Vey</li>
				<li>Toronto, Ontario, Canada</li>
				<li>416.878.0262 / doggytourstoronto@gmail.com</li>
			</ul>
		</div>
		<div class="row col-xs-12 col-sm-12 col-md-6 col-lg-6 form pullright">	
			<h3>Get in touch!</h3>	
			<p>Complete the form below with more information about your request. <br /> We look forward to hearing from you!</p>
			<form enctype="multipart/form-data" action="#" id="form" method="POST" name="form">
				<label>Name: <br /><input type="text" name="name" size="30" maxlength="60" placeholder="(Required)" value="" /></label><br /><br />
				<label>Email Address: <br /><input type="text" name="email" size="30" maxlength="80" value="" placeholder="(Required)"/></label><br /><br />
				<label>Please tell us more about your request: <br /><textarea name="comment" rows="5" cols="40" value="" placeholder="(Required)"></textarea></label><br /><br />
				<p><input type="submit" class="submit" name="submit" value="Submit" /></p>
			</form>
			<h4><?php include "secure_email_code.php"?></h4>
		</div><!--/form-->
	</div><!--/.main-->
	<div id="row footer">
		<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
			<a href="#"><img src="images/facebook.png" alt="facebook logo" title="Facebook logo"></a>
			<a href="#"><img src="images/instagram.png" alt="Instagram logo" title="Instagram logo"></a>
			<p>DOGGY TOURS TORONTO 2019 | Website by: RC Web Designs</p>
		</div>
	</div><!---/#footer--->
	
</div><!---/#container--->
<script src="js/custom.js"></script>
</body>
</html>