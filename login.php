<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBV: Login Page </title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="login.css">
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
	
	
	<!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Login / Sign-Up</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
					<div class="img">
                        <i class="fas fa-handshake" id="fas" style='font-size:48px;color:teal'></i>
					</div>
						<a href="volunteerLogin.php" class="btn-2">Volunteer</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
						<div class="img">
                        <i class="fas fa-users" id="fas" style='font-size:48px;color:teal'></i>
					</div>
						<a href="victimLogin.php" class="btn-2">Victim</a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="img">
                        <i class="fas fa-user-cog" id="fas" style='font-size:48px;color:teal'></i>
					</div>
						<a href="adminLogin.php" class="btn-2">Admin</a>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
	

    <!-- footer section start -->
    <footer>
        <span>Created By OjodeMarren | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
	
			
	
    <script src="script.js"></script>
</body>
</html>
