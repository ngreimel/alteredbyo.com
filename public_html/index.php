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
    <title>Altered By O</title>

    <meta name="description" content="Taking Ordinary and making it extra-ordinary!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.20141001.css">
    <link rel="stylesheet" href="css/styles.20141201.css">
    <script src="js/vendor/modernizr-2.8.3.min.20141001.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
body {
  background-color: #000;
  margin-top: 50px;
}
#content {
  background-color: #fff;
  text-align: center;
}
#text {
  font-family: 'brush script mt', cursive, serif;
  font-size: 2em;
  margin-right: 100px;
  text-align: right;
}
    </style>
  </head>
  <body>
    <div id="content" class="container">
      <h1>Have a seat, we'll be with you shortly!</h1>
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3">
          <img class="img-responsive" src="img/chair-front-scaled.20141230.png" alt="" />
        </div>
      </div>
      <p id="text"><em>Altered by Obrycki</em></p>
    </div>

    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.20141001.js"><\/script>')</script>
    <script src="js/bootstrap.min.20141001.js"></script>
    <script src="js/vendor/jquery.cookie-1.4.1.min.20141001.js"></script>
    <script src="js/contact.20141028.js"></script>
    <!--[if lt IE 8]>
    <script src="js/browse.happy.20141001.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      //ga('create', 'UA-32811855-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
