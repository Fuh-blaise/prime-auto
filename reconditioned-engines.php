<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reconditioned !& Used Engines</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/mediaquerry.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <meta name="description" content="Buy the cheapest second hand, recon, rebuilt engines at the cheapest online rates, compare prices from the most trusted engine sellers in South Africa" />

    <meta name="keywords" content ="engine for sale, recon engine, Reconditioned Engine, engines for sale, engine reconditioning, Rebuilt Engine, engine re conditioner, re manufactured engine, reconditioned engine, diesel engine for sale, petrol engine for sale, car parts for sale, truck engines, truck gearbox, auto spare parts, auto spares shop" />


</head>
<body>
    <header>
        <div class="footer-main">
            <div class="footer">
            <h4><a href="tel:+27639141500">+27639141500</a></h4>
                <h4><a href="contact-us.php">sales@gmail.com</a></h4>
            </div>
            <div class="footer">
                <a href="https//www.facebook.com/"><i class="fas fa-facebook">Fa</i></a>
                <a href="wa.me:+27639141500"><i class="fab fa-whatsapp">Wa</i></a>
                <i class="fas fa-instagram"></i>
                <i class="fas fa-twitter"></i>
            </div>
        </div>
       <hr>

       <section id="main-menu">
        <div class="main-menu">
            <img src="img/logo.png" alt="logo">
            <i class="fa fa-bars" onclick="showNav()" id="menuBtn"></i>
        </div>
        
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
    <div class="banner">
        <img src="img/dp1.jpg" alt="dispaly picture" style="width:100%; height:500px;">
    
        <div class="top-left">
        
    
     
            <?php include('form_process.php'); ?> 
            <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
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
               <input type="text" id="country_code" name="phone" placeholder="phone number*" value="<?= $phone ?>" tabindex="4" >
               <span class="error"><?= $phone_error ?> </span>
               </fieldset>
                            
            <fieldset>
              <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5" ></textarea>
              
            </fieldset>
            <fieldset>
              <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
            <div class="success"> <?= $success ?> </div>
          </form>
    

        </div>
        
        </div>

        <!-- header / form area ends here -->

        <h1 class="text-center">Don't have a Reg No?<a href="contact-us.php" class="btn">Talk to us</a></h1><br>

    <h1 class="text-center">INDEPENDENT <span class="span"> VERIFIED</span> REVIEWS</h1><br>
    <div class="display1">
        
        <div class="review">
            <a href="customer-review.php"><img src="img/custome-reviews.jpg" alt="side picture"></a>
        </div>
        <div class="review">
            <img src="img/side-pic44.jpg" alt="side picture">
        </div>
    </div><br><br>
<h1 class="text-center">SELECT THE MAKE OF YOUR CAR TO <span class="span">COMPARE ENGINE</span>  PRICES</h1>

    
       
       
<div class="car-make">
            <div class="abc">
                <a href="audi.html"><img src="img/audi.png" alt="audi engine" class="abc-img"></a>
                <a href="audi.html"><p>audi engines</p></a>
            </div>
            <div class="abc">
                <a href="bmw.html"><img src="img/bmw.png" alt="bmw engine" class="abc-img"></a>
                <a href="bmw.html"><p>bmw engines</p></a>
                </div>
            <div class="abc">
                <a href="mercedes.html"><img src="img/mercedes.png" alt="mercedes engine" class="abc-img"></a>
                <a href="mercedes.html"><p>mercedes engines</p></a>
                </div>
            <div class="abc">
                <a href="land-rover.html"><img src="img/land-rover.png" alt="bmw engine" class="abc-img"></a>
                <a href="land-rover.html"><p>LandRover engines</p></a>
            </div>
            <div class="abc">
                <a href="range-rover.html"><img src="img/rr.png" alt="rr engine" class="abc-img"></a>
                <a href="range-rover.html"><p>RangeRover engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/jaguar.png" alt="jaguar engine" class="abc-img"></a>
                <a href="contact.php"></a><p>jaguar engines</p></a>
            </div>

            <div class="abc">
                <a href="contact.php"><img src="img/iszu.png" alt="isuzu engine"  class="abc-img"></a>
                <a href="contact.php"></a><p>Isuzu engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/citron.png" alt="citron engine" class="abc-img"></a>
                <a href="contact.php"></a><p>citroen engines</p></a>
                </div>
            <div class="abc">
                <a href="contact.php"><img src="img/mini.png" alt="mini engine" class="abc-img"></a>
                <a href="contact.php"></a><p>mini engines</p></a>
                </div>
            <div class="abc">
                <a href="contact.php"><img src="img/mitsobishi.png" alt="mitsobishi engine" class="abc-img"></a>
                <a href="contact.php"></a><p>mitshobishi engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/nissan.png" alt="nissan engine" class="abc-img"></a>
                <a href="contact.php"></a><p>nissan  engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/mercedes-amg.png" alt="jaguar engine" class="abc-img"></a>
                <a href="contact.php"></a><p>jaguar engines</p></a>
            </div>

            <div class="abc">
                <a href="#contact.php"><img src="img/honda.png" alt="honda engine" class="abc-img"></a>
                <a href="contact.php"></a><p>honda engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/renault.png" alt="renault engine" class="abc-img"></a>
                <a href="contact.php"></a><p>Renault engines</p></a>
                </div>
            <div class="abc">
                <a href="contact.php"><img src="img/volkhall.png" alt="volkhall engine" class="abc-img"></a>
                <a href="contact.php"></a><p>volkshall engines</p></a>
                </div>
            <div class="abc">
                <a href="contact.php"><img src="img/volvo.png" alt="volvo engine" class="abc-img"></a>
                <a href="contact.php"></a><p>Volvo engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/inveco.png" alt="inveco engine" class="abc-img"></a>
                <a href="contact.php"></a><p>iveco engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/walksvagon.png" alt="walksvagon engine" class="abc-img"></a>
                <a href="contact.php"></a><p>walksvagon engines</p></a>
            </div>

            <div class="abc">
                <a href="contact.php"><img src="img/toyota.png" alt="toyota engine" class="abc-img"></a>
                <a href="contact.php"></a><p>toyota engines</p></a>
            </div>
            <div class="abc">
                <a href="contact.php"><img src="img/ford.png" alt="ford engine" class="abc-img"></a>
                <a href="contact.php"></a><p>ford engines</p></a>
                </div>
            <div class="abc">
                <a href="contact.php"><img src="img/peugeot.png" alt="peugeot engine" class="abc-img"></a>
                <a href="contact.php"></a><p>peugeot engines</p></a>
                </div>
            <div class="abc">
                <a href="contact.php"><img src="img/lexus.png" alt="lexus engine" class="abc-img"></a>
                <a href="contact.php"></a><p>lexus engines</p></a>
            </div>
            
        </div>

        <!-- car make ends here -->

       <!-- top selling brands -->
       <h1 class="text-center">TOP SELLING <span class="span">REPLACEMENT </span>ENGINES</h1><br>
       <div class="display">
           <div class="top-selling">
               <a href="contact.php"><img src="img/BMW X5.jpg" alt="bmw x5" width="200" height="200"></a>
           </div>
           <div class="top-selling">
              <a href="contact.php"> <img src="img/BMW X6.jpg" alt="bmw x6" width="200" height="200"></a>
           </div>
           <div class="top-selling">
              <a href="contact.php"> <img src="img/BMW 320d.jpg" alt="bmw 320D" width="200" height="200"></a>
           </div>
           <div class="top-selling">
               <a href="contact.php"><img src="img/BMW 530d.jpg" alt="bmw 530D" width="200" height="200"></a>
           </div>
           
           <div class="top-selling">
               <a href="contact.php"><img src="img/R-R 2.7.jpg" alt="R-R 2.7" width="200" height="200"></a>
           </div>
           <div class="top-selling">
              <a href="contact.php"> <img src="img/R-R 3.0.jpg" alt="r-r 3.0" width="200" height="200"></a>
           </div>
           <div class="top-selling">
              <a href="contact.php"> <img src="img/R-R 3.6.jpg" alt="r-r 3.6" width="200" height="200"></a>
           </div>
           <div class="top-selling">
               <a href="contact.php"><img src="img/Audi.jpg" alt="Audi" width="200" height="200"></a>
           </div>
           
       </div>

       <!-- top selling ends here -->

       <!-- working progress start -->
       <h1 class="text-center">OUR WORKING <span class="span">PROGRESS </span></h1><br>
       <div>
           <img src="img/auto-sid.jpg" alt="working progress" width="100%">
       </div>

       <!--=========Recon Engine Section==================-->
       <div class="container-recon">
            <div class="row">
                <h1 class="text-center">Engine and GearBox: The Real Survivor of your Luxury Vehicle</h1>
                    <p2 class="p-text">
                        GP Auto Spares is a renowned engine service provider in UK that has been working since decades. It is a reputable one stop shop for all those worthy clients who are searching for reliable engine replacement and repair service for their vehicles. We deal in all kind of used, <a href="reconditioned-engines.php">reconditioned</a>, repaired and new engines and our services do not end here GP Auto Spares  because we know that only a provision of recon or re manufactured engine is not enough to make your vehicle run on the road. Besides a top notch quality engine supply, your vehicle requires quality fixing and maintenance services as well. <br><br>
                        It is a famous saying that ‘too many hands spoil the broth’ and we truly believe in this proverb that is why we have trained a team of highly professional engine replacers who have unmatched expertise in all technicalities related to engine fixing and maintenance. Since years, our team has been striving to put all their potentials in providing high profile services to the Range Rover, BMW and Mercedes owners. Our technicians are trained according to different dimensions of engine services. 
                        Before we move towards defining our profound services, we will like to show our target audience that what is the basic difference between a reconditioned and used engine?
                    </p2>
                
                <h1 class="text-center">Reconditioned Engines</h1>
                    <p2 class="p-text">
                        vice we provide to recondition any engine is as follows;
                        Replacement of ring pistons
                        Repairing and replacing timing chains that will enhance engine performance
                        All other engine parts like valves-springs, lifters are fixed to turn them to their original condition.
                        Increase the life span of your luxury vehicle by fixing these <a href="reconditioned-engines.php">recon engines</a> at competitive rates that are easy to afford.
                        
                    
                    </p2>

              
            
       </div>
    </div>
    <h1 class="text-center">OUR <span class="span">WORKSHOP </span>GALERRY</h1><br><br>

    <div class="display-gallery">
        <div class="img">
           <a href="img/rr-2.jpg"> <img src="img/rr-2.jpg" alt="range rover 2" width="300" height="300"></a>
        </div>
        <div class="img">
           <a href="img/rr-3.jpg"> <img src="img/rr-3.jpg" alt="range rover 2"width="300" height="300"></a>
        </div>
        <div class="img">
           <a href="img/rr-6.jpg"> <img src="img/rr-6.jpg" alt="range rover 2"width="300" height="300"></a>
        </div>

        <div class="img">
           <a href="img/img-30.jpg"> <img src="img/img-30.jpg" alt="toyota 2" width="300" height="300"></a>
        </div>
        <div class="img">
           <a href="img/img-11.jpg"> <img src="img/img-11.jpg" alt="renault 2"width="300" height="300"></a><br>
 
        </div>
        <div class="img">
           <a href="img/ford.jpg"> <img src="img/ford.jpg" alt="ford 2"width="300" height="300"></a>
        </div>
        
    </div>
    <center><a href="gallery.html" class="btn">view our galery</a></center>
    <!-- display gallery ends here -->

    <!-- footer starts here -->
    <div class="footer-main">
        <div class="footer">
            <img src="img/logo.png" alt="logo" width="100" height="100">
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
             <a href="used-engines.php"> Used Engines</a>
         </li>
            <li>
             <a href="reconditioned-engines.php">Reconditioned Engines</a>
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
  

    <script src="./js/index.js"></script>
</body>
</html>