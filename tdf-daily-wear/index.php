<?php session_start(); ?>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

      <!-- font-awesome -->
      <link rel="stylesheet" type="text/css" href="css/all.min.css">

      <!-- AOS JS -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

       <!-- CSS-->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <title>TDF - The Diamond Factory</title>
      <script>
        function bottomSilde() {
         document.getElementById('bottomsilde').style.height = "217px";
        }

        function closeBottomSilde() {
         document.getElementById('bottomsilde').style.height = "0px";
        }

      </script>
    </head>
    <body onload="loading()">
      <div id="loader">
      </div>
      <script>
        preloder = document.getElementById('loader');

        function loading() {
          preloder.style.display = "none";
          noload.style.display="block";
        }
      </script>

      <div id="whatsupLink">
        <a href="https://wa.link/7mb83b" target="_blank"><img src="img/whatapp.png" alt="whatapp link"><p> Message Us</p></a>
      </div>

      <div id="enquiry-btn">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>

      <div id="gouparrow">
        <a href="#" class="btn" topFunction()> > </a>
      </div>

<!-- header -->
  <header id="navbar">
        <div class="container header-nav" id="header-nav">
          <div class="row w-100 m-0">
            <div class="col-xl-4 col-lg-3 col-md-3 col-sm-4 right-nav">
              <p>contact us<a href="tel:+91 9920764212">+91 9920764212</a>
                  </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
             </div>

             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 left-nav">
             <a href="https://twitter.com/tdfjewellery" target="_blank"><i class="fab fa-twitter"></i></a>

             <a href="https://www.facebook.com/TDFDiamondsAndGold/" target="_blank"><i class="fab fa-facebook"></i></a>

             <a href="https://in.pinterest.com/tdfdiamondsandgold/_created/" target="_blank"><i class="fab fa-pinterest"></i></a>

             <a href="https://www.instagram.com/tdfdiamondsandgold/" target="_blank"><i class="fab fa-instagram"></i></i></a>

             <a href="https://www.youtube.com/channel/UCDeqAdbjD_S6lZ6_7JwNaHQ" target="_blank"><i class="fab fa-youtube"></i></a>

             <a href="mailto:marketing@tdfjewellery.com"><i class="fas fa-envelope"></i></a>
             </div>

          </div>
        </div>
            <div class="line-between"></div>

     <nav class="navbar navbar-expand-lg container p-0">
        <a class="navbar-brand" href="index.php">
          <img src="img/tdf-logo.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="ChangeToggle"
        onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>

        <script>
        function myFunction(x) {
          x.classList.toggle("change");
        }
       </script>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#newProduct">New Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#featureProduct">Product Feature</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-us">contact</a>
      </li>
    </ul>
  </div>
 </nav>
</header>

 <!-- Header End -->

<main>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/rozaana-banner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/rozaana-banner2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/rozaana-banner3.jpg" alt="Third slide">
    </div>
  </div>
</div>


<!-- collection header -->
<div class="container collection" id="collection">

  <div class="content d-md-none d-block">
        <div class="text">
          <button type="button" id="equiryBtn" onclick="bottomSilde()">Collections</button>
        </div>
      </div>

      <div class="content d-md-none d-block">
        <div class="text">
          <a href="tel:+91 9920764212"><button>Contact Us</button></a>
        </div>
      </div>

<!-- Inline collection -->
  <div class="content d-none d-md-block">
        <div class="text">
         <a href="#rings"><button type="button" class="actives" id="seeCollect">Rings</button></a>
       </div>
      </div>

      <div class="content d-none d-md-block">
        <div class="text">
        <a href="#earrings"><button type="button" id="seeCollect">earrings</button></a>
        </div>
      </div>

      <div class="content d-none d-md-block">
        <div class="text">
          <a href="#barcelets"><button type="button" id="seeCollect">bracelets</button></a>
        </div>
      </div>
</div>
 <!-- Inline collection -->

 <!-- Mobile View collection  -->
<div class="bottomsilde" id="bottomsilde">
        <div class="text">
          <a href="#rings" onclick="closeBottomSilde()" class="btn btn-primary">rings</a>
        </div>
        <div class="text">
          <a href="#earrings" onclick="closeBottomSilde()" class="btn btn-primary">earrings</a>
        </div>
        <div class="text">
          <a href="#barcelets" onclick="closeBottomSilde()" class="btn btn-primary">bracelets</a>
        </div>
        <div class="text">
          <a href="#pendants" onclick="closeBottomSilde()" class="btn btn-primary">pendants</a>
        </div>
         <div class="text">
          <a href="#" onclick="closeBottomSilde()" class="btn btn-primary"><i class="fas fa-times"></i></a>
        </div>

      </div>
 <!-- Mobile View collection  -->

<!-- collection header -->

 <!-- *************Rings******************* -->
 <div class="container newProduct">

 <div class="headers" id="rings">
  <div class="row">
    <div class="col-12"><p>Rings</p></div>
  </div>
</div>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring1.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring2.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring3.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring4.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring5.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring6.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring7.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring8.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring9.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring10.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring11.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/ring12.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>
 </div>
 <!-- ******************rings*************** -->

<!-- ******************Earrings*************** -->

<div class="container headers" id="earrings">
  <div class="row">
    <div class="col-12"><p>Earrings</p></div>
  </div>
</div>

 <div class="container newProduct">
     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings1.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings2.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings3.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings4.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings5.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings6.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings7.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings8.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings9.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings10.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/earrings11.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   </div>
<!-- ********************Earrings**************** -->


<!-- ******************Braceletes***************-->

<div class=" container headers" id="barcelets">
  <div class="row">
    <div class="col-12"><p>barcelets</p></div>
  </div>
</div>
 <div class="container newProduct">
     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes1.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes2.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes3.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes4.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes5.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes6.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes7.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes8.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes9.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes10.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes11.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/bracletes12.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>
 </div>
<!-- ********************Barcelets**************** -->

<!-- ********************pendants**************** -->

<div class="container headers" id="pendants">
  <div class="row">
    <div class="col-12"><p>pendants</p></div>
  </div>
</div>
 <div class="container newProduct">
     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants1.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants2.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants3.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants4.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

     <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants5.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

   <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants6.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image">
          <img src="img/pendants7.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>

    <a href="#enquiryModal">
        <div class="content">
        <div class="image low-width-hover">
          <img src="img/pendants8.png" alt="">
        </div>
        <div class="text">
          <p>NAME</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>
     </a>
   </div>
 <!-- New Products* -->
</main>

 <!-- FOOTER -->
<footer>

  <div class="heading-title" id="contact-us" data-aos="fade-down">
   <h4>contact us</h4>
   <img src="img/home_line.png">
 </div>

      <div class="container-fluid contact-us">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <form method="post" action="get-in-touch.php" class="enquiry-form">
              <h5>get in touch</h5>
              <label>Name</label><br>
              <input type="text" name="name" placeholder="Enter Name" required><br>
              <label>Email</label><br>
              <input type="email" name="email" placeholder="Enter Email" required><br>
              <label>Message</label><br>
              <textarea rows="3" name="message" id="umessage" class="form-control" placeholder="Your Message..." required></textarea>
              <button type="submit" id="sumit-btn" name="sumitBtn" value="submit" onclick="this.style.backgroundColor='#a07936' ">Send message</button>
            </form>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <iframe src="https://www.google.com/maps/d/embed?mid=1rBI_fetlpinbqx909DR05jTgfJ2aTm9V&hl=en" width="100%" height="450px"></iframe>
            </iframe>
          </div>
        </div>
      </div>

      <div class="container-fluid bg-dark bottom-border" id="about-us">
        <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 style">
            <h6>Bandra</h6>
            <p>Pearl Craft, Near Motimahal Hotel, <br>
             Turner Road, Bandra (W). 400053 <br>
             <br>
             <a href="#">bandra@tdfjewellery.com</a> <br>
             9820558484
           </p>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 img">
            <img src="img/new_logo.png">
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 style">
            <h6>VASHI</h6>
            <p>Satra Plaza, Next to Yes Bank, Palm <br> Beach Road, Navi Mumbai <br>
             <br>
             <a href="#">vashi@tdfjewellery.com</a> <br>
             9920764212
           </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 style">
            <h6>ANDHERI</h6>
            <p>Opp. Laxmi Industrial Est, <br> Next Zodiac New Link Road, Andheri (W),
              <br>
             <br>
             <a href="#">andheri@tdfjewellery.com</a>
             <br>
             8424050086
           </p>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 style">
           <h6>Bandra . Andheri . Vashi .Mangalore </h6>
            <p>TDF Diamonds Gold has <br> been undoubtedly one of the finest <br> and most trusted names in fine <br> jewellery.<br>
           </p>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-4 style">
            <h6>MANGALORE</h6>
            <p>Marz Chambers, Near Athena <br>
             Hospital, Falnir Road, Mangalore –<br>
             575001
              <br>
             <a href="#">mangalore@tdfjewellery.com</a> <br>
             9920288089
           </p>
          </div>
        </div>
        </div>
      </div>
      <!-- contact us -->
      <!-- footer -->
      <div class="last-footer">
        <p>© 2021 All rights reserved. Design by TDF Jewellery</p>
      </div>

</footer>

      <!-- Modal onload page -->
      <div id="enquiry_now" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <p>Login</p>
                <form method="post" action="login_handler.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="mobileNo" pattern="[1-9]{1}[0-9]{9}" class="form-control" placeholder="Mobile No" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="selectCity" class="form-control" placeholder="Enter City" required>
                    </div>

                    <button type="submit" class="btn" name="sumitBtn" value="submit" onclick="this.style.backgroundColor='#a07936' ">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
      <!-- Modal onload page -->


<!-- modal on enquiry button -->
<div class="container enquiry-from">

        <!-- Modal -->
        <div class="modal fade" id="enquiryModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content modal-contents">

              <div class="modal-header">
                <h4 class="modal-title">Enquiry For</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                <form method="post" action="handler.php" class="enquiry-form">
                  <input class="mb-3" type="text" name="name" placeholder="Enter Name" id="name" required>
                  <br>
                  <input type="email" name="email" placeholder="Enter Email" id="email" required>
                  <p>We'll never share your email with anyone else.</p>

                  <input class="mt-2" type="text" pattern="[1-9]{1}[0-9]{9}" name="mobileNo" placeholder="Mobile No" id="mobile_no" required>
                  <p>We'll never share your phone no with anyone else.</p>

                  <input type="text" name="selectCity" placeholder="Enter City" class="mb-4" id="select_city" required>
                  <br>
                <textarea rows="3" name="message" id="umessage" class="form-control" placeholder="Your Message..."></textarea>

                <div class="from-btn">
                <button type="submit" class="btn" id="sumit-btn" name="sumitBtn" value="submit" onclick="this.style.backgroundColor='#a07936' ">Submit</button>
                </div>

                </form>

                </div>
              </div>

          </div>

        </div>

      </div>

<!-- ************Earrings**************** -->

<!-- ************Earrings**************** -->

<!-- js  -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- sweet alert js -->
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script>
  <?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
      ?>
      swal({
          title: "<?php echo $_SESSION['status']; ?>",
          // text: "You clicked the button!",
          icon: "<?php echo $_SESSION['status_code']; ?>",
          button: "OK",
      });
      <?php
      unset($_SESSION['status']);
  }
   ?>
   </script>
<!-- sweet alert js -->
<!-- main JS -->
  <script type="text/javascript" src="js/main.js"></script>
<!-- main JS -->

  <!-- AOS JS -->
<script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- AOS JS -->


  <script>
     // AOS
AOS.init({offset: 200,duration: 1300});
 // AOS

 // onscroll Navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
 if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 80) {
     document.getElementById("navbar").style.top = "-33px";
     document.getElementById("navbar").style.background = "white";
     document.getElementById("navbar").style.boxShadow  = "rgb(138 118 118) 0px 8px 16px -7px";
     document.getElementById("gouparrow").style.display = "block";
      } else {
      document.getElementById("navbar").style.boxShadow  = "rgb(138 118 118) 0px 0px 0px 0px";
     document.getElementById("navbar").style.top = "0";
     document.getElementById("gouparrow").style.display = "none";
          }
        }
 // onscroll Navbar

 // Onload popup modal
 var noload = setTimeout(function() {$('#enquiry_now').modal();}, 10000);
 // Onload popup modal
  </script>

</body>
</html>
