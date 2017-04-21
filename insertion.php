








<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  #clu{
	color: red;
	}
 #clr{
	color: green;
	}
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#feedback">FEEDBACK</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Conrad</h1> 
  <p>Dont just stay,stay inspired.</p> 
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Conrad</h2><br>
      <h4>Conrad Hotels & Resorts is an international brand of luxury hotels and resorts owned and operated by Hilton Worldwide. Conrad was considered the luxury flagship brand in the Hilton Family of Brands, named after company founder Conrad Hilton, until being supplanted by The Waldorf-Astoria Collection in 2006.</h4><br>
      <p>Conrad Hotels & Resorts is access to life as you want to live it. A place to experience service and style on your own terms. A place to connect with the world. A place to stay inspired. We offer our guests one-of-a-kind experiences with sophisticated, locally inspired surroundings. Service that's more than personal, it's intuitive. And connections to people and places around the corner, and half way around the world.

If you had 1/3/5 hours to explore, what would you do? To help you make the most of your journey while traveling, Conrad Hotels & Resorts has enlisted Peter J Lindberg, the brand’s new Director of Inspiration, to curate a list of quintessential experiences. Each Conrad 1/3/5 hour experience reflects a local take on culture, art, food, and adventure. Guests can now make the most of their trip, even when time is at a premium. At Conrad we believe you should: Never just stay. Stay Inspired.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Background</h2><br>
      
      <p><strong>HISTORY:</strong> Barron Hilton, son of Conrad Hilton, founded Conrad Hotels, taking the name from that of his father. Hilton Hotels was, at the time, a separate company from Hilton International, and could not operate hotels outside the United States under the Hilton name. The newly named chain solved that problem. Hilton International had already started their own chain of Vista Hotels within the United States, as they faced the same prohibition on operating there under the Hilton name. The first Conrad hotel, the Conrad Jupiters Gold Coast in Australia, opened its doors in 1985.

When the two Hilton chains were rejoined in 2005, the need for the Vista and Conrad names vanished. Vista was phased out, while the Conrad brand was retained as a luxury wing of Hilton. Numerous hotels have since been opened under that name in the United States.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>



<!-------------------------------------------------------------------->

<!-- Container (Contact Section) -->
<div id="feedback" class="container-fluid bg-grey">
  

<h4> YOUR FEEDBACK MATTERS FOR US , GIVE YOUR FEEDBACK WHERE 1 IS VERY BAD 10 IS EXTRAORDINARY </h4>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 	
  <label for = "name">HOW FRIENDLY WERE THE HOTEL STAFF MEMBERS? </label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad1" id = "rd10" value = "10"> 10
   </label>
</div>

<label for = "name">HOW QUICK WAS THE CHECKIN PROCESS? </label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd1" value = "1"> 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad2" id = "rd10" value = "10"> 10
   </label>
   
   
</div>

  <label for = "name">HOW CLEAN WAS YOUR ROOM ALLOCATION AFTER ARRIVAL?</label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad3" id = "rd10" value = "10"> 10
   </label>
</div>

<label for = "name">HOW WELL EQUIPPED WAS YOUR ROOM? </label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad4" id = "rd10" value = "10"> 10
   </label>
   
   
</div>


  <label for = "name">HOW COMFORTABLE WAS YOUR BED LINENS?</label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad5" id = "rd10" value = "10"> 10
   </label>
</div>

<label for = "name">HOW QUICKLY DID THE HOTEL STAFFS RESPOND TO YOUR REQUESTS?</label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad6" id = "rd10" value = "10"> 10
   </label>
   
   
</div>

  <label for = "name">HOW WAS THE QUALITY OF FOOD?</label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd1" value = "1"> 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd3" value = "3"> 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad7" id = "rd10" value = "10"> 10
   </label>
</div>

<label for = "name">HOW WAS THE SWIMMING POOL FECILITY? </label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad8" id = "rd10" value = "10"> 10
   </label>
   
   
</div>

  <label for = "name">HOW AFFORDABLE WAS THE HOTEL STAY?</label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad9" id = "rd10" value = "10"> 10
   </label>
</div>

<label for = "name">YOUR OVERALL EXPERIANCE ?</label>
  <div>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd1" value = "1" > 1
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd2" value = "2"> 2
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd3" value = "3" > 3
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd4" value = "4"> 4
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd5" value = "5" > 5
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd6" value = "6"> 6
   </label><label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd7" value = "7" > 7
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd8" value = "8"> 8
   </label>
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd9" value = "9" checked> 9
   </label>
   
   <label class = "checkbox-inline">
      <input type = "radio" name = "rad10" id = "rd10" value = "10"> 10
   </label>
   
   
</div>

	<input type="submit" name="insert" value="Add Data to Database">  

</form> 


<!------------------------------------------------------------------------------------------------------------------------------>


  


</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By Chinkal .</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>











<?php

if(isset($_POST['insert']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$r1=$_POST['rad1'];
$r2=$_POST['rad2'];
$r3=$_POST['rad3'];
$r4=$_POST['rad4'];
$r5=$_POST['rad5'];
$r6=$_POST['rad6'];
$r7=$_POST['rad7'];
$r8=$_POST['rad8'];
$r9=$_POST['rad9'];
$r10=$_POST['rad10'];
$sum=$r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ques (first, second,third,fourth,fifth,sixth,seventh,eighth,ninth,tenth,overall)
VALUES ($r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$sum)";

if ($conn->query($sql) === TRUE) {


    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

</html>

























