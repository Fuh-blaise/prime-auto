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
  <title>contact reconditioned engines prime auto spares</title>


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
            <i class="fa fa-bars" onclick="showNav()" id="menuBtn"></i>
            
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
    
    <div class="banner ">
        <img src="img/customer-dp.png" alt="Snow" style="width:100%; height:30vh;" class="banner-img">
        <H1>RECONDITIONED <span class="span">ALL BRAND  ENGINES</span> FROM PRIME AUTO SPARES</H1>

        <div class="display1">
          <div class="row">
            
        
    
     
            <?php include('form_process.php'); ?>
            <div class="border rounded p-4">
    
                <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <center><h1><div class="success"> <?= $success ?> </div></h1></center>
                <center> <h3>CONTACT US</h3></center>
                  <p>Contact us today, and get reply within 24 hours!</p>
                  <fieldset>
                  <input placeholder="Your name" type="text" name="name"  value="<?= $name ?>"tabindex="1"  autofocus>
                  <span class="error"><?= $name_error ?> </span>
                  </fieldset>
                  <fieldset>
                  <input placeholder="Your Email Address" type="text" name="email"  value="<?= $email ?>"tabindex="2" >
                  <span class="error"><?= $email_error ?> </span>
                  </fieldset>
                  <fieldset>
                  <input type="text" id="country_code" name="phone" placeholder=" enter country code and phone number*" value="<?= $phone ?>" tabindex="3" >
                  <span class="error"><?= $phone_error ?> </span>
                  </fieldset>
                  <fieldset>
                  <h1>Select Brand Below</h1>
                   <select class="select" name="Car_Brand" tabinde="4" type="select">
                                    
                                    <option>Audi</option>
                                    <option>BMW</option>
                                
                                    <option >Mercedes</option>
                                    <option>LandRover</option>
                                    <option>Range Rover</option>
                                    <option>Jaguar</option>
                                    
                                    <option>Isuzu</option>
                                    
                                    
                                    
                                    <option>Citroen</option>
                                    <option>Mini</option>
                                    <option>Mitsubishi</option>
                                    <option>Nissan</option>
                                    
                                
                                    <option>Mercedes-Amg</option>
                                    <option>Honda</option>
                                    <option>Renault</option>
                                    <option>Toyota</option>
                                    <option>Vauxhall</option>
                                    <option>Volvo</option>
                                    <option>Iveco</option>
                                    <option>Volkswagen</option>
                                    <option>Peugeot</option>
                                    <option>Ford</option>
                                    <option>Lexus</option>
                    </select>
                  </fieldset>
                    
                 
                   
                     <fieldset>
                     <h1>Select car Part Below</h1>
                     <select class="select" id="fuel" name="Car_part" tabindex="4" Type="select">
                                    
                                    <option>Engine</option>
                                    <option>Automatic Gearbox</option>
                                
                                    <option >Cylinder Head</option>
                                    <option>Power Steering Pump</option>
                                    <option>Starter Motor</option>
                                    <option>Turbo</option>
                                    
                                    <option>Flywheel (Automatic)</option>
                                    
                                    
                                    
                                    <option>Aircon Compressor</option>
                                    <option>Alternator</option>
                                    <option>High Pressure Fuel Pump</option>
                                    <option>Crankshaft Pulley</option>
                                    
                                
                                    <option>Inlet Manifold</option>
                    
                    </select> 
                    
                     </fieldset>
      
                                
                <fieldset>
                  <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5" ></textarea>
                  
                </fieldset>
                <fieldset>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Show prices</button>
                </fieldset>
                <h4>By clicking ‘Show Prices’ you consent Engine & Gearboxes to send you price quotes in your email. We will not disclose or sell your details to any 3rd party. For details read our <a href="privacy-policy.html"><span class="span">Privacy Policy</span></a>.</h4>

                
              </form>
              </div>
          </div>
          <div class="row">
           <div class="display">
               
                   <img src="img/stamp-1.png" alt="">
                   <img src="img/stamp-2.png" alt="">
                   <img src="img/stamp-3.png" alt="">
           </div> 
           <ul class="heading-form">
    <li>
            <i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Uk’s Best Engine Fitters & Suppliers</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Satisfaction Guaranteed</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Free Instant Quotes</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;24/7 Delivery and Collection Facility</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Low Priced Premium Quality Services</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Up to 50% OFF on Engine Purchase</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Trusted by Thousands of Happy Customers </li><br>
            <li><img src="img/bmw-ssl.png" alt="SSL" class="img-responsive"/></li>   
</ul>


            
  
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