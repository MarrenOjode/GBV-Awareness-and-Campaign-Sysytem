<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="booking.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
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

	<section class="home" id="home">
	<div class="container">
		<!--<div class="container-time">
				<h2 class="heading">Time Open</h2>
				<h3 class="heading-days">Monday-Friday</h3>
				<p>7am - 11am (breakfast)</p>
				<p>11am - 10pm (lunch/dinner)</p>

				<h3 class="heading-days">Saturday and sunday</h3>
				<p>9am - 1am (breakfast)</p>
				<p>1am - 10pm (lunch/dinner)</p>

				<hr>

				<h4 class="heading-phone">Call Us: (123) 45-45-456</h4>
		</div>-->

		<div class="container-form">
				<form action="appointment.php">
					<h2 class="heading heading-yellow">BOOKING APPOINTMENT</h2><HR>

					<div class="form-field">
						<p>Your Name</p>
						<input type="text" placeholder="John Doe...">
					</div>
					<div class="form-field">
						<p>Your email</p>
						<input type="email" placeholder="abc@gmail.com">
					</div>
					<div class="form-field">
						<p>Date</p>
						<input type="date">
					</div>
					<div class="form-field">
						<p>Time</p>
						<input type="time">
					</div>
					<div class="form-field">
						<p>What kind of help?</p>
						<select name="select" id="#">
							<option value="1">Child Counseling</option>
							<option value="2">Victim Advocate</option>
							<option value="3">Men Counseling</option>
							<option value="4">Women Counseling</option>
							<option value="5">Other</option>
						</select>
					</div>

					<button class="btn">Submit</button>
				</form>
		</div>
	</div>
	</section>
	
</body>
</html>