<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBV: Contact Us</title>
    <link rel="stylesheet" href="style.css">
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
	
	<section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-3"><span class="typing"></span></div>
				<div class="lnk-1"><a href="report.php">Report a Case</a> </div>               
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Should you wish to contact us or seek any assistance from us, use the details provided. Thank you.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">GBV Campaigners</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">1234-0000 Ruaraka, Nairobi - Kenya</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">gbv.campaigners@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Send Us a Message</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By OjodeMarren | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
	
	<script>
		// typing text animation script
    var typed = new Typed(".typing", {
        strings: ["- END..", "GENDER..", "BASED..", "VIOLENCE..", "TODAY!!"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

	</script>

    <script src="script.js"></script>
</body>
</html>