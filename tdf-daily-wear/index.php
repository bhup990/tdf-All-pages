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
      function onclickdisplaynone() {
        onclick.style.display="none";
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
<div class="container">
  <div class="row">
    <div class="col-4 nav-left">
      <p id="displayNone"><i class="fas fa-mobile-alt"></i>Call Now<a href="tel:+91 9920764212">+91 9920764212</a>
    </div>
    <div class="col-4 nav-center">
      <img src="img/tdf-logo.png" alt="tdf-logo" id="imgZoom">
    </div>
    <div class="col-4 nav-right">

        <a href="https://twitter.com/tdfjewellery" target="_blank"><i class="fab fa-twitter"></i></a>

        <a href="https://www.facebook.com/TDFDiamondsAndGold/" target="_blank"><i class="fab fa-facebook"></i></a>

        <a href="https://in.pinterest.com/tdfdiamondsandgold/_created/" target="_blank"><i class="fab fa-pinterest"></i></a>

        <a href="https://www.instagram.com/tdfdiamondsandgold/" target="_blank"><i class="fab fa-instagram"></i></i></a>

        <a href="https://www.youtube.com/channel/UCDeqAdbjD_S6lZ6_7JwNaHQ" target="_blank"><i class="fab fa-youtube"></i></a>

        <a href="mailto:marketing@tdfjewellery.com"><i class="fas fa-envelope"></i></a>

    </div>
  </div>
</div>
</header>

<main>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/rozaana-banner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/rozaana-banner2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/rozaana-banner3.jpg" alt="Third slide">
    </div>
  </div>
</div>


<!-- collection header -->
<div class="container collection" id="collection">

  <div class="dropdown content d-md-none d-block">
  <button id="myBtn" class="dropbtn">Collection</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="#rings">rings</a>
      <a href="#earrings">earrings</a>
      <a href="#bracelets">Bracelets</a>
      <a href="#pendants">Pendants</a>
    </div>
  </div>

  <div class="content d-md-none d-block">
    <div class="text">
      <a href="tel:+91 9920764212"><button>Call Now</button></a>
    </div>
  </div>

<!-- Inline collection -->
  <div class="dropdown d-none d-md-block">
      <a href="#rings"><button class="dropbtn">rings</button></a>
    </div>

    <div class="dropdown d-none d-md-block">
      <a href="#earrings"><button class="dropbtn">earrings</button></a>
    </div>

    <div class="dropdown d-none d-md-block">
      <a href="#bracelets"><button class="dropbtn">Bracelets</button></a>
    </div>

    <div class="dropdown d-none d-md-block">
      <a href="#pendants"><button class="dropbtn">Pendants</button></a>
    </div>
</div>

 <!-- *************Rings-head******************* -->
 <div class="container newProduct">

     <div class="container headers" id="rings">
    <div class="row">
      <div class="col-12 header-text"><p>rings</p></div>
    </div>
  </div>

<!-- ****************Rings************** -->
      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring1.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring2.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring3.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring4.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring5.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring6.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring7.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring8.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring9.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring10.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring11.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring12.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring13.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring14.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring15.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring16.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/ring17.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

<!-- ****************Rings************** -->

<!-- ****************Earrings************** -->
      <div class="container headers" id="earrings">
     <div class="row">
       <div class="col-12 header-text"><p>Earrings</p></div>
     </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings1.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings2.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings3.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings4.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings5.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings6.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings7.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings8.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings9.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings10.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/earrings11.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>
<!-- ****************Earringr************** -->

<!-- ****************bracelets************** -->
      <div class="container headers" id="bracelets">
     <div class="row">
       <div class="col-12 header-text"><p>bracelets</p></div>
     </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes1.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes2.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes3.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes4.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes5.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes6.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes7.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes8.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes9.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes10.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes11.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>

    <div class="content">
       <div class="image">
        <img class="myImg" src="img/bracletes12.png" alt="Name">
      </div>
        <p>Name</p>
        <div class="text">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
      </div>
    </div>
  <!-- ****************bracelets************** -->

  <!-- ****************pendants************** -->
        <div class="container headers" id="pendants">
       <div class="row">
         <div class="col-12 header-text"><p>pendants</p></div>
       </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants1.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants2.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants3.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants4.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants5.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants6.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants7.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

      <div class="content">
         <div class="image">
          <img class="myImg" src="img/pendants8.png" alt="Name">
        </div>
          <p>Name</p>
          <div class="text">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
        </div>
      </div>

<!-- pendants -->

   </div>

</main>

 <!-- FOOTER -->
<footer>

 <div class="heading-title" id="contact-us">
   <h4>contact us</h4>
   <img src="img/home_line.png">
 </div>

      <div class="container-fluid contact-us">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <form method="post" action="get-in-touch.php" class="enquiry-form">
              <h5>get in touch</h5>
              <label>Name</label><br>
              <input type="text" name="name" placeholder="Enter Name"><br>
              <label>Email</label><br>
              <input type="email" name="email" placeholder="Enter Email"><br>
              <label>Message</label><br>
              <textarea rows="3" name="message" id="umessage" class="form-control" placeholder="Your Message..."></textarea>
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
             <a href="mailto:bandra@tdfjewellery.com">bandra@tdfjewellery.com</a> <br>
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
             <a href="mailto:vashi@tdfjewellery.com">vashi@tdfjewellery.com</a> <br>
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
             <a href="mailto:andheri@tdfjewellery.com">andheri@tdfjewellery.com</a>
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
             <a href="mailto:mangalore@tdfjewellery.com">mangalore@tdfjewellery.com</a> <br>
             9920288089
           </p>
          </div>
        </div>
        </div>
        <div class="col-12 footer-social d-md-none d-block">

          <div class="followUs">
             <span>Follow&nbsp;Us</span>
          </div>

            <a href="https://twitter.com/tdfjewellery" target="_blank"><i class="fab fa-twitter"></i></a>

            <a href="https://www.facebook.com/TDFDiamondsAndGold/" target="_blank"><i class="fab fa-facebook"></i></a>

            <a href="https://in.pinterest.com/tdfdiamondsandgold/_created/" target="_blank"><i class="fab fa-pinterest"></i></a>

            <a href="https://www.instagram.com/tdfdiamondsandgold/" target="_blank"><i class="fab fa-instagram"></i></i></a>

            <a href="https://www.youtube.com/channel/UCDeqAdbjD_S6lZ6_7JwNaHQ" target="_blank"><i class="fab fa-youtube"></i></a>

            <a href="mailto:marketing@tdfjewellery.com"><i class="fas fa-envelope"></i></a>

        </div>
      </div>
      <!-- contact us -->
      <!-- footer -->
      <div class="last-footer">
        <p>© 2021 All rights reserved. Design by TDF Diamond factory</p>
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

                  <input class="mt-2" type="text" name="mobileNo" placeholder="Mobile No" id="mobile_no" required>
                  <p>We'll never share your phone no with anyone else.</p>

                  <input type="text" name="selectCity" placeholder="Enter City" class="mb-4" id="select_city" required>
                  <br>
                <textarea rows="3" name="message" id="umessage" class="form-control" placeholder="Your Message..."></textarea>

                <div class="from-btn">
                <button type="submit" class="btn" id="sumit-btn" name="sumitBtn" value="submit">Submit</button>
                </div>

                </form>

                </div>
              </div>

          </div>

        </div>

      </div>

<!-- modal on enquiry button -->

<!--Products Modal -->
<div id="myModal" class="modal fadeIn">

  <div class="content">
    <!-- The Close Button -->

    <div class="close-modal">
      <span class="close">&times;</span>
      <span class="modal-caption">Hover on image to zoom</span>
    </div>

    <div class="content-modal">
      <img src="" id="" class="modal-img">
    </div>

    <div class="modal-text">
        <p id="caption"></p>
        <button type="button" id="btn" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">enquire now</button>
    </div>

  </div>
</div>
<!--Products Modal -->

<!-- ************javascript**************** -->
<!-- js  -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/links.js"></script>

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
   document.getElementById("gouparrow").style.display = "block";
   document.getElementById("navbar").style.boxShadow  = "rgb(138 118 118) 0px 8px 16px -7px";
 } else {
   document.getElementById("gouparrow").style.display = "none";
   document.getElementById("navbar").style.boxShadow  = "rgb(138 118 118) 0px 0px 0px 0px";
     }
 }

 // Onload popup modal
 var noload = setTimeout(function() {$('#enquiry_now').modal();}, 10000);
 // Onload popup modal
  </script>

</body>
</html>
