<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="NodeTent">
      <meta name="author" content="NodeTent">
      <title><?=$title?></title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="https://cyberartworks.gen.tr/wp/wp-content/uploads/2021/04/cropped-cyberartworks-logo-32x32.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/style.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-12 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="https://cyberartworks.gen.tr/wp/wp-content/uploads/2021/04/cyberartworkslogo-white-with-black.png" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Cyber Art Works TV'ye Hoşgeldiniz</h5>
                        <p>Ülkelere göre ücretsiz TV yayınları <br> kesintisiz ve canlı olarak sizelerle.</p>
                     </div>
                      <form method="post" action="watch.php" enctype="multipart/form-data">
                        <div class="form-group">
                           <label>Lütfen kanal grubu seçiniz</label>
                           <select id="iptv" name="iptv">
                           <option value="https://iptv-org.github.io/iptv/countries/tr.m3u">Türkiye</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/us.m3u">Amerika Birleşik Devletleri</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/uk.m3u">Birleşik Krallık</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/ru.m3u">Rusya</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/de.m3u">Almanya</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/ua.m3u">Ukrayna</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/al.m3u">Arnavutluk</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/ar.m3u">Arjantin</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/at.m3u">Avusturya</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/au.m3u">Avustralya</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/be.m3u">Belçika</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/bg.m3u">Bulgaristan</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/br.m3u">Brezilya</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/by.m3u">Beyaz Rusya</option>
                           <option value="https://raw.githubusercontent.com/iptv-org/iptv/master/channels/ca.m3u">Kanada</option>
                           <option value="https://iptv-org.github.io/iptv/categories/music.m3u">Müzik</option>
                           <option value="https://iptv-org.github.io/iptv/categories/news.m3u">Haber</option>
                           <option value="https://iptv-org.github.io/iptv/categories/sports.m3u">Spor</option>
                           <option value="https://iptv-org.github.io/iptv/categories/science.m3u">Bilim</option>
                           <option value="https://iptv-org.github.io/iptv/categories/entertainment.m3u">Eğlence</option>
                           <option value="https://iptv-org.github.io/iptv/categories/travel.m3u">Gezgin</option>
                           <option value="https://iptv-org.github.io/iptv/categories/kids.m3u">Çocuk</option>
                           <option value="https://iptv-org.github.io/iptv/categories/movies.m3u">Film</option>
                           
                           </select>                          
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" name="submit" class="btn btn-outline-primary btn-block btn-lg">İzlemeye Başla</button>
                              </div>
                           </div>
                        </div>
                     <div class="text-center mt-5">
                       <!-- <p class="light-gray">Don’t have an account? <a href="register.html">Sign Up</a></p> -->
                     </div>
                      </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/main.js"></script>
   </body>
</html>
