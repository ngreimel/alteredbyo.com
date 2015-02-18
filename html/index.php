<?php
/**
 * Altered By Obrycki - alteredbyo.com
 *
 * @author      Neal Greimel <neal@greimel.us>
 * @copyright   Copyright (c) 2014 Neal Greimel (http://neal.greimel.us)
 * @version     $Id$
 */

date_default_timezone_set('America/Chicago');

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Altered By Obrycki</title>

    <meta name="description" content="At Altered By O we recycle, repurpose, redefine and reimagine ordinary and everyday products into unique, heirloom pieces. Because everybody deserves a one-of-a-kind piece to call their own.">
    <meta name="keywords" content="altered by o, altered by obrycki, alteration, furniture design, interior design, custom furniture, woodworking, tables, chairs, dressers, frames, obrycki alterations">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.20141001.css">
    <link rel="stylesheet" href="css/landing-page.201501151.css">
    <script src="js/vendor/modernizr-2.8.3.min.20141001.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand topnav" href="#">Alte<span class="text-uppercase mirror">r</span>ed By Obrycki</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#services">Services</a>
            </li>
            <li>
              <a href="#contact" data-toggle="modal">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div itemscope itemtype="http://schema.org/ProfessionalService">
    <a name="about"></a>
    <div class="intro-header" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="intro-message">
              <h1 itemprop="alternateName" content="Altered By Obrycki">
                Alte<span class="">r</span>ed By Obrycki
              </h1>
              <h3>Don't settle for ordinary</h3>
              <hr class="intro-divider" />
              <ul class="list-inline intro-social-buttons">
                <li>
                  <a href="https://twitter.com/AlteredByO" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/alteredbyo" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
                </li>
              </ul>
            </div>
            <div>
              <span itemprop="name" content="Altered By O"></span>
              <div itemscope itemprop="address" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality" content="Minneapolis"></span>
                <span itemprop="addressRegion" content="MN"></span>
              </div>
              <span itemprop="description" content="At Altered By O we recycle, repurpose, redefine and reimagine ordinary and everyday products into unique, heirloom pieces. Because everybody deserves a one-of-a-kind piece to call their own."></span>
              <span itemprop="email" content="info@alteredbyo.com"></span>
              <span itemprop="url" content="https://alteredbyo.com"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content -->

    <a name="services"></a>
    <div class="content-section-a" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6">
            <hr class="section-heading-spacer" />
            <div class="clearfix"></div>
            <h2 class="section-heading">What we do:<br /><small>And why we do it</small></h2>
            <p class="lead">
              We re-purpose, re-define and re-imagine ordinary and everyday
              products into unique, heirloom pieces. Why? Because the things you
              keep in your home are a reflection of yourself, and we want to
              give you the opportunity to own something that wasn't built by
              <em>Inserting Slot A into Tab B</em>.
            </p>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <img class="img-responsive" src="img/chair.20150102.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-section-a -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-inline">
              <li>
                <a href="#">Home</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="#about">About</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="#services">Services</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="#contact" data-toggle="modal">Contact</a>
              </li>
            </ul>
            <p class="copyright text-muted small">Copyright &copy; Kara Obrycki <?php echo date('Y'); ?>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="contact/" method="post" id="contactForm" role="form">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="contactModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" title="Name" required />
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email address" title="Email address" required />
              </div>
              <div class="form-group">
                <label for="comment" class="sr-only">Comments</label><br />
                <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Comments" title="Comments" required></textarea>
                <input type="hidden" name="do-not-modify" value="" />
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.20141001.js"><\/script>')</script>
    <script src="js/bootstrap.min.20141001.js"></script>
    <script src="js/vendor/jquery.cookie-1.4.1.min.20141001.js"></script>
    <script src="js/contact.20150101.js"></script>
    <!--[if lt IE 8]>
    <script src="js/browse.happy.20141001.js"></script>
    <![endif]-->

    <script>
(function ($) {
    $(document).scroll(function () {
        if ($(this).scrollTop() > 0 && !$('h1[itemprop="alternateName"] span').hasClass('mirror')) {
            $('h1[itemprop="alternateName"] span').addClass('mirror').addClass('text-uppercase');
        } else if ($(this).scrollTop() <= 0) {
            $('h1[itemprop="alternateName"] span').removeClass('mirror').removeClass('text-uppercase');
        }
    });
})(jQuery);
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-58470212-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
