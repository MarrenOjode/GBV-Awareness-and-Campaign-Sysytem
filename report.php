<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBV: Report a Case</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="report.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

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
      

    <div class="login">
        
        <h2 class="login-header">REPORT A CASE</h2>
		
      
        <form class="login-container" method="POST" action="case.php">
				<div class="flex-container">

				  <div class="flex-child">
					<p>Name<input type="text" placeholder="Full Name" name="username" required></p>
				  </div>

					<div class="flex-child">
						<p>Address<input type="addr" placeholder="Address" name="addr" required></p>
					</div>
				  
				</div>

				<div class="flex-container">

				  <div class="flex-child">
						<p>I am the: </p>
						<select name="select" id="#">
							<option value="1">Victim</option>
							<option value="2">Perpetrator</option>
							<option value="3">Community Member</option>
							<option value="4">Other</option>
						</select>
				  </div>
				  
				</div>
				
				<div class="flex-container">

				  <div class="flex-child">
						<p>Preferred Method of communication:</p>
						<select name="select" id="#">
							<option value="1">Phone</option>
							<option value="2">Email</option>
						</select>
				  </div>				  
				</div>

				<div class="flex-container">

				  <div class="flex-child">
						<p>Incident Type:</p>
						<select name="select" id="#">
							<option value="1">Physical Abuse</option>
							<option value="2">Emotional Abuse</option>
							<option value="3">Rape</option>
							<option value="4">Other</option>
						</select>
				  </div>  
				</div>

				<div class="flex-container">

				  <div class="flex-child">
						<p>When can we contact you?</p>
						<select name="select" id="#">
							<option value="1">Anytime</option>
							<option value="2">Only at a date and time I suggest</option>
						</select>
				  </div>
				  				  
				</div>
				
				<div class="flex-container">

					<div class="field textarea">
						<p>Comment:</p>
                            <textarea cols="60" rows="5" placeholder="Message.." required></textarea>
                        </div>	
				</div>
				<p><input type="submit" value="SUBMIT"></p>
            </form>

       
      </div>

    </div>

    
</body>
</html>