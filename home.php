<?php 

require 'dokter.php';

// cek tombol tambah data 
if ( isset($_POST["submit"]) ){


if ( tambah($_POST) > 0) {

  echo "
   <script>
alert('Data Berhasil di Tambahkan !');
document.location.href = 'coba.php'
   </script>
  ";
  # code...
}

else{
  echo "<script>
      alert('Data Gagal di Tambahkan !');
      document.location.href = 'coba.php'
    </script>";
  
}

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style type="text/css">

  .button {
  padding: 15px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #eee;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}


.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

footer {
 background: #fafafa;
    border-top: solid 2px rgba(144, 144, 144, 0.25);
    color: #777;
    margin-top: 4%;
  }


  </style>
  <body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="box-shadow: 0 10px 45px rgba(0, 0, 0, 0.6);">
  <a class="navbar-brand" href="index.php"><img src="pm.png" width="200" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="font-weight: bold;">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="treatment.php">TREATMENT</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          DROPDOWN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <div class="card-body text-center" style="padding-top: 2in;padding-bottom: 1.5in;
  background-image: url(dkk.png);background-size: 100% 100%;background-attachment: fixed;background-repeat: no-repeat;opacity: 0.9;">
   <h1>Introspect : A free + fully responsive<br> site template by TEMPLATED</h1>
    <p><br></p>
    <a href="#" class="btn btn-primary"><marquee>Go somewhere</marquee></a>
  </div>

<div class="jumbotron" style="background: #eee;">
<div class="container"> 
  <h3 style="color: #aaa;">A free + fully responsive</h3>
  <h1 class="text-primary mb-5">Minimally Invasive Hair Transplant</h1>

  <div class="row mb-4">
    <div class="col-sm-2 mr-auto text-center" style="background: white;">
      <p class="pt-4"><h4 class="text-primary">Li Book</h4></p>
        <img src="hm/ps1.png" width="80" height="40" class="mb-4">
        Introducing Yourself & Others What’s your name? Where are you from?
        <div class="col bg-primary mb-4 mt-4 text-white">
          <center>button</center>
        </div>
    </div>

     <div class="col-sm-2 ml-1 mr-auto bg-primary text-white text-center">
       <p class="pt-4"><h4>Li Book</h4></p>
        <img src="hm/ps1.png" width="80" height="40" class="mb-4">
        Introducing Yourself & Others What’s your name? Where are you from?
        <div class="col mb-4 mt-4 text-primary" style="background: white;">
         <center> button</center>
        </div>
    </div>

     <div class="col-sm-2 ml-1 mr-auto text-center" style="background: white;">
      <p class="pt-4"><h4 class="text-primary">Li Book</h4></p>
        <img src="hm/ps1.png" width="80" height="40" class="mb-4">
        Introducing Yourself & Others What’s your name? Where are you from?
        <div class="col bg-primary mb-4 mt-4 text-white">
          <center>button</center>
        </div>
    </div>

     <div class="col-sm-2 ml-1 text-center" style="background: white;">
       <p class="pt-4"><h4 class="text-primary">Li Book</h4></p>
        <img src="hm/ps1.png" width="80" height="40" class="mb-4">
        Introducing Yourself & Others What’s your name? Where are you from?
        <div class="col bg-primary mb-4 mt-4 text-white">
         <center> button</center>
        </div>
    </div>
  </div>
</div>
</div>

<div class="jumbotron" style="padding-top: 0%;color: rgba(0,0,0,0.6);background-image: url(vc.jpg);
background-size: 100% 100%, cover;
background-repeat: no-repeat;
    background-attachment: fixed;">
  <div class="row">

    <div class="col-sm-4 ml-auto" style="background: rgba(255,255,255,0.4);padding: 5%;">
      <h1 class="display-4">25%<sup style="font-size: 1.2rem;"> Voucher Cashback</sup>
       <span style="font-weight: bold;">NO <br>SCARS <br>CLUB</span></h1>
    <span style="font-size: 0.2in;"> Skinda Dermato Aesthetic Clinic memberikan Promo treatment khusus untuk membantu menghilangkan Scars .
Nikmati Disc 25% untuk Treatment tertentu yg bisa membantu menghilangkan scars. SKINDA aims to be number 1 aesthetic 
clinic in Asia that give the best treatments to reveal the beauty of customers.
</span>
<p class="text-center pt-5 pb-0"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">View</button></p>
    </div>

  </div>
</div>
 
 <div class="container mt-5">
   <div class="row">
     <div class="col-lg-6" style="color: grey;">
     Welcome to
<h1 class="display-4" style="color: #000;">SAPTA MARGA Aesthetic Clinic</h1>
<p>SAPTA MARGA Dermatology is one of the most prominent Dermatology Center in South Korea, specializing in 
Laser and Energy-based Devices. SKINDA Dermatology has made it possible for patients to achieve Optimal Clinical Results 
with Little to No Downtime with its advanced treatment protocols. And, it has established a huge and loyal followings since NO OTHER clinics are able 
to offer the same services with clinical results that can match SKINDA.</p>
     
    </div>
     <div class="col-lg-6">
    <h3><p style="padding-bottom: 3%;font-weight: bold;" align="center"><span class="spinner-border" role="status">
    </span> Make an Appointment <span class="spinner-border" role="status"></span></p></h3>
    <table style="box-shadow: 0 10px 45px rgba(0, 0, 0, 0.6);text-align: center;" align="center">

      <form method="POST" action="">
  <tr>
    <td height="50" style="padding: 20px;"> <label for="nama"></label><input type="text" name="nama" id="nama" 
      placeholder=" Nama" autocomplete="off" style="height: 60px;"></td>
    <td style="padding: 20px;"> <label for="email"></label><input type="text" name="email" id="email" placeholder="Email " autocomplete="off" style="height: 60px;"></td>
  </tr>
<tr>
    <td height="50" style="padding: 10px;"> <label for="telepon"></label><input type="text" id="telepon" name="telepon" autocomplete="off" placeholder=" No tlp-hp" style="height: 60px;"></td>
    <td style="padding: 20px;">
      <label for="dktr"></label>
<input list="browsers" name="dktr" id="dktr" placeholder="Dokter" style="height: 60px;">

<datalist id="browsers">
  <option value="Dokter Leni">
  <option value="Dokter Fery">
  <option value="Dokter Irfan">
  <option value="Dokter Fany">
  <option value="Dokter Lisa">
</datalist>
    </td>
  </tr>
  <tr>
     <td style="padding: 5px;" class="pb-4"><button class="button" type="submit" name="submit" data-toggle="modal" data-target="#exampleModal" style="color: #eee;">Daftar !
     </button></td>
   </form>
  </tr>
  </table>

    </div>
  </div>
</div>

</div>
 </div>
  </div>

  <div class="container text-center mt-5">
    <h3 style="color: #aaa;font-family: times new roman;"> SAPTA MARGA is</h3>
      <h1 class="display-4 mb-5" style="letter-spacing: 0.1in;">P E R F E C T</h1>

    <div class="row" style="color: grey;">
      <div class="col-sm-4">
        <img src="icn/lg1.png" width="80" class="img-thumbnail mb-2" style="border-radius: 50%;background-color: rgba(0,0,0,0.8);"><br>
       <h2 style="color: #000;"><span style="text-decoration: underline solid orange;">F</span>ocus on customer</h2>
       Mengutamakan kebutuhan, keinginan, pelayanan terbaik, dan memberikan solusi kepada pelanggan
      </div>
      <div class="col-sm-4">
          <img src="icn/lg8.png" width="80" class="img-thumbnail mb-2" style="border-radius: 50%;background-color: rgba(0,0,0,0.8);"><br>
       <h2 style="color: #000;"><span style="text-decoration: underline solid orange;">A</span>ssertive</h2>
      Kami adalah Tim SKINDA selalu tegas dalam pengambilan keputusan dan peraturan perusahaan
      </div>
      <div class="col-sm-4">
          <img src="icn/lg3.png" width="80" class="img-thumbnail mb-2" style="border-radius: 50%;background-color: rgba(0,0,0,0.8);"><br>
       <h2 style="color: #000;"><span style="text-decoration: underline solid orange;">I</span>n God we trust</h2>
       Kami adalah Tim SKINDA selalu mengandalkan TUHAN di dalam segala pekerjaan
      </div>
    </div>

     <div class="row text-center mt-5">
      <div class="col-sm-6">
        <img src="icn/lg4.png" width="80" class="img-thumbnail mb-2" style="border-radius: 50%;background-color: rgba(0,0,0,0.8);"><br>
       <h2 style="color: #000;"><span style="text-decoration: underline solid orange;">T</span>eamwork</h2>
     Kami adalah Tim SKINDA selalu menjaga dan <br>membangun kerja sama tim yang produktif dan efektif<br>demi tercapainya tujuan bersama
      </div>
      <div class="col-sm-6">
        <img src="icn/lg5.png" width="80" class="img-thumbnail mb-2" style="border-radius: 50%;background-color: rgba(0,0,0,0.8);;"><br>
       <h2 style="color: #000;"><span style="text-decoration: underline solid orange;">H</span>onesty</h2>
    Kami adalah Tim SKINDA selalu mengedepankan<br>kejujuran, ketulusan dan kebenaran disetiap pekerjaan <br>dan perilaku
      </div>
    </div>
  </div>

<footer class="site-footer">
      <div class="container">
        <div class="row" style="padding-top: 6%">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
            
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
          
            Copyright &copy; All rights reserved | This template is made with dani balonk
           
            </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>