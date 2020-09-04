<?php
    session_start();
    include("mylogin.php");
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!--
            Template Name: Techno Warrior(Test)(https://techwarriorsitu.wordpress.com/)
            Admin: Situ
            Author: Chinmaya Kumar Biswal
            Copyright: 2020
        -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="CyberTest">
    <meta name="author" content="Chinmaya Kumar Biswal">
	<meta name="description" content="CyberTest is a free, safe and legal training ground for hackers to test and expand their hacking skills. By @chinmayakumrbiswal.in">
      <meta name="google-site-verification" content="MSpWsPHg9FU3rqVC3PN2ak7fUjU7KmEn10pfOXYUWUM" />
    <link rel="shortcut icon" type="img/x-icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="design.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />

    <title>CyberTest</title>
      <style>
          body
          {
              animation-name: change;
              animation-duration: 10s;
              animation-iteration-count: infinite;
              animation-direction: alternate;
          }
          @keyframes change
        {
            0%
            {
                background-color: #4D1AF5;
            }
            20%
            {
                background-color: #FF33FF;
            }
            40%
            {
                background-color: #EDF51A;
            }
            60%
            {
                background-color: #1AF5DF;
            }
            80%
            {
                background-color: #A3FA9D;
            }
            100%
            {
                background-color: #FAFA9D;
            }
        }
          .carousel-caption
          {
              top: 30%;
              bottom: auto;
          }
          .carousel-item img
          {
              width: 100%;
              height: 100%;
              background-position: center;
              background-size: cover;
              filter: brightness(0.5);
          }
          .tophead
          {
              font-size: 60px;
              text-transform: capitalize;
              font-family: monospace;
          }
          .subhead
          {
              font-size: 25px;
              font-family: serif;
          }
          @keyframes change2
        {
            0%
            {
                color: #4D1AF5;
            }
            20%
            {
                color: #FF33FF;
            }
            40%
            {
                color: #EDF51A;
            }
            60%
            {
                color: #1AF5DF;
            }
            80%
            {
                color: #A3FA9D;
            }
            100%
            {
                color: #FAFA9D;
            }
        }
          .navbar 
          {
              background-color: transparent;
              
            }
            .navbar .navbar-brand {
              color: #f0f2f3;
            }
            .navbar .navbar-brand:hover,
            .navbar .navbar-brand:focus {
              color: #000000;
            }
            .navbar .navbar-text {
              color: #f0f2f3;
            }
            .navbar .navbar-text a {
              color: #000000;
            }
            .navbar .navbar-text a:hover,
            .navbar .navbar-text a:focus {
              color: #000000; 
            }
            .navbar .navbar-nav .nav-link {
              color: #f0f2f3;
              border-radius: .25rem;
              margin: 0 0.25em;
            }
            .navbar .navbar-nav .nav-link:not(.disabled):hover,
            .navbar .navbar-nav .nav-link:not(.disabled):focus {
              color: #000000;
            }
            .navbar .navbar-nav .nav-item.active .nav-link,
            .navbar .navbar-nav .nav-item.active .nav-link:hover,
            .navbar .navbar-nav .nav-item.active .nav-link:focus,
            .navbar .navbar-nav .nav-item.show .nav-link,
            .navbar .navbar-nav .nav-item.show .nav-link:hover,
            .navbar .navbar-nav .nav-item.show .nav-link:focus {
              color: #000000;
              background-color: #ed08ae;
            }
            .navbar .navbar-toggle {
              border-color: #ed08ae;
            }
            .navbar .navbar-toggle:hover,
            .navbar .navbar-toggle:focus {
              background-color: #ed08ae;
            }
            .navbar .navbar-toggle .navbar-toggler-icon {
              color: #f0f2f3;
            }
            .navbar .navbar-collapse,
            .navbar .navbar-form {
              border-color: #f0f2f3;
            }
            .navbar .navbar-link {
              color: #f0f2f3;
            }
            .navbar .navbar-link:hover {
              color: #000000;
            }

            @media (max-width: 575px) {
              .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
                color: #f0f2f3;
              }
              .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
              .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
                color: #000000;
              }
              .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
                color: #000000;
                background-color: #ed08ae;
              }
            }

            @media (max-width: 767px) {
              .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
                color: #f0f2f3;
              }
              .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
              .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
                color: #000000;
              }
              .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
                color: #000000;
                background-color: #ed08ae;
              }
            }

            @media (max-width: 991px) {
              .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
                color: #f0f2f3;
              }
              .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
              .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
                color: #000000;
              }
              .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
                color: #000000;
                background-color: #ed08ae;
              }
            }

            @media (max-width: 1199px) {
              .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
                color: #f0f2f3;
              }
              .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
              .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
                color: #000000;
              }
              .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
                color: #000000;
                background-color: #ed08ae;
              }
            }

            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
              color: #f0f2f3;
            }
            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
              color: #000000;
            }
            .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
              color: #000000;
              background-color: #ed08ae;
            }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <img src="logo.png" height="50px" width="50px">
      <a class="navbar-brand" href="#">CyberTest</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse position-right" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#carouselExampleSlidesOnly"><p class="phead">Home</p> <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
              <a class="nav-link" href="#log"><p class="phead">Login</p> <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
              <a class="nav-link" href="#feed"><p class="phead">Feedback</p> <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
              <a class="nav-link" href="#tm"><p class="phead">Team</p> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="https://chinmayakumarbiswal.in/"><p class="phead">Chinmaya</p> <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="https://chinmayakumarbiswal.in/contact/contact">Contact <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="https://chinmayakumarbiswal.in/education/document/hacking">Books and Lab <span class="sr-only">(current)</span></a>
          </li>

        </ul>

      </div>
        
        
</nav>
      
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img1.jpg" class="d-block w-100" alt="...">     
        <div class="carousel-caption d-none d-md-block">
        <h1 class="tophead animate__animated animate__backInDown animate__delay-1s">CyberTest</h1><br><br>
        <p class="subhead animate__animated animate__backInUp animate__delay-1s">CyberTest is a free, safe and legal training ground for hackers to test and expand their hacking skills. CyberTest is an online platform allowing you to test your penetration testing skills and exchange ideas and methodologies with us( Click feedback and send your idea ). Click login and test our login page.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="tophead animate__animated animate__backInDown ">CyberTest</h1><br><br>
        <p class="subhead animate__animated animate__backInUp">CyberTest is a free, safe and legal training ground for hackers to test and expand their hacking skills. CyberTest is an online platform allowing you to test your penetration testing skills and exchange ideas and methodologies with us( Click feedback and send your idea ). Click login and test our login page.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="tophead animate__animated animate__backInDown">CyberTest</h1><br><br>
        <p class="subhead animate__animated animate__backInUp">CyberTest is a free, safe and legal training ground for hackers to test and expand their hacking skills. CyberTest is an online platform allowing you to test your penetration testing skills and exchange ideas and methodologies with us( Click feedback and send your idea ). Click login and test our login page.</p>
      </div>
    </div>
  </div>
</div>    
      
 <section class="text-gray-700 body-font" id="log">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Test this site and improve your cyber security skills</h1>
      <p class="leading-relaxed mt-4">Test the input field.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <form action="" method="post">
          
          <div class="form-group">
            <label for="username">Email address</label>
              
            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
              
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          
          <div class="form-group">
            <label for="password">Password</label>
              
            <input type="password" class="form-control" id="password" name="password">  
          </div>
          
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          
    </form>
        
    </div>
  </div>
</section> 
      
 <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/sdpxddDzXfE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div><br><br><br><br><br>
      
<section class="text-gray-700 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d744.6892076590866!2d85.35301911903325!3d19.840041084405822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a183ed50b14b4b9%3A0x57a71ccef3df241e!2zMTnCsDUwJzI0LjUiTiA4NcKwMjEnMDkuNSJF!5e0!3m2!1sen!2sin!4v1598336948915!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
    <form action="" method="post">
    <div class="container px-5 py-24 mx-auto flex" id="feed">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
          <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
          <p class="leading-relaxed mb-5 text-gray-600">Please Enter Your Feedback and share how much this site helpfull to you.</p>
          <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email" name="email">
          <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message" name="message"></textarea>
          <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="entry">Button</button>
          <p class="text-xs text-gray-500 mt-3">WarriorTM || @chinmayakumarbiswal.in</p>
        </div>
    </div>
</form>
</section>
<section class="text-gray-700 body-font" id="tm">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">OUR TEAM</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">An online platform to test and advance your skills in penetration testing and cyber security.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="team/abhi.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Abhishek Bhuiyan</h2>
            <h3 class="text-gray-500 mb-3">Team Leader</h3>
              <p class="mb-4">Hello,Everyone  I am Abhishek  Bhuyan, Pursuing bachelor degree in ctis branch at renowned centurion University of technology  and management ,Bbsr Champs. Complete schooling in Stewart's school ,A Defense  aspirants as well as a cloud lover </p>
            <p class="mb-4">"WHO DARE WINS"</p>
            <span class="inline-flex">
              <a class="text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="team/ar.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Amaresh Rout</h2>
            <h3 class="text-gray-500 mb-3">Tester</h3>
            <p class="mb-4">Hey noobs, It's me Amaresh Rout from CUTM, bbsr, a hard core engineer of BTECH CS-CTIS. In technically Im in a relationship with Cybersecurity.</p>
            <span class="inline-flex">
              <a class="text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="team/situ.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Chinmaya Kumar Biswal</h2>
            <h3 class="text-gray-500 mb-3">Designer</h3>
            <p class="mb-4">A 3rd yr IT-Cloud Technology And Information Security student at Centurion University of Technology and Management with an interest in System Admin and Web development.</p>
              <p class="mb-4">" Eager To Learn New Technology "</p>
            <span class="inline-flex">
              <a class="text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="team/manas.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Manas Ranjan Khatua</h2>
            <h3 class="text-gray-500 mb-3">Tester</h3>
            <p class="mb-4">Hey Player, I am Manas Ranjan Khatua from CUTM, bbsr, a CTIS  student and a hard core PUBG player. Area of interest in Gaming.</p>
            <span class="inline-flex">
              <a class="text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="text-gray-700 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      
      <span class="ml-3 text-xl">CyberTest</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 WarriorTM —
      <a href="https://chinmayakumarbiswal.in" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@ChinmayaKumarBiswal</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500" href="https://www.facebook.com/situ.chinmaya">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://twitter.com/Chinmaya_situ?s=09">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://www.instagram.com/chinmaya.situ/">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://www.linkedin.com/in/chinmaya-kumar-biswal-16045">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>