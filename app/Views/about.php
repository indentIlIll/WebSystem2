<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Las 3 metaetiquetas anteriores * deben * ser lo primero en la cabeza; cualquier otro contenido principal debe venir * después * de estas etiquetas -->
  <title>PLANTILLA | WEB 4</title>

  <!-- Bootstrap -->
  <script src="<?= base_url()?>resources/css/bootstrap.min.css"></script>

    <script src="<?= base_url()?>resources/css/bootstrap.min.css"></script>
  
    <script src="<?= base_url()?>resources/css/font-awesome.min.css"></script>
  
    <script src="<?= base_url()?>resources/css/animate.css"></script>
 
    <script src="<?= base_url()?>resources/css/animate.min.css"></script>

 <script src="<?= base_url()?>resources/css/style.css"></script>
</head>

<body>
<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="index.html"><h1>ProOnliPc</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index.html">Inicio</a></li>
              <li role="presentation"><a href="about.html" class="active">About Us</a></li>
              <li role="presentation"><a href="services.html">Servicios</a></li>
              <li role="presentation"><a href="gallery.html">Gallery</a></li>
              <li role="presentation"><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                      <div class="navbar-brand">
         <a class="navbar-brand" href="<?php echo base_url();?>/Portada/index">WEBSystem</a>
        
            <!-- <div class="navbar-brand">
            <a href="index.html"><h1>ProOnliPc</h1></a> -->
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a  href="<?php echo base_url();?>/about">WEBSystem</a>


                <a href="index.html">Home</a></li>
              <li role="presentation"><a href="about.html" class="active">Acerca de</a></li>
              <li role="presentation"><a href="services.html">Services</a></li>
              <li role="presentation"><a href="gallery.html">Gallery</a></li>
              <li role="presentation"><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <div class="about">
    <div class="container">
      <div class="text-center">
        <h2>Acerca de </h2>
        <div class="col-md-10 col-md-offset-1">
          <p>Información de la pagina Web</p>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="btn-gamp"><a href="#">Noticias</a></div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="gamp-btn"><a href="#">Temas</a></div>
        </div>

      </div>
    </div>
  </div>
  <hr>

  <section id="about-us">
    <div class="container">
      <div class="text-center wow fadeInDown">
        <h2>Temas acerca de</h2>
        <p>Temas acerca de</p>
      </div>
      <div class="skill-wrap clearfix">
        <div class="row">
          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="joomla-skill">
                <p><em>85%</em></p>
                <p>Joomla</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <div class="html-skill">
                <p><em>95%</em></p>
                <p>HTML</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
              <div class="css-skill">
                <p><em>80%</em></p>
                <p>CSS</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
              <div class="wp-skill">
                <p><em>90%</em></p>
                <p>Wordpress</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- our-team -->
      <div class="team">
        <div class="text-center wow fadeInDown">
          <h2>Busquedas</h2>
          <p>Busquedas para temas</p>
        </div>

        <div class="row clearfix">
          <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img class="media-object" src="<?php echo base_url();?>/resources/img/zoom.jpg" alt=""></a>
                    <!--<img class="media-object" src="img/man1.jpg" alt="">-->
                </div>
                <div class="media-body">
                  <h4>Jhon Doe</h4>
                  <h5>Founder and CEO</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">Web</a></li>
                    <li class="btn"><a href="#">Ui</a></li>
                    <li class="btn"><a href="#">Ux</a></li>
                    <li class="btn"><a href="#">Photoshop</a></li>
                  </ul>

                  <ul class="social_icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--/.media -->
              <p>Texto de ejemplo.</p>
            </div>
          </div>
          <!--/.col-lg-4 -->


          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media">
                <div class="pull-left">
                 <a href="#"><img class="media-object" src="<?php echo base_url();?>/resources/img/indexzoom.jpg" alt="">
                <!--  <a href="#"><img class="media-object" src="img/man2.jpg" alt=""></a> -->
                </div>
                <div class="media-body">
                  <h4>Jhon Doe</h4>
                  <h5>Founder and CEO</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">Web</a></li>
                    <li class="btn"><a href="#">Ui</a></li>
                    <li class="btn"><a href="#">Ux</a></li>
                    <li class="btn"><a href="#">Photoshop</a></li>
                  </ul>
                  <ul class="social_icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--/.media -->
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
          </div>
          <!--/.col-lg-4 -->
        </div>
        <!--/.row -->
        <div class="row team-bar">
          <div class="first-one-arrow hidden-xs">
            <hr>
          </div>
          <div class="first-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="second-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
          <div class="third-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="fourth-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
        </div>
        <!--skill_border-->

        <div class="row clearfix">
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img class="media-object" src="<?php echo base_url();?>/resources/img/zoom_3.jpg" alt="">
              <!--    <a href="#"><img class="media-object" src="img/man3.jpg" alt=""></a> -->
                </div>

                <div class="media-body">
                  <h4>Jhon Doe</h4>
                  <h5>Founder and CEO</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">Web</a></li>
                    <li class="btn"><a href="#">Ui</a></li>
                    <li class="btn"><a href="#">Ux</a></li>
                    <li class="btn"><a href="#">Photoshop</a></li>
                  </ul>
                  <ul class="social_icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--/.media -->
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
              <div class="media">
                <div class="pull-left">
          <!--        <a href="#"><img class="media-object" src="img/man4.jpg" alt=""></a> -->
                  <a href="#"><img class="media-object" src="<?php echo base_url();?>/resources/img/zoom.jpg" alt="">
                </div>
                <div class="media-body">
                  <h4>Jhon Doe</h4>
                  <h5>Founder and CEO</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">Web</a></li>
                    <li class="btn"><a href="#">Ui</a></li>
                    <li class="btn"><a href="#">Ux</a></li>
                    <li class="btn"><a href="#">Photoshop</a></li>
                  </ul>
                  <ul class="social_icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--/.media -->
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
          </div>
        </div>
        <!--/.row-->
      </div>
      <!--section-->
    </div>
    <!--/.container-->
  </section>
  <!--/about-us-->

  <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>About Us</h4>
        <p>SystemDNS is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
            <li><i class="fa fa-phone fa"></i> +38 000 129900</li>
            <li><i class="fa fa-envelope fa"></i> info@domain.net</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4>Photo Gallery</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img src="img/gallery1.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery2.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery3.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery4.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery5.png" alt="" /></a></li>
            <li><a href="#"><img src="img/gallery6.png" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4>Newsletter Registration</h4>
          <p>Subscribe to ProOnliPc to receive the latest ProOnliPc news via email. You may unsubscribe from this service at any time</p>
          <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a type="submit" class="btn btn-default">Subscribe</a>
          </div>

        </div>

      </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          &copy; ProOnliPc Theme. All Rights Reserved.
          <div class="credits">
          
            <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw?view_as=subscriber">ProOnliPc</a> by <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw?view_as=subscriber">ProOnliPc</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?= base_url()?>resources/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?= base_url()?>resources/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>resources/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>