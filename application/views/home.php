<style>
  .intro-header {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    border-bottom: 1px solid gray;
    border-top: 1px solid gray;
    color: black;
    height: 375px;
    background: url('<?php echo base_url("assets/images/background3.png") ?>') no-repeat center center;
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
      background: url('<?php echo base_url("/assets/images/background3.png") ?>') no-repeat center center scroll;
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
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
          <h1>Narelle Summers</h1>
          <i><h3 style="margin-top: 15px; margin-left: 10%; display: inline-block;">Emotional Wellbeing Coach</h3></i>
          <h4 style="margin-top:15px; display: inline-block;  margin-left: 10%;">NLP Master Practitioner and Havening Techniques Practitioner</h4>
        </div>
      </div>
    </header>

    <section class="content-section-a" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ml-auto">
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
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" style="border-radius: 30px; height: 350px; margin-left: 70px;" src="<?php echo base_url("/assets/images/narelle.jpg") ?>" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="content-section-b" id="one_to_one">

      <div class="container">

        <div class="row" style="margin-left:50px;">
          <div>
            <div class="clearfix"></div>
            <h2>One to One session</h2>
            <h4>One to One session - Face to Face in person or via Skype/FaceTime</h4>
          <i><p style="font-size: 20px;">Each session is individually tailored to you, in order to get the best result.</p></i>
          <div class="quotes container">
              <img class="pull-right" style="border-radius: 7px; display: inline-block; margin-top: 35px;" src="http://narellesummers.co.uk/Narelle_Summers/-_files/droppedImage.png">
              <blockquote class="pull-left col-sm-2 col-md-10 col-lg-10" style="margin-top: 50px; display: inline-block;">
                "Narelle treated me for a long-standing and severe phobia of snakes. I could not even look at a picture of a snake without my stomach churning. After a very short 10-15 minutes Havening session with Narelle, I felt confident enough to touch and handle a very curious corn snake. It felt warm and soft and not at all what I thought it would. Narelle was warm, generous, confident, capable and thoroughly professional. During my session, I became aware of a sensation of wanting to release all that fear I had been carrying around for so long and with Narelle's support and encouragement, I was able to do so. If you are thinking of trying Havening I would urge you to try Havening with Narelle; she is a wonderfully gifted and empathetic healer. Thank you Narelle."
                </p>
                <hr>
                <p class="pull-right"> Nancy Smyth <br>
                Pre-School Assistant, Hawkhurst</p>
              </blockquote>
              <div class="clearfix"></div>
              <img class="pull-left" style="border-radius: 7px; display: inline-block; margin-top: 35px;" src="http://narellesummers.co.uk/Narelle_Summers/-_files/Dorris.jpg">
              <blockquote class="pull-left col-sm-10 col-md-10 col-lg-10" style="margin-top: 35px; display: inline-block; margin-left: 15px;">
                  I had a brain haemorrhage, 10 hours surgery and had a clip put in my brain 11 years ago. I was told I would have headaches most days which I did. Narelle used a NLP technique with me by creating a positive image in my mind of a healthy brain which has helped me remain free from headaches and painkillers. To strengthen my image I was put into a very relaxed state of mind. When I think I feel a headache coming on I think of that positive image and it goes away.
                </p>
                <hr>
                <p class="pull-left"> Doris, Retired<br>
                    West Yorkshire</p>
              </blockquote>       
              <div class="clearfix"></div>
              <img class="pull-right" style="border-radius: 7px; display: inline-block; margin-top: 35px;" src="http://narellesummers.co.uk/Narelle_Summers/-_files/droppedImage_1.png"> 
              <blockquote class="pull-left col-lg-9 col-md-9 col-sm-9" style="margin-top: 35px; display: inline-block; margin-left: 15px;">
                  I went to see Narelle for a specific reason, a specific worry/concern that had been ever increasing in my mind. It had really started to control and stir up my life. I recognised it was all out of proportion in my head, and taking up too much emotional and physical energy, but I didn’t know how to stop it, how to switch it off, how to alter the destructive thought patterns I was having. I had a one hour session with Narelle, which involved talking about the situation and the negative thoughts I was having. Narelle used a technique to remove these thoughts and replace them with positive ones. To embed the positive thoughts Narelle then put me into a deep state of relaxation. It was rather like being in a deep meditation state....As I experienced a deep sense of relaxation I was fully aware of what was happening. The session finished with another short chat focusing on my new thoughts and about the work we had done and how to continue the techniques going forward. Afterwards, I was very relaxed and unconcerned, it was a nice feeling after feeling so much anxiety for so long. I went away and didn't think much about it for a couple of weeks, and just got on with normal life. It was after a couple of weeks that it suddenly struck me, I hadn't given ANY concern or ANY notice even, to the issues that had been giving me great amounts of deep anxiety and sleepless nights for months previously, I had simply stopped worrying about it, or even thinking about it, those pictures had simply gone away, as simple as that. If you have any issues, concerns, big consuming life worries or small ones for that matter, I'd really recommend a session with Narelle, it's like she reset or reprogrammed my thought patterns. It sure beats months of anxiety and endless GP visits for "stress" meds!
                </p>
                <hr>
                <p> Physical Therapist <br>
                Huddersfield, West Yorkshire</p>
              </blockquote>
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
            <h2 class="section-heading">Professional speaker</h2>
            <p>Narelle’s keynote speech follows her journey about how she was
              overweight, caused by emotional over eating and not being happy. Working
              through her emotional baggage using NLP and Havening techniques Narelle
              cleared out her negatives feelings attached to upsetting memories.<br>
              She no longer has the need to overeat and feels fantastic, more confident,
              energised, positive and lighter. Hear her story about her battle with weight
              and food.</p>
              <p>Narelle’s keynote speech is about wellbeing and resilience. Do you want to feel more relaxed and happier? She will reduce your stress levels by showing you techniques which will improve your wellbeing and build up resilience. Narelle feels passionately that everyone wants, and deserves, a better of quality of life.</p>
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
          </div>
        </div>
      </div>
    </section>
    <div style="margin-left: 80px;">
      <img style="height: 90px;" src="<?php echo base_url("/assets/images/havening_logo.png") ?>">
      <img style="height: 90px;" src="<?php echo base_url("/assets/images/nlp-society-logo.jpg") ?>">
    </div>
    <div class="col-md-5" style="margin-left: 80px;"> 
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

  });

</script>