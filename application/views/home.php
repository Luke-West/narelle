<style>
/*!
 * Start Bootstrap - Landing Page (https://startbootstrap.com/template-overviews/landing-page)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-landing-page/blob/master/LICENSE)
 */

  body, html {
    width: 100%;
    height: 100%;
  }

  body, h1, h2, h3, h4, h5, h6 {
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 700;
  }

  .intro-header {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    border-bottom: 1px solid black;
    border-top: 1px solid black;
    color: black;
    height: 375px;
    background: url(https://i.pinimg.com/originals/c7/19/07/c71907b930128ed88d1329bdd8ad3cb0.jpg) no-repeat center center;
    background-size: cover;
  }

  .intro-message {
    position: relative;
    padding-top: 5%;
  }

  .intro-message>h1 {
    margin: 0;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
    font-size: 5em;
  }

  .intro-divider {
    width: 400px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  }

  .intro-social-buttons i {
    font-size: 80%;
  }

  @media(max-width:767px) {
    .intro-message {
      padding-bottom: 15%;
    }
    .intro-message>h1 {
      font-size: 3em;
    }
    ul.intro-social-buttons>li {
      display: block;
      margin-bottom: 20px;
      padding: 0;
    }
    ul.intro-social-buttons>li:last-child {
      margin-bottom: 0;
    }
    .intro-divider {
      width: 100%;
    }
  }

  .network-name {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 2px;
  }

  .content-section-a {
    padding: 50px 0;
    background-color: #f8f8f8;
  }

  .content-section-b {
    padding: 50px 0;
    border-top: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
  }

  .section-heading {
    margin-bottom: 30px;
  }

  .section-heading-spacer {
    float: left;
    width: 200px;
    border-top: 3px solid #e7e7e7;
  }

  .banner {
      background: url('<?php echo base_url("assets/images/narelle-background.jpg") ?>') no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      /*background-size: cover;*/
      height: 320px;
      -o-background-size: cover;
      text-align: center;
      border-bottom: solid black 0.5px;
      border-top: solid black 0.5px;
  }

  .banner h2 {
    margin: 0;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
    font-size: 3em;
  }

  .banner ul {
    margin-bottom: 0;
  }

  .banner-social-buttons {
    float: right;
    margin-top: 0;
  }

  @media(max-width:1199px) {
    ul.banner-social-buttons {
      float: left;
      margin-top: 15px;
    }
  }

  @media(max-width:767px) {
    .banner h2 {
      margin: 0;
      text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
      font-size: 3em;
    }
    ul.banner-social-buttons>li {
      display: block;
      margin-bottom: 20px;
      padding: 0;
    }
    ul.banner-social-buttons>li:last-child {
      margin-bottom: 0;
    }
  }

  footer {
    padding: 50px 0;
    background-color: #f8f8f8;
  }

  p.copyright {
    margin: 15px 0 0;
  }

  .navbar {
    border-bottom: 1px solid black;
  }

</style>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Narelle Summers</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Narelle Summers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Narelle Summers</h1>
          <i><h3 style="margin-top: 15px">Emotional Wellbeing Coach.</h3></i>
          <h4 style="margin-top:15px">NLP Master Practitioner and Havening Techniques Practitioner</h4>
        </div>
      </div>
    </header>

    <section class="content-section-a"  >

      <div class="container">
        <div class="row">
          <div class="col-lg-6 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">About Narelle</h2>
              <p>Narelle is a qualified Havening Techniques Practitioner and a
              qualified Neuro Linguist Programming (NLP) Master Practitioner. Narelle
              has over ten years’ experience working in the NHS, working within
              education and communications training.</p>
              <p>Do you have anything holding you back, stopping you achieving what you
              want in your life? If so, Narelle will help you unlock your true potential and
              lead you on your first step of your new journey.</p>
          </div>
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" style="border-radius: 30px; height: 350px; margin-left: 70px;" src="<?php echo base_url("/assets/images/narelle.jpg") ?>" alt="">
          </div>
        </div>

      </div>
    </section>

    <section class="content-section-b">

      <div class="container">

        <div class="row" style="margin-left:50px;">
          <div>
            <div class="clearfix"></div>
            <h2>One to One session</h2>
            <h4>One to One session - Face to Face in person or via Skype/FaceTime</h4>
          <i><p style="font-size: 20px;">Each session is individually tailored to you, in order to get the best result.</p></i>
          <h4>Topics:</h4>
          <div class="col-lg-5 ml-auto" style="display: inline-block;">
            <ul>
              <li>Anxiety</li>
              <li>confidence building</li>
              <li>controlling negative inner chatter</li>
              <li>empowering</li>
              <li>Insomnia</li>        
              <li>losing weight</li>
              <li>personal development</li>
              <li>phobias</li>
              <li>procrastination</li>
              <li>public speaking</li>
            </ul>
          </div>
          <div class="col-lg-5 mr-auto" style="display: inline-block;">
            <ul>
              <li>stress</li>
              <li>unwanted feelings anger</li>
              <li>frustration</li>
              <li>shame</li>
              <li>guilt</li>
              <li>abandonment</li>
              <li>regret</li>     
              <li>relationship anxieties</li>
              <li>removing your negative feelings attached to your negative memories</li>
            </ul>
          </div>
          <br><br>
          <p>Usually only one session is needed. After the session people told me they felt relaxed, calmer, lighter, confident and positive.</p>
        </div>
      </div>
    </section>

    <section class="content-section-a">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Lorum Ipsum</h2>
            <p class="lead">The site and text will continue...</p>
          </div>
          <div class="col-lg-5 mr-auto ">
            <img class="img-fluid" src="img/phones.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Home</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#about">About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#services">Services</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Narelle Summers 2017. All Rights Reserved</p>
      </div>
    </footer>
  </body>

</html>