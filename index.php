
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="PROSFEL - serwis opon, wulkanizacja">
    <meta name="author" content="Roman Kowalski">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>PROSFEL - mobilny serwis opon</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900&amp;subset=latin-ext" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-target="#navbar-side">

    <div class="container">

      <div class="row">
        
        <div class="mobile-nav">
          <div class="nav-item">
            <img src="images/logo.png" alt="PROSFEL logo" class="img-responsive">
          </div>


          <div class="nav-item">
            ul. Leśna 25<br>
            77-310 Debrzno
          </div>

          <div class="nav-item">
            <img id="phone" src="images/phone.png" alt="">
            725 161 949<br>502 627 579
          </div>
        
        </div>

        <div class="col-md-4 nopadding">

          <aside>
          
            <div class="logo">
              <img src="images/logo.png" alt="PROSFEL logo" class="img-responsive">
            </div> <!-- /.logo -->

            <div class="address">
              <hr>
              <div class="line">ul. Leśna 25</div>
              <div class="line">77-310 Debrzno</div>
              <div class="line-phone">
                <img src="images/phone.png" alt="">
                <div class="phone">
                  725 161 949<br>
                  502 627 579
                </div>
              </div>
              <hr>
            </div> <!-- /.address -->

            <nav id="navbar-side">
              <ul class="nav">
                <li><a href="#about">O firmie</a></li>
                <li><a href="#mobile">Mobilny serwis opon</a></li>
                <li><a href="#sale">Sprzedaż i montaż opon</a></li>
                <li><a href="#workshop">Wulkanizacja &amp; Mechanika pojazdowa</a></li>
              </ul>
            </nav>

            <!-- <img src="images/small-tracks.png" alt="" class="img-responsive"> -->
            
          </aside>    
        </div>

        <div class="col-md-8 nopadding" >
          <section>
          
            <article id="about"> 
                <?php include("layout/layout-about.php"); ?>
            </article>

            <article id="mobile">
                <?php include("layout/layout-mobile.php"); ?>
            </article>
            
            <article id="sale">
                <?php include("layout/layout-sale.php"); ?>
            </article>
            
            <article id="workshop">
                <?php include("layout/layout-workshop.php"); ?>
            </article>
          
          </section>    
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      // $('aside').affix({
      //   offset: {
      //     top: "40",
      //     bottom: "941"
      //   }
      // })
      // console.log($('footer').outerHeight(true));
      // $('body').scrollspy({ target: '#navbar-side' })
    </script>
  </body>
</html>
