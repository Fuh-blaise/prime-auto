<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mediaquerry.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <title>contact reconditioned engines prime</title>

  <meta name="description" content="Buy the cheapest second hand, recon, rebuilt engines at the cheapest online rates, compare prices from the most trusted engine sellers in South Africa" />

    <meta name="keywords" content ="engine for sale, recon engine, Reconditioned Engine, engines for sale, engine reconditioning, Rebuilt Engine, engine re conditioner, re manufactured engine, reconditioned engine, diesel engine for sale, petrol engine for sale, car parts for sale, truck engines, truck gearbox, auto spare parts, auto spares shop" />

</head>
<body>
<header>
        <div class="footer-main">
        <div class="footer">
                <h4><a href="tel:+27639141500">+27639141500</a></h4>
                <h4><a href="contact-us.php"> sales@gmail.com</a></h4>
            </div>
            <div class="footer">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"> Facebook</i></a>
                <a href='https://wa.me/+27639141500'target='_blank'> whatsapp <i class= "fab fa-whatsapp"></i></a>
                <a href='https://instagram.com'target='_blank'> instagram <i class= "fab fa-instagram"></i></a>
                <a href='https://twitter.com'target='_blank'> twitter <i class= "fab fa-twitter"></i></a>
                
            </div>
        </div>
       <hr>
        <section id="main-menu">
            
            <img src="img/logo.png" alt="logo">
            <i class=" fa fa-bars" onclick="showNav()" id="menuBtn"></i>
            
            <nav id="main-nav">
                <ul>
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="used-engines.php"> USED ENGINES</a>
                    </li>
                    <li>
                        <a href="reconditioned-engines.php"> RECON ENGINES </a>
                    </li>
                    <li>
                        <a href="about-us.html"> ABOUT US</a>
                    </li>
                    <li>
                        <a href="go-green.html"> GO GREEN</a>
                    </li>
                    <li>
                        <a href="contact-us.php"> CONTACT</a>
                    </li>
                     
                </ul>
            </nav>
        </section>
    <!-- form area  -->
    
    <div class="banners ">
        <img src="img/customer-dp.png" alt="Snow">
    </div>
        <div class="display1">
          <div class="row">
            
        
    
     
            <?php include('form_process.php'); ?>
            <div class="border rounded p-4">
    
                <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <center><h1><div class="success"> <?= $success ?> </div></h1></center>
                <center> <h3>CONTACT US</h3></center>
                  <p>Contact us today, and get reply within 24 hours!</p>
                  <fieldset>
                  <input placeholder="Your name*" type="text" name="name"  value="<?= $name ?>"tabindex="1"  autofocus>
                  <span class="error"><?= $name_error ?> </span>
                  </fieldset>
                  
                  <fieldset>
                  <fieldset>
                  <input placeholder="Your Email Address*" type="text" name="email"  value="<?= $email ?>"tabindex="2" >
                  <span class="error"><?= $email_error ?> </span>
                  <fieldset>
                  <input type="text" id="country_code" name="phone" placeholder="phone number*" value="<?= $phone ?>" tabindex="4" >
                  <span class="error"><?= $phone_error ?> </span>
                  </fieldset>
      
                                
                <fieldset>
                  <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5" ></textarea>
                  
                </fieldset>
                <fieldset>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
                
              </form>
              </div>
          </div>
          <div class="row">
            
            <h2 style="font-size: 18px;">Contact us to get superb quality <a href="used-engines.php">used</a>, <a href="reconditioned-engines.php">reconditioned</a> and <a href="reconditioned-engines.php">remanufactured</a> Engines. We <a href="supplyandFittedEngine.html">supply and fit</a> used, <a href="reconditioned-engines.php">reconditioned</a> and <a href="reconditioned-engines.php">premanufactured</a> engines in S.A. If you prefer to contact us by email fill out the Contact Form and we will get in touch with you. 
    
              <br>
              <h5>For more information call/whatsapp us: <a href="tel:+27639141500"><b style="font-size:25px;color:red;">+27639141500</b></a></h5></h2><br>
              <a href='https://wa.me/+27639141500'target='_blank'> whatsapp us <i class= "fab fa-whatsapp"></i></a><br>
              OR VISIT US:
              <br/>
              <h5><b style="color:black;font-weight:bold;">9 Industrial saint George, Western Cape, George 6536 South Africa</b></h5>

            <div class="mapouter">
                <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6617.815065962188!2d22.468453293884497!3d-33.96921608279382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dd61ad69740c8d7%3A0x507ee014c4818c13!2s9%20Industrial%20St%2C%20George%20Industria%2C%20George%2C%206536%2C%20South%20Africa!5e0!3m2!1sen!2scm!4v1631886946944!5m2!1sen!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

          </div>
    
  
        </div>
    </div>
      
    
     
        

        <!-- header / form area ends here -->

          <!-- footer starts here -->
          <hr>
          <div class="footer-main">
              <div class="footer">
                  <img src="img/logo.png" alt="logo" width="300" height="250">
              </div>
              <div class="footer">
              <h1>NAVIGATION</h1>
              <li>
                  <a href="index.php"> HOME</a>
              </li>
              <li>
                  <a href="about-us.html">About us</a>
              </li>
              <li>
                  <a href="contact-us.php"> CONTACT US</a>
              </li>
              </div>
              <div class="footer">
                  <h1>SERVICES</h1>
                  <li>
                  <a href="used-engines.ph">Used Engines</a>
              </li>
                  <li>
                  <a href="reconditioned-engines.php">Recon engines</a>
              </li>
                  <li>
                  <a href="customer-review.php"> Review</a>
              </li>
              </div>
  
              <div class="footer">
                <a href = "mailto: abc@example.com">Send Email</a>
                <h4><a href="tel:+27639141500">+27639141500</a></h4>
              </div>
          </div>
  
          
  
          <hr>
          <div class="footer-main">
              <div class="footer">
                  <h1></h1>Terms and conditions</h1>
              </div>
              <div class="footer">
                  &copy 2020 All Rights Reserved
              </div>
          </div>
      
  
      </div> 

      <script src="./js/index.js"></script>
</body>
</html>