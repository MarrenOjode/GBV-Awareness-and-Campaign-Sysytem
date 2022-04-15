<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBV: Campaign and Awareness</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="log.css">
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
        <div class="login-triangle"></div>
        
        <h2 class="login-header">  Admin Login </h2>
      
        <form class="login-container"  method="POST" action="login2.php">
		
			<div class="flex-container">
				  
				  <div class="flex-child green">
					<p>Name<input type="text" placeholder="Name" name="username" required></p>
				  </div>
				  
				  <div class="flex-child green">
					<p>Email<input type="email" placeholder="Email" name="email" required></p>
				  </div>
				  
			</div>
			
			<div class="flex-container">
				  
				  <div class="flex-child green">
					<p>Password<input type="password" placeholder="Passwod" name="password" required></p>
				  </div>
				  
			</div>

          <p><a href="reset.php" id="forgot">Forgot Password?</a></p>
          <p><input type="submit" value="Log in"></p>
          <p style="text-align: center;"><strong>Need an account? <a href="adminSignup.php"><span style="color:brown;"> Sign Up </span></a><strong></p>
        </form>

       
      </div>

    </div>
    
</body>
</html>