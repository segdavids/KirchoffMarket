<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="">
  <title>Contact Us | Kirchoff</title>
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="style/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="style/type/type.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style/css/color/purple.css">
  <style type="text/css">
    .bann {
        background-color: #adb3c3;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        height: 60px;
        color: #fff;
        font-size: 10px;
        font-family: 'Open Sans', sans-serif, Helvetica, arial;
    }
    .bann1 {
        background-color: #1c4098;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        height: 70px;
        font-family: 'Open Sans', sans-serif, Helvetica, arial;
    }

    .bann h2{
      padding: 15px 0 0 100px;
    }

    .bann1 h2{
      padding: 20px 0 0 100px;
    }
    @media screen and (min-width: 980px){
         
        #header_title{
          font-size: 45px; color:#14151F; font-weight: bold;
          line-height: 1em;
        }
        #female{
          width: 28rem;
        }
    }
    @media screen and (max-width: 800px){
        
        #header_title{
          font-size: 25px; color:#14151F; font-weight: bold;
          line-height: 1em;
        }
        #female{
          width: 15rem;
        }

        #content{
          display: none;
        }
        #content1{
          display: none;
        }
    }
  </style>
</head>
<body>
  <div class="content-wrapper">
    <?php require_once('header.php'); ?>
    <!-- /.offcanvas-info -->
    <div class="bann">
    </div>
    <div class="bann1">
      <h2 style="color: #fff">Contact Us </h2>
    </div>
    <!-- /.wrapper -->
    <div class="wrapper" style="background-color: #f4f7ff;">
      <div class="container inner">
        <div class="row text-center gutter-60">
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/ui-gps.png" alt="" /></div>
            <p class="mb-0">SW9/1674 New Adeoyo <br> MKO Abiola Way, Ibadan.</p>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/co-telephone.png" alt="" /></div>
            <p class="mb-0">+234 901 371 8540</p>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="icon icon-svg mb-20"><img src="style/images/icons/co-email-5.png" alt="" /></div>
            <p class="mb-0">
              <a class="nocolor" href="mailto:#">info@kirchoff.com</a>
            </p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper" style="background-color: #f4f7ff;">
      <div class="container inner">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="section-title text-center">Drop Us a Line</h2>
            <div class="space30"></div>
            <form id="contact-form" method="post" action="contact/contact.php">
              <div class="messages"></div>
              <div class="controls">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name *" required="required" data-error="First Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last Name *" required="required" data-error="Last Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Message is required."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-secondary" style="border-radius: 5px 5px; background-color: #1B3F9C;">Send message</button>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
                </div>
              </div>
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31655.515284648733!2d3.8254180376666604!3d7.360688972118164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSW9%2F1674%20New%20Adeoyo%20%20MKO%20Abiola%20Way%2C%20Ibadan!5e0!3m2!1sen!2sng!4v1630175542139!5m2!1sen!2sng" style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
    </div>
    <!--/.google-map -->
    <?php require_once('footer.php'); ?>
  </div>
  <!-- /.content-wrapper -->
  <script src="style/js/jquery.min.js"></script>
  <script src="style/js/popper.min.js"></script>
  <script src="style/js/bootstrap.min.js"></script>
  <script src="style/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="style/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="style/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="style/js/plugins.js"></script>
  <script src="style/js/scripts.js"></script>
</body>
</html>