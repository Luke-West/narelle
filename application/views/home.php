<style>
  .intro-header {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    border-bottom: 1px solid gray;
    border-top: 1px solid gray;
    color: black;
    height: 375px;
    background: url('<?php echo base_url("assets/images/narelle-background2.jpg") ?>') no-repeat center center;
    background-size: cover;
  }

  <style>
  body, html {
    width: 100%;
    height: 100%;
    letter-spacing: 0.3px;
  }

  body, h1, h2, h3, h4, h5, h6, p { 
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 700;
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
      background: url('<?php echo base_url("/assets/images/background.png") ?>') no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      height: 320px;
      -o-background-size: cover;
      text-align: center;
      /*border-bottom: solid black 0.1px;
      border-top: solid black 0.5px;*/
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
    border-bottom: 0.5px solid gray;
  }

  .blockquote-green{
    display:block;
    background: #fff;
    padding: 15px 20px 15px 45px;
    margin: 0 0 20px;
    position: relative;
    font-family: Georgia, serif;
    font-size: 20px;
    line-height: 1.2;
    color: #666;
    text-align: justify;
    border-left: 15px solid #ff1919;
    border-right: 2px solid #ff1919;
    -moz-box-shadow: 2px 2px 15px #ccc;
    -webkit-box-shadow: 2px 2px 15px #ccc;
    box-shadow: 2px 2px 15px #ccc;
  }

  .blockquote-blue{
    display:block;
    background: #fff;
    padding: 15px 20px 15px 45px;
    margin: 0 0 20px;
    position: relative;
    font-family: Georgia, serif;
    font-size: 20px;
    line-height: 1.2;
    color: #666;
    text-align: justify;
    border-left: 15px solid #e55ea2;
    border-right: 2px solid #e55ea2;
    -moz-box-shadow: 2px 2px 15px #ccc;
    -webkit-box-shadow: 2px 2px 15px #ccc;
    box-shadow: 2px 2px 15px #ccc;
  }

  .blockquote-orange{
    display:block;
    background: #fff;
    padding: 15px 20px 15px 45px;
    margin: 0 0 20px;
    position: relative;
    font-family: Georgia, serif;
    font-size: 20px;
    line-height: 1.2;
    color: #666;
    text-align: justify;
    border-left: 15px solid #ffb2b2;
    border-right: 2px solid #ffb2b2;
    -moz-box-shadow: 2px 2px 15px #ccc;
    -webkit-box-shadow: 2px 2px 15px #ccc;
    box-shadow: 2px 2px 15px #ccc;
  }

  blockquote::after{
    content: "";
  }

  .quote-badge{
      background-color: rgba(0, 0, 0, 0.2);   
  }

  .quote-box-blue{
      overflow: hidden;
      margin-top: -50px;
      padding-top: -100px;
      border-radius: 17px;
      background-color: purple;
      margin-top: 25px;
      color:white;
      box-shadow: 2px 2px 2px 2px #E0E0E0;
      width: 80%;
  }

  .quote-box-orange{    
      overflow: hidden;
      margin-top: -50px;
      padding-top: -100px;
      border-radius: 17px;
      background-color: pink;
      margin-top: 25px;
      color:white;
      box-shadow: 2px 2px 2px 2px #E0E0E0;
      width: 80%;
  }

  .quote-box-green{    
      overflow: hidden;
      margin-top: -50px;
      padding-top: -100px;
      border-radius: 17px;
      background-color: pink;
      margin-top: 25px;
      color:white;
      box-shadow: 2px 2px 2px 2px #E0E0E0;
      width: 80%;
  }

  .quotation-mark{
      margin-top: -10px;
      font-weight: bold;
      font-size:75px;
      color:white;
      font-family: "Times New Roman", Georgia, Serif;
      
  }

  .quote-text{
      margin-left: 20px;
      margin-right: 15px;
      font-size: 14px;  
      margin-top: -65px;
  }

  .quotes {
    margin-right: 100px;
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
    <!-- <link href="<?php echo(base_url("/assets/css/main.css")) ?>" rel="stylesheet" type="text/css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="icon" href="<?=base_url()?>/assets/images/unlock_world.png" type="image/gif">
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
              <a class="nav-link aboutTab" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link o2oTab" href="#">One to One Sessions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link myStoryTab" href="#">My Story</a>
            </li>
            <li class="nav-item">
              <a class="nav-link wellbeingTab" href="#">Wellbeing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link proSpeakerTab" href="#">Professional Speaker</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <img class="img-fluid img-responsive quoteImage" style="height: 75px; border-radius: 30px; max-height: 350px; position: absolute; right: 0px;" src="<?php echo base_url("/assets/images/unlock_world.png") ?>" alt="">
          <h1 class="text-center" style="display: inline-block;">Narelle Summers</h1>
          <div>
            <div class="text-center" style="display: inline-block;">
              <i><h3 class="text-center" style="font-size: 40px;">Emotional Wellbeing Coach</h3></i>
              <h4 class="text-center" style="font-size: 25px;">NLP Master Practitioner and Havening Techniques Practitioner</h4>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="content-section-a" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-8 col-md-7 ml-auto pull-left">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">About Narelle</h2>
              <p>Narelle is a qualified Havening Techniques<small>&reg;</small> Practitioner and a
              qualified Neuro Linguist Programming (NLP) Master Practitioner. Narelle
              has over ten years’ experience working in the NHS, working within
              education and communications training.</p>
              <p>Do you have anything holding you back, stopping you achieving what you
              want in your life? If so, Narelle will help you unlock your true potential and
              lead you on your first step of your new journey.</p>
          </div>
          <div class="col-lg-5 col-sm-4 col-xs-4 mr-auto pull-right">
            <img class="img-fluid img-responsive" style="border-radius: 30px; max-height: 350px;" src="<?php echo base_url("/assets/images/narelle.jpg") ?>" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="content-section-b" id="one_to_one">
      <div class="container">
            <div class="clearfix"></div>
            <h2>One to One session</h2>
            <h4>One to One session - Face to Face in person or via Skype/FaceTime</h4>
          <i><p style="font-size: 20px;">Each session is individually tailored to you, in order to get the best result.</p></i>
          <div class="quotes">
          <div class="row">
                <img class="pull-left img-responsive quoteImage" style="max-height:150px; border-radius: 7px; display: inline-block; margin-top: 35px;" src="<?php echo base_url("/assets/images/trudy.jpg") ?>">
                <blockquote class="pull-left col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin-top: 35px; display: inline-block;">
                  I had a havening session using FaceTime with Narelle. I was struggling with a feeling of fear that had resurfaced, which after talking to Narelle was more a feeling of terror, and from around 15 years ago. I started the havening with Narelle and it was amazing...the feeling of terror just up and vanished, the last thing I was expecting! I felt safe the whole time, and fully supported. The feeling of relief after only one session, years of fear just washed away. With Narelle you are definitely in safe hands. I am so grateful for my havening session with her, and would not hesitate to recommend her services.
                  <hr>
                  <p class="pull-left"> Trudy, <br> New Zealand</p>
                </blockquote>
              </div>
              <div class="row">
                <blockquote class="pull-left col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin-top: 50px; display: inline-block;">
                  Narelle treated me for a long-standing and severe phobia of snakes. I could not even look at a picture of a snake without my stomach churning. After a very short 10-15 minutes Havening session with Narelle, I felt confident enough to touch and handle a very curious corn snake. It felt warm and soft and not at all what I thought it would. Narelle was warm, generous, confident, capable and thoroughly professional. During my session, I became aware of a sensation of wanting to release all that fear I had been carrying around for so long and with Narelle's support and encouragement, I was able to do so. If you are thinking of trying Havening I would urge you to try Havening with Narelle; she is a wonderfully gifted and empathetic healer. Thank you Narelle.
                  <hr>
                  <p class="pull-left"> Nancy Smyth <br>
                  Pre-School Assistant, Hawkhurst</p>
                </blockquote>
                <img class="pull-right img-responsive quoteImage" style="max-height:150px; border-radius: 7px; display: inline-block; margin-top: 35px;" src="<?php echo base_url("/assets/images/droppedImage.png") ?>">
              </div>
              <div class="clearfix"></div>
              <div class="row">
                <img class="pull-left img-responsive quoteImage" style="border-radius: 7px; display: inline-block; margin-top: 35px; max-height: 130px;" src="<?php echo base_url("/assets/images/Dorris.jpg") ?>">
                <blockquote class="pull-left col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin-top: 35px; display: inline-block;">
                  I had a brain haemorrhage, 10 hours surgery and had a clip put in my brain 11 years ago. I was told I would have headaches most days which I did. Narelle used a NLP technique with me by creating a positive image in my mind of a healthy brain which has helped me remain free from headaches and painkillers. To strengthen my image I was put into a very relaxed state of mind. When I think I feel a headache coming on I think of that positive image and it goes away.
                  <hr>
                  <p class="pull-left"> Doris, Retired<br>
                    West Yorkshire</p>
                </blockquote>       
              </div>
              <div class="clearfix"></div>
              <div class="row">
                <blockquote class="pull-left col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin-top: 35px; display: inline-block;">
                    Life can be challenging enough when you are trying to balance a large family home life and being a working woman. It can create stress, tension and anger. Since I've been to see Narelle and practiced the Havening techniques she taught me in the session my whole life at home and at work has become so much more relaxed and happier. This has had an incredible knock on effect on my business as I have so much more positive energy to utilise in my work place and my business has grown and developed immensely as a result. Thank you so much Narelle you've really transformed my life.
                  <hr>
                  <p> Fiona, Presenter<br>
                  Surrey</p>
                </blockquote>
              <img class="pull-right img-responsive quoteImage" style="border-radius: 7px; display: inline-block; margin-top: 35px; max-height: 130px; width: 140px; transform: rotate(90deg);" src="<?php echo base_url("/assets/images/fiona2.JPG") ?>">
              </div>
          </div>   
          <div class="clearfix"></div>

          <h4>Topics:</h4>
          <div class="col-lg-5 ml-auto" style="margin-top: 20px; display: inline-block;">
            <ul>
              <li>Anxiety</li>
              <li>Confidence building</li>
              <li>Controlling negative inner chatter</li>
              <li>Empowering</li>
              <li>Insomnia</li>        
              <li>Losing weight</li>
              <li>Personal development</li>
              <li>Phobias</li>
            </ul>
          </div>
          <div class="col-lg-5 mr-auto" style="display: inline-block;">
            <ul>
              <li>Procrastination</li>
              <li>Public speaking</li>
              <li>Stress</li>
              <li>Unwanted feelings; anger, frustration, shame, guilt, abandonment and regret</li>
              <li>Relationship anxieties</li>
              <li>Removing your negative feelings attached to your negative memories</li>
            </ul>
          </div>
          <br><br>
          <p>After the session people told me they felt relaxed, calmer, lighter, confident and positive.</p>
        </div>
      </div>
    </section>

    <section class="content-section-a" id="my_story">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <div class="clearfix"></div>
            <h2 class="section-heading">My Story</h2>
            <p>&quot;I was overweight, caused by emotional over eating and not happy. I’ve used the techniques myself. Working through my emotional baggage using NLP and Havening to clear out my negatives feelings attached to upsetting memories. I no longer have the need to overeat. Visualising what I would look like, how that would make me feel. Visualising eating small amounts yet feeling full and satisfied and only eating when I was hungry. Changing the images in your head is so powerful and produces positive results.&quot;</p>
            <img src="<?php echo base_url("/assets/images/narelle_before.png") ?>">
            <img style="height: 70px;" src="https://maxcdn.icons8.com/Share/icon/p1em/Arrows//long_arrow_right1600.png">
            <img src="<?php echo base_url("/assets/images/narelle_after.png") ?>">
          </div>
          </div>
      </div>
    </section>

    <section class="content-section-b" id="wellbeing">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <h2 class="section-heading">Wellbeing</h2>
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h4><strong>Wellbeing for individuals</strong></h4>
            <ul style="margin-top: 30px;">
              <li>Are you keen to reduce your stress levels?</li>
              <li>Focused on improving your wellbeing?</li>
              <li>Are you keen to build up your resilience?</li>
              <li>Focused on being a better you?</li>
            </ul>
            <p>A feel good factor, leaving you relaxed, positive and confident. Using Skype
            or FaceTime in the comfort of your own home.</p>
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h4><strong>Wellbeing workshop for groups</strong></h4>
            <p style="margin-top: 30px;">When you come to see me, we will start by creating a safe environment
            where we can share our ideas and experiences.</p>
            <p>After that we will work together on ways to focus on positives things in our
            lives. I will show you new and exciting techniques to make your lives even
            better.</p>
            <p>This workshop will:</p>
            <ul style="margin-top: 30px;">
              <li>Have a positive impact on your health and wellbeing.</li>
              <li>Leave you feeling relaxed and happy freeing yourself from negative
              emotions.</li>
              <li>Help you focus and prioritise.</li>
            </ul>
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h4><strong>Wellbeing for organisations</strong></h4>
            <p style="margin-top: 30px;">Organisations are losing days due to stress related problems in the work place.
            Last year 17 million work days were lost to stress-related problems costing 2.4
            billion pounds.</p>
            <ul>
              <li>Are you keen to reduce absenteeism?</li>
              <li>Focused on supporting the wellbeing of your employees?</li>
              <li>Are you keen to improve employee engagement across your
              organisation?</li>
              <li>Focused on providing a better work environment?</li>
            </ul>
            <p>The workshop will:</p>
            <ul>
              <li>Have a positive impact on the health and wellbeing of your
              employees.</li>
              <li>Free people from negative emotions and support them to create the
              balance they need to succeed in all areas of their life.</li>
              <li>Support your employees in achieving the work-life balance and in
              return your organisation can expect to see an improvement in
              employee engagement. Which in turn can lead to increased staff
              retention and a reduction in stress-related illnesses and absenteeism.</li>
            </ul>
            <p>Organisations WILL get a more productive workforce, increased profits and
            increase the wellbeing of your employees.</p>
            <blockquote class="blockquote-green" style="margin-top: 45px;">
                I felt I had let go of the tensions and stresses that I’d been holding for so long I
                was no longer aware of.  That evening I had the best nights’ sleep in a long
                time. Now when I become aware of getting tense I do the actions Narelle
                taught me and immediately feel the effect of calm.</p>
            </blockquote>
            <blockquote class="blockquote-blue" style="margin-top: 35px;">
                The result was a more positive, calmer feeling and the knowledge that
                everything was and will be okay. Narelle is a confident, compassionate and
                encouraging person. Thank you.</p>
            </blockquote>
            <blockquote class="blockquote-orange" style="margin-top: 35px;">
                I left feeling more relaxed and far less anxious than I had before. The session
                had a positive effect, coupled with Narelle’s infectious warmth and optimism.
                Thank you Narelle.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="content-section-a" id="professional_speaker">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <div class="clearfix"></div>
            <h2 class="section-heading">Professional Speaker</h2>
            <h4><u>Why Weight?</u></h4>
            <br>
            <p>Narelle’s keynote speech follows her journey about how she was
              overweight, caused by emotional over eating and not being happy. Working
              through her emotional baggage using NLP and Havening techniques Narelle
              cleared out her negatives feelings attached to upsetting memories.<br>
              She no longer has the need to overeat and feels fantastic, more confident,
              energised, positive and lighter. Hear her story about her battle with weight
              and food.</p>
              <blockquote class="blockquote-green" style="margin-top: 45px;">
                Narelle’s talk was inspirational and entertaining, through her honesty she
                made me believe that it is possible to make real and positive changes to my
                life.
              </blockquote>
              <blockquote class="blockquote-blue" style="margin-top: 35px;">
                  Loved it! Inspiring! Great energy, informative and really enjoyable.</p>
              </blockquote>
              <blockquote class="blockquote-orange" style="margin-top: 35px;">
                  A fantastic talk bringing lots of strands together.
              </blockquote>
              <h4><u>Wellbeing</u></h4>
              <br>
              <p>Narelle’s keynote speech is about wellbeing and resilience. Do you want to feel more relaxed and happier? She will reduce your stress levels by showing you techniques which will improve your wellbeing and build up resilience. Narelle feels passionately that everyone wants, and deserves, a better of quality of life.</p>
              <blockquote class="blockquote-green" style="margin-top: 45px;">
                The wellbeing talk I attended I found very interesting, Narelle is a great speaker and everything she said made sense. It was very powerful learning new techniques have to relax. It definitely made me think about my own wellbeing and I would highly recommend this talk to anybody.</p>
              </blockquote>
              <blockquote class="blockquote-blue" style="margin-top: 35px;">
                I went to Narelle’s Wellbeing talk with my partner and we both found it informative as well as interesting and applicable to everyday life. With Narelle’s excellent and engaging presentation skills, I easily identified with what she was saying about the common stresses we each experience.</p>
              </blockquote>
              <blockquote class="blockquote-orange" style="margin-top: 35px;">
                I was privileged to attend another wellbeing presentation of Narelle’s recently. As ever she was encouraging, helpful and supportive. It’s great to know there are people like Narelle who can do so much to alleviate those problems we all have. The ones that keep us down and hold us back. Highly recommended.</p>
              </blockquote>
          </div>
        </div>
      </div>
    </section>
    <div>
      <img style="height: 90px;" src="<?php echo base_url("/assets/images/havening_logo.png") ?>">
      <img style="height: 90px;" src="<?php echo base_url("/assets/images/nlp-society-logo.jpg") ?>">
    </div>
    <div> 
      <p>Narelle Summers is a certified practitioner of Havening Techniques. Havening Techniques is a registered trademark of Ronald Ruden, 15 East 91st Street, New York. <a href="www.havening.org">www.havening.org</a>
    </div>
    <footer>
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a class="nav-link aboutTab" href="#">About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a class="nav-link o2oTab" href="#">One to One Sessions</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a class="nav-link myStoryTab" href="#">My Story</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a class="nav-link wellbeingTab" href="#">Wellbeing</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a class="nav-link proSpeakerTab" href="#">Professional Speaker</a>
          </li>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Narelle Summers 2017. All Rights Reserved</p>
      </div>
    </footer>
  </body>
</html>
<script>

  $(function(){
    $(".aboutTab").click(function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("#about").offset().top
      }, 2000);
    });

    $(".o2oTab").click(function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("#one_to_one").offset().top
      }, 2000);
    });
    
    $(".myStoryTab").click(function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("#my_story").offset().top
      }, 2000);
    });

    $(".wellbeingTab").click(function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("#wellbeing").offset().top
      }, 2000);
    });


    $(".proSpeakerTab").click(function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("#professional_speaker").offset().top
      }, 2000);
    });

    var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)) || $(window).width() <= 480){ isMobile = true;
      $(".quoteImage").remove();
    }

  });

</script>