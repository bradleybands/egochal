<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ego Chal</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="index.php">Ego Chal</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="teams.php">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="games.php">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="about.php">About</a>
                <a class="dropdown-item" href="contact.php">Contact Us</a>
              </div>
            </li>
          </ul>

        </div>
      </nav>


      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Centralising E-Sports In Ghana.</h1>
          <a href="register.php" role="button" class="btn btn-danger btn-lg action-button">Register</a>
          <a href="login.php" role="button" class="btn btn-outline-danger btn-lg action-button">Log In</a>
        </div>

        <div class="col-lg-6">
          <img class="title-image" src="images/landing-image.jpg" alt="iphone-mockup">
        </div>

      </div>

    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">

      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-users fa-4x"></i>
          <h3 class="feature-title">Discover Talent</h3>
          <p>Find Africa-based players.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-gamepad fa-4x"></i>
          <h3 class="feature-title">Meet Teams</h3>
          <p>Enggage with your favourite teams.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-trophy fa-4x"></i>
          <h3 class="feature-title">Gaming Events</h3>
          <p>Follow events and watch live matches</p>
        </div>
      </div>


    </div>
  </section>


  <!-- Testimonials -->

  <section class="colored-section" id="highlights">

    <div id="highlight-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <img class="highlight-image" src="images\highlight1.jpg" alt="highlight picture">
          <br>
          <br>
          <em>2018 CDL Champs, Accra</em>
        </div>
        <div class="carousel-item container-fluid">
          <img class="highlight-image" src="images\highlight2.jpg" alt="highlight picture">
          <br>
          <br>
          <em>2019 MotherLand Invitational, Kumasi</em>
        </div>
        <div class="carousel-item container-fluid">
          <img class="highlight-image" src="images\highlight3.jpg" alt="highlight picture">
          <br>
          <br>
          <em>2014 LOL World Series, Accra</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#highlight-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#highlight-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>


  <!-- Press -->

  <section class="colored-section" id="press">
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <!-- <section class="white-section" id="pricing">

    <h2 class="section-heading">A Plan for Every Dog's Needs</h2>
    <p>Simple and affordable price plans for your and your dog.</p>

    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Chihuahua</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">Free</h2>
            <p>5 Matches Per Day</p>
            <p>10 Messages Per Day</p>
            <p>Unlimited App Usage</p>
            <button class="btn btn-lg btn-block btn-outline-dark" type="button">Sign Up</button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Labrador</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">$49 / mo</h2>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3>Mastiff</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">$99 / mo</h2>
            <p>Pirority Listing</p>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>

          </div>
        </div>
      </div>



    </div>

  </section> -->


  <!-- Call to Action -->

  <section class="white-section" id="cta">
    <div class="container-fluid">
      <h3 class="big-heading">Are you a player or team looking for a challenge?<br>Register Now!</h3>
      <button type="button" class="btn btn-danger btn-lg action-button">Register</button>
    </div>
  </section>


  <!-- Footer -->

  <footer class="colored-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p>?? Copyright 2021 BYTE Tech</p>
    </div>
  </footer>

  <!-- Start of LiveChat (www.livechatinc.com) code -->
  <script>
      window.__lc = window.__lc || {};
      window.__lc.license = 13303971;
      ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
  </script>
  <noscript><a href="https://www.livechatinc.com/chat-with/13303971/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
  <!-- End of LiveChat code -->

</body>

</html>
