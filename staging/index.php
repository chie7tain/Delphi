<!-- using the require function to insert head and meta  -->
  <?php
      // include ("server.php");
?>
<?php include "../templates/header.php";?>
     <title>Delphi</title>
  </head>
  <body>
    <!-- main container -->
    <section class="container">
      <!-- header section -->
      <header>
        <div class="oracle-container">
          <div class="oracle-band1 oracle">
            <img class="oracle-icon" src="../assets/icons/baseball.svg" alt="">
          </div>
          <div class="oracle-band2 oracle">
            <img class="oracle-icon" src="../assets/icons/cycling.svg" alt="">
          </div>
          <div class="oracle-band3 oracle">
            <img class="oracle-icon" src="../assets/icons/tennisball.svg" alt="">
          </div>
          <div class="oracle-band4 oracle">
            <img class="oracle-icon" src="../assets/icons/basket ball.svg" alt="">
          </div>
                  <div class="logo-container">
                    <h3><a id="logo" href="index.html">Del<span>Phi</span></a> </h3>
                  </div>
          <div class="oracle-band5 oracle">
            <img class="oracle-icon" src="../assets/icons/american football.svg" alt="">
          </div>
          <div class="oracle-band6 oracle">
            <img class="oracle-icon" src="../assets/icons/weightlifting.svg" alt="">
          </div>
          <div class="oracle-band7 oracle">
            <img class="oracle-icon" src="../assets/icons/horse-race.svg" alt="">
          </div>
        </div>
      </header>
      <!-- end of header section -->
      <!-- ============================= -->
      <!-- main section -->
      <main class="main-section">
        <!-- hero container -->
        <div class="hero-container">
          <div>
            <h3 class="hero-heading">Next-generation,cutting edge online gaming & sports</h3>
            <h1 class="hero-banner"><span>Predictions</span> service</h1>
            <p class="hero-text">
              are you tired of losing hard earned money ? tired of making wrong choices when betting ? tired of not having enough
              information to pick a winning Team ? if so then Delphi the Bet Oracle is for you.
            </p>
            <p class="hero-text">
              Delphi is a one of a kind sports betting & online gaming predictions assistant that uses advanced Machine Learing
              Algorithms to analyse and predict match outcomes.
            </p>
          </div>
          <!-- ======================= -->
          <!-- notifiy form container -->

        <div class="notify-form-container">
        <h2 class="form-heading">Get Notified on app release!</h2>
        <!-- form begining -->
            <form  method="POST" class="notify-form" action="notifyform.php">
            <!-- username -->
              <div class="input-container">
                <input type="text" id="firstname" name="name" autocomplete="off" required value="">
                <label for="firstname" class="email-label">
                  <span class="content-name">Enter your name</span>
                </label>
                <span class="error">* <?php ;?></span>
              </div>
              <!-- end of username -->
              <!-- =================== -->
              <!-- email -->
              <div class="input-container">
                <input type="email" id="email" name="email" autocomplete="off" required value="">
                <label for="email" class="email-label">
                  <span class="content-name">Enter your email address</span>
                </label>
                <span class="error">* <?php;?></span>
              </div>
              <!-- end of email -->
              <!-- ==================== -->

              <div class="btn-container">
                <input type="submit" value="Submit" id="submit-btn">
              </div>
            </form>
        </div>
          <!-- end of notify container -->
        </div>
        <!-- ======================== -->
        <!-- background image of sports people -->
        <div class="background-image-container">
          <img id="background-image" src="../assets/icons/Group 1.svg" alt="background image of sports people">
        </div>
        <!-- ======================= -->
        <!-- right side line with bicycle in between -->
        <div class="bicycle-line-container">
          <div class="line"></div>
          <img src="../assets/icons/cycling.svg" alt="bicycle icon">
          <div class="line"></div>
        </div>
        <!-- ============= -->
      </main>
        <!-- end of main section -->
        <!-- ==================== -->
      <!-- sports icons container -->
      <div class="sports-icon-container">
        <img class="sport" src="../assets/icons/american football.svg" alt="american football icon">
        <img class="sport" src="../assets/icons/basket ball.svg" alt="basket ball icon">
        <img class="sport" src="../assets/icons/baseball.svg" alt="baseball icon">
        <img class="sport" src="../assets/icons/tennisball.svg" alt="tennis ball icon">
        <img class="sport cycle" src="../assets/icons/cycling.svg" alt="cycling icon">
        <img class="sport weight" src="../assets/icons/weightlifting.svg" alt="weightlifting icon">
        <img class="sport horse" src="../assets/icons/horse-race.svg" alt="horse-race icon">
      </div>
      <!-- end of sports icons container -->
      <!-- ========================= -->

    </section>


    <!-- end of main container -->
    <!-- ===================== -->
   <?php require "../templates/footer.php";