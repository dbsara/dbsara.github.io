<?php include "sendmail.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Sara's portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.sidebar {width: 120px;background: #f1f1f1;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="white">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="sidebar bar-block small hide-small center">
  <!-- Avatar image in top left corner -->
  <img src="img/profilepic.jpg" style="width:100%">
  <a href="#home" class="bar-item button padding-large hover-white">
    <i class="fa fa-home xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="bar-item button padding-large hover-white">
    <i class="fa fa-user xxlarge"></i>
    <p>CURRICULUM</p>
  </a>
  <a href="#photos" class="bar-item button padding-large hover-white">
    <i class="fa fa-eye xxlarge"></i>
    <p>PORTFOLIO</p>
  </a>
  <a href="#contact" class="bar-item button padding-large hover-white">
    <i class="fa fa-envelope xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="top hide-large hide-medium" id="myNavbar">
  <div class="bar white opacity hover-opacity-off center small">
    <a href="#" class="bar-item button" style="width:25% !important">HOME</a>
    <a href="#about" class="bar-item button" style="width:25% !important">CURRICULUM</a>
    <a href="#photos" class="bar-item button" style="width:25% !important">PORTFOLIO</a>
    <a href="#contact" class="bar-item button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="padding-large" id="main">
  <!-- Header/Home -->
  <header class="container padding-32 center white" id="home">
    <h1 class="jumbo">Front-end Developer & Web Designer</h1>
    <h2>Superior Technician for the Developing of Software Applications and Administration of Business Information Systems</h2>
    <p></p>
  </header>

  <!-- About Section -->
  <div class="content justify text-grey padding-64" id="about">
    <h2 class="text-grey">Sara Della Bona</h2>
    <hr style="width:200px" class="opacity">
    <p>Since I was in my early teens, I've been playing with the code, managing and designing forums, always enjoying the freedom of it.<br>
        After trying different options, I later decided to come back to it and achieve a technical diploma that would help me make it more than a hobby, pairing it with my self-taught knowledge of graphical tools.<br>        
        I love the creative aspects of it - trying to create eye-catching but tasteful designs - but most of all I revel in the possibility of learning hands-on, through trial and error.<br>        
        My life path might sound peculiar, but the background theme of it never changed: I love expressing myself through my passions, and I enjoy knowing things (among other more earthly things like books, food, music and vintage stuff). So what better field than this, constantly evolving, where you never stop learning? </p>
    <h3 class="padding-16 text-grey">My Skills</h3>
    <p class="wide">CSS | HTML</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:100%"></div>
    </div>
    <p class="wide">Javascript | React | Node.js</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="wide">Photoshop | Gimp</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:80%"></div></div>
      <p class="wide">Java</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:60%"></div>
    </div>
    <p class="wide">noSQL | SQL | Python</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:60%"></div>
    </div>
    <p class="wide">UI | UX </p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:100%"></div>
    </div><br>
    <h3 class="padding-16 text-grey">I'm learning</h3>
    <p class="wide">C# | .NET</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:60%"></div></div>
      <p class="wide">PHP</p>
    <div class="light-grey">
      <div class="dark-grey" style="height:28px;width:10%"></div></div>
      <br>
    
    
    <button class="button light-grey padding-large section">
      <i class="fa fa-download"></i> <a href="CV.pdf" download>Download Resume</a>
    </button>
    
    
    <!-- Testimonials -->
    <h3 class="padding-24 text-grey">My Reputation</h3>  
    <img src="img/sans.png" alt="Avatar" class="left circle margin-right" style="width:80px">
    <p><span class="large margin-right">My mom</span> CEO at My Mom</p>
    <p>I think Sara is pretty neat! You should hire her!</p><br>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="padding-64 content" id="photos">
    <h2 class="text-grey">Projects</h2>
    <hr style="width:200px" class="opacity">

    <!-- Grid for photos -->
    <div class="row-padding" style="margin:0 -16px">
      <div class="half">
        <img src="img/design.jpg" style="width:100%">
        <img src="img/gaming.jpg" style="width:100%">
        <img src="img/books.jpg" style="width:100%">
      </div>
    
      <div class="half">
        <img src="img/lightbulb.jpg" style="width:100%">
        <img src="img/vaporwave.jpg" style="width:100%">
        <img src="img/plants.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="padding-64 content text-grey" id="contact">
    <h2 class="text-grey">Contact Me</h2>
    <hr style="width:200px" class="opacity">

    <div class="section">
      <p><i class="fa fa-map-marker xxlarge margin-right"></i> Italy</p>
      <p><i class="fa fa-linkedin xxlarge margin-right"></i> <a href="">Linkedin</a></p>
      <p><i class="fa fa-envelope xxlarge margin-right"> </i> Email: dellabonasara@gmail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form method="post">
      <p><input class="input padding-16" type="text" placeholder="Name" required name="name"></p>
      <p><input class="input padding-16" type="text" placeholder="Email" required name="email"></p>
      <p><input class="input padding-16" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="input padding-16" type="text" placeholder="Message" required name="message"></p>
      <p>
        <button class="button light-grey padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="content padding-64 text-grey xlarge">
    <i class="fa fa-facebook-official hover-opacity"></i>
    <i class="fa fa-instagram hover-opacity"></i>
    <i class="fa fa-snapchat hover-opacity"></i>
    <i class="fa fa-pinterest-p hover-opacity"></i>
    <i class="fa fa-twitter hover-opacity"></i>
    <i class="fa fa-linkedin hover-opacity"></i>
    
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
