<!DOCTYPE html>

<!-- Author: EPR 360 ARCH Team
     UODA, Batch 47  --> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Business Process Management Software</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('public/ourinfo/css/style.css') }}">

</head>

<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#home" class="logo">
        <img src="{{ asset('public/ourinfo/images/logo1.png') }}" alt=""> <!-- Have to Update with main logo  -->
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About us</a>
        <a href="#features">Our Features</a>
		<a href="#contact">Request A Demo</a>
		<a href="#team">Our Team</a>
		<a href="#review">Reviews</a>
        <a href="#contact">Contact</a>
        <a href="{{ url('login') }}">Login</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div> <!-- mobile menu icon-->
		<!-- <div class="fas fa-air-freshener" id="login-btn"></div> !!!!!!--Testing Login Panel-->
    </div>
	
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>ERP 360 Arch</h3>
        <p>It's a business process management software, that manages and integrates a company's
financials, supply chain, operations, commerce, reporting, manufacturing, and human resource activities.</p>
        <a href="#features" class="btn">Features</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">
		
        <div class="image">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
<dotlottie-player src="https://assets2.lottiefiles.com/dotlotties/dlf10_q0vtqaxf.lottie"  background="transparent"  speed="1"  style="width: 350px; height: 350px;"  loop  autoplay></dotlottie-player>
			</div>
		
        <div class="content">
            
            <p>Every construction project is unique with its own sets or potential and difficulty. In this fast moving world where every penny counts your client want to spend in a company who they can trust with their money. 
Now a days where everything is a touch away everyone wants to remain connected to what matters to them.
Unlike any other industry, construction and architecture projects tends to take much time than usual.<br>
<br>
There always some kind of delay. Maybe from client side or your stuffs side. These delay can seriously hurt your business. what can save you from this dire condition is remain in constant communication with your clients.<br>
<br>
This is where our projects come into play. We built this software to help small businesses who have limited budget.
We made this software as resourceful as possible. You can automate all your business functions like sales, accounting, payroll, Hiring, managing project from one single dashboard.
</p>
  
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- Our Features section start -->

<section class="features" id="features">

    <h1 class="heading"> Our <span>Features</span> </h1>

	<div class="row">

        <div class="content">
            
            <ul class="fa-ul">
  <li><span class="fa-li"><i class="fas fa-copy"></i></span>Paperless Technology</li>
  <li><span class="fa-li"><i class="fas fa-tasks"></i></span>Project Management</li>
  <li><span class="fa-li"><i class="fas fa-users"></i></span>Team/Stuff Management</li>
  <li><span class="fa-li"><i class="fas fa-calculator"></i></span>Easy Account And Payroll Management</li>
  <li><span class="fa-li"><i class="fas fa-laptop-house"></i></span>Work From AnyWhere</li>
  <li><span class="fa-li"><i class="fas fa-hand-holding-usd"></i></span>Saves Time And Money</li>
  <li><span class="fa-li"><i class="far fa-life-ring"></i></span>Global support</li>
</ul>
  
        </div>
		
        <div class="image">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_qNRdPD.json"  background="transparent"  speed="1"  style="width: 350px; height: 350px;"  loop  autoplay></lottie-player>
			</div>
    </div>

</section>
<!-- Our Features section ends -->

<!-- team section starts  -->

<section class="team" id="team">

    <h1 class="heading"> our <span>Team</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="ah" src="{{ asset('public/ourinfo/images/our team/Ahmmed Imtiaj Shahriar.jpg') }}" alt="">
            <h3>Ahmmed Imtiaj Shahriar</h3>
			<div class="icons">
                <a href="mailto:#" class="far fa-envelope"></a>
                <a href="#" class="fab fa-linkedin-in"></a>
                <a href="tel:" class="fas fa-phone-volume"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{ asset('public/ourinfo/images/our team/Ashikur Rahman Badhon.jpg') }}" alt="">
            <h3>Ashikur Rahman Badhon</h3>
            <div class="icons">
                <a href="mailto:badhon@vanguardsln.com" class="far fa-envelope"></a>
                <a href="https://www.linkedin.com/in/ar-badhon/" class="fab fa-linkedin-in"></a>
                <a href="tel:8801714178936" class="fas fa-phone-volume"></a>
            </div>
        </div>

        <div class="box">
            
			<img src="{{ asset('public/ourinfo/images/our team/Alamin Hossain.jpg') }}" alt="">
            <h3>MD. Al-AMIN HOSSAIN</h3>
            <div class="icons">
                <a href="mailto:mdalaminhossain0403@gmail.com" class="far fa-envelope"></a>
                <a href="https://www.linkedin.com/in/alamin-hossain-b30211213/" class="fab fa-linkedin-in"></a>
                <a href="tel:8801957040358" class="fas fa-phone-volume"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{ asset('public/ourinfo/images/our team/Asiqur Rahman Saqib.jpg') }}" alt="">
            <h3>Asiqur Rahman Saqib</h3>
            <div class="icons">
                <a href="mailto:#" class="far fa-envelope"></a>
                <a href="#" class="fab fa-linkedin-in"></a>
                <a href="tel:" class="fas fa-phone-volume"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{ asset('public/ourinfo/images/our team/Md. Abu Bakar Siddique.jpg') }}" alt="">
            <h3>Md. Abu Bakar Siddique</h3>
            <div class="icons">
                <a href="mailto:#" class="far fa-envelope"></a>
                <a href="#" class="fab fa-linkedin-in"></a>
                <a href="tel:" class="fas fa-phone-volume"></a>
            </div>
        </div>

        
		<div class="box">
            <img src="{{ asset('public/ourinfo/images/our team/Nusrat Xahan Raufi.jpg') }}" alt="">
            <h3>Nusrat Jahan</h3>
            <div class="icons">
                <a href="mailto:#" class="far fa-envelope"></a>
                <a href="#" class="fab fa-linkedin-in"></a>
                <a href="tel:" class="fas fa-phone-volume"></a>
            </div>
        </div>
		
		
		<div class="box">
            <img src="{{ asset('public/ourinfo/images/our team/Keya Akter.jpg') }}" alt="">
            <h3>Keya Akter</h3>
            <div class="icons">
                <a href="mailto:#" class="far fa-envelope"></a>
                <a href="#" class="fab fa-linkedin-in"></a>
                <a href="tel:" class="fas fa-phone-volume"></a>
            </div>
        </div>

    </div>

</section>

<!-- team section ends -->

<!-- review section starts  --->
<section class="review" id="review">

    <h1 class="heading"> What People <span>Says</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="{{ asset('public/ourinfo/images/quote-img.png') }}" alt="" class="quote">
            <p>ARCH360 has been one of the easiest products we've come across to get started with. The menus are clear, everything is easy to find and mistakes are easy to fix. The data import functionality is very easy to use - just copy and paste from a spreadsheet and you're good to go.</p>
            <img src="{{ asset('public/ourinfo/images/Mostafijur.jpg') }}" class="user" alt="">
            <h3>Shraban Mojumdar</h3>
			<p>CEO, Vanguard Solution</p>
        </div>

        <div class="box">
            <img src="{{ asset('public/ourinfo/images/quote-img.png') }}" alt="" class="quote">
            <p>I love so many things about this. Beautiful interface, amazing support (instantaneous directions if I chat with them and the developers can turn on a dime to implement features if requested).</p>
            <img src="{{ asset('public/ourinfo/images/Rakib.jfif') }}" class="user" alt="">
            <h3>Rakib Hassan</h3>
            <p>Manager, AutomaFly</p>
        </div>
        
        <div class="box">
            <img src="{{ asset('public/ourinfo/images/quote-img.png') }}" alt="" class="quote">
            <p>We have been using ARCH360 for more than 20 years. By using this software we have significantly raised the level of services we provided, got the necessary stability, speed and ease of use.  It is a really warm recommendation for all those who want to have a modern, comprehensive, complete software to run the company's business from all fields of activities.</p>
            <img src="{{ asset('public/ourinfo/images/Tahmid.jpg') }}" class="user" alt="">
            <h3>Tahmidur Rahman</h3>
            <p>CEO, BigD-Lab</p>
        </div>

    </div>

</section>

<-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">
	   <div class="location">
        <iframe class="map" <img src="{{ asset('public/ourinfo/images/map.jpg') }}" alt="" href="url"><src="https://www.google.com/maps/place/University+of+Development+Alternative/@23.7514455,90.3669993,16z/data=!4m9!1m2!2m1!1sUODA!3m5!1s0x3755bf4d3068e8a1:0xcbebaedd39043ca6!8m2!3d23.7520198!4d90.3670806!15sCgRVT0RBkgEScHJpdmF0ZV91bml2ZXJzaXR5?hl=en" href="https://www.google.com/maps/place/University+of+Development+Alternative/@23.7514455,90.3669993,16z/data=!4m9!1m2!2m1!1sUODA!3m5!1s0x3755bf4d3068e8a1:0xcbebaedd39043ca6!8m2!3d23.7520198!4d90.3670806!15sCgRVT0RBkgEScHJpdmF0ZV91bml2ZXJzaXR5?hl=en" ></iframe>
       </div>


		<div class="container">
			<form action="/action_page.php">
				<label for="fname">Name</label>
				<input type="text" id="fname" name="Name" placeholder="Your name..">

				<label for="lname">Email</label>
				<input type="text" id="lname" name="Email" placeholder="Your Email">

				<label for="country">Country</label>
				<select id="country" name="country">
					<option value="australia">Australia</option>
					<option value="canada">Canada</option>
					<option value="usa">USA</option>
					<option value="usa">BANGLADESH</option>
				</select>

				<label for="subject">Massage</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>

    </div>

</section>

<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About us</a>
        <a href="#features">Our Features</a>
		<a href="#contact">Request A Demo</a>
		<a href="#team">Our Team</a>
		<a href="#review">Reviews</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="credit">created by <span>ARCH 360</span> || all rights reserved || © 2022</div> 

</section>

<!-- footer section ends -->




<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>