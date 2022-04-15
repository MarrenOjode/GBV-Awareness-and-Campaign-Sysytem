<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBV: Donation</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="donation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
	<link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78060/animate.min.css" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"/>
	

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
		<nav class="navbar">
			<div class="max-width">
				<div class="logo"><a href="#">GBV-<span>Campaign.</span></a></div>
				<ul class="menu">
					<li><a href="index.php" class="menu-btn">Home</a></li>
					<li><a href="about.php" class="menu-btn">About Us</a></li>
					<li><a href="newsBlog.php" class="menu-btn">News Blog</a></li>
					<li><a href="takeAction.php" class="menu-btn">Take Action</a></li>
					<li><a href="contact.php" class="menu-btn">Contact</a></li>
					<li><a href="login.php" class="menu-btn">Login</a></li>
				</ul>
				<div class="menu-btn">
					<i class="fas fa-bars"></i>
				</div>
			</div>
		</nav>
	
					<div class="donate">
				

						<button>Donate</button>
						<form name="donAmount" id="donAmount">
						  <input type="radio" value="3" name="amount" id="three">
						  <label for="three">$3</label>
						  <input type="radio" value="25" name="amount" id="twentyfive">
						  <label for="twentyfive">$25</label>
						  <input type="radio" value="100" name="amount" id="hundred">
						  <label for="hundred">$100</label>
						  <input type="radio" value="other" name="amount" id="other">
						  <label for="other">Other</label>
						</form>
					</div>

					<div id="custom">
						  <h2>Donation Amount</h2>
						  <form name="customDonation" id="customDonation">
						  <div class="input-group-1">
							<label for="custom-amount">$</label>
							<input id="custom-amount" name="custom-amount" type="text">
							<div class="warn"></div>
						  </div>
						  </form>
						  <div class="clearfix">
							<button class="back" type="button">Back
							  <span></span>
							  <span></span>
							  <span></span>
							</button>
							<button class="next" type="button">Next</button>
						  </div>
					</div>

						<section class="details" id="details">
						  <div class="contact-info">
						  <h2>Basic Information</h2>
						  <form class="clearfix">
							<div class="input-group-2">
							<label>First Name</label>
							<input type="text">
							</div>
							<div class="input-group-2">
							<label>Last Name</label>
							<input type="text">
							</div>
							<div class="input-group-1">
							<label>Email Address</label>
							<input type="text">
							</div>
							<hr>
							<div class="input-group-1">
							<label>Street Address</label>
							<input type="text">
							</div>
							<div class="input-group-3">
							<label>City</label>
							<input type="text">
							</div>
							<div class="input-group-3">
							<label>State</label>
							<input type="text">
							</div>
							<div class="input-group-3">
							<label>Zip Code</label>
							<input type="text">
							</div>
						  </form>
						  <div class="clearfix">
							<button class="back" type="button">Back
							  <span></span>
							  <span></span>
							  <span></span>
							</button>
							<button class="next" type="button">Next</button>
						  </div>
						  </div>
						</section>

						<section class="card" id="card">
							<div class="contact-info">
						  <h2 style="font-weight:900";>Payment Information</h2>
						  <form class="clearfix">
							<div class="input-group-1">
							<label>Card Number</label>
							<input type="text">
							</div>
							<hr>
							<div class="input-group-1">
							<label>Employer</label>
							<input type="text">
							</div>
							
							<div class="input-group-1">
							<label>Occupation</label>
							<input type="text">
							</div>
						  </form>
						  <div class="clearfix">
							<button class="back" type="button">Back
							  <span></span>
							  <span></span>
							  <span></span>
							</button>
							<button class="next" type="button">Review</button>
						  </div>
						  </div>
						</section>

						<section class="processing">
						<div class="check">
						  <span></span>
						  <div class="mask">
						  </div>
						  <span></span>
						</div>

						<div class="outer">
						  <div class="inner">
						  </div>
						  <div class="progress">
						  </div>
						</div>
						<span class="message">Processing</span>
						</section>

						<section id="check">
						<div class="check">
						  <h2>Confirm Payment</h2>
						  <p style="font-weight:900"; style="font-size:50px">Please confirm your contribution of</p>
						  <span>$8888</span>
						  <button class="next" type="button">Confirm</button>
						  </div>
						</section>

						<section class="confirm" id="confirm">
						  <h2>Thank You!</h2>
						  <p>Your <span class="amount">$25</span> donation will help us reach <strong> 570 </strong> of GBV!</p><br><br>
						</section>



    <script src="donation.js"></script>
</body>
</html>
