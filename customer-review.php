<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer reviews !& Used Engines</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/mediaquerry.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

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
    <!-- review form starts here -->
    <script src="https://use.fontawesome.com/a6f0361695.js"></script>

    <h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
    <h1 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h1>
    
    <?php include('form_process1.php'); ?>
    <form id="feedback" action="customer-review.php" method="POST">
    <center><h1><div class="success"> <?= $success ?> </div></h1></center>
      <div class="pinfo">Your personal info</div>
      
    <div class="form-group">
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon">Name<i class="fa fa-user"></i></span>
      <input  name="name"class="form-control"  type="text">
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon">email<i class="fa fa-envelope"></i></span>
        <input name="email" type="email" class="form-control">
         </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon">country<i class="fa fa-flag"></i></span>
        <input name="country" type="text" class="form-control">
         </div>
      </div>
    </div>
    
    
     <div class="pinfo">Rate our overall services.</div>
      
    
    <div class="form-group">
      <div class="col-md-4 inputGroupContainer"">
      <div class="input-group">
      <span class="input-group-addon"> rating<i class="fa fa-heart"></i></span>
       <select class="form-control" id="rate" name="star_rating"">
          <option value="1star">1</option>
          <option value="2stars">2</option>
          <option value="3stars">3</option>
          <option value="4stars">4</option>
          <option value="5stars">5</option>
        </select>
        </div>
      </div>
    </div>
    
     <div class="pinfo">Write your feedback.</div>
      
    
    <div class="form-group">
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon">Review<i class="fa fa-pencil"></i></span>
      <textarea class="form-control" id="review" rows="3"></textarea>
     
        </div>
      </div>
    </div>
    
    <button  type="submit" class="btn btn-primary">Submit</button>
    
</form>


    <center><h1 id="display"> New Reviews</h1></center>


    <!--  review form ends here -->
    <!-- review section -->
    <div class="testimonial">
      <CENTER><h2>WHAT OUR CLIENTS SAY</h2></CENTER>
      <div class="small-container">
          <div class="row">
              <div class="col-3">
              <img src="img/1.png">
                      <h3 class="p-text">maria barbetti</h3>
                      <h3 class="p-text">From zambia</h3>
                  <i class="fa fa-quote-left"></i>
                  <p2 class="p-text">Engines and Gearboxes are an extremely reliable and professional company. I experienced the highest level of customer service.<br> If I ever have any problems with my car in the future I will be sure to come back. Massive thanks to Engines and Gearboxes.</p2>
                      <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      
              </div>
              <div class="col-3">
              <img src="img/user1.png">
                      <h3 class="p-text">jose cordova</h3>
                      <h3 class="p-text">From south Africa</h3>
                  <i class="fa fa-quote-left"></i>
                  <p2 class="p-text">Thanks for the excellent and competitively priced repair on my son's car!</p2>
                      <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half" aria-hidden="true"></i>
                      </div>
                      
              </div>
              <div class="col-3">
              <img src="img/user3.png">
                      <h3 class="p-text">sara jane</h3>
                      <h3 class="p-text">from usa</h3>
                  <i class="fa fa-quote-left"></i>
                  <p2 class="p-text">Brilliant service turned it around in 7 days . Complete engine replaced. Very helpful and friendly. Would highly recommend</p2>
                      <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          
                      </div>
                      
              </div>
          </div>
      </div>
  </div>
    <div class="testimonial">
      <div class="small-container">
          <div class="row">
              <div class="col-3">
              <img src="img/1.jpg">
                      <h3 class="p-text">John stephens</h3>
                      <h3 class="p-text">from uk</h3>
                  <i class="fa fa-quote-left"></i>
                  <p2 class="p-text">At last I got a perfect place to deal with the reconditioned engine work. These guys are very sound in their techniques to supply and fit reconditioned, rebuilt or repaired engines. I got served my<br> BMW 320 through them and liked them because they stood by their words and did exactly what they promised. They delivered my <br>vehicle on the said time without any delay or extra charges. Impressive and encouraging. Thanks Prime Auto Spares.</p2>
                      <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half" aria-hidden="true"></i>
                      </div>
                      
              </div>
              <div class="col-3">
              <img src="img/2.JPG">
                      <h3 class="p-text">James Miletner</h3>
                      <h3 class="p-text">from Tanzania</h3>
                  <i class="fa fa-quote-left"></i>
                  <p2 class="p-text">Awesome guys keep up the great work im so happy!</p2>
                      <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          
                      </div>
                      
              </div>
               <div class="col-3">
               <img src="img/3.JPG">
                      <h3 class="p-text">keyla Alicia</h3>
                      <h3 class="p-text">from Angola</h3>
                  <i class="fa fa-quote-left"></i>
                  <p2 class="p-text">i give all the credit to prime auto spares,good customer service and epert.Trained personelles and they know how to turn trash to brand!</p2>
                      <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star- o" aria-hidden="true"></i>
                      </div>
                      
                </div>
          </div>
      </div>
  </div>
    

       <!--=========Recon Engine Section==================-->

    <h1 class="text-center">OUR <span class="span">WORKSHOP </span>GALERRY</h1><br><br>

    <div class="display-gallery">
        <div class="img">
           <a href="img/rr-2.jpg"> <img src="img/rr-2.jpg" alt="range rover 2" ></a>
        </div>
        <div class="img">
           <a href="img/rr-3.jpg"> <img src="img/rr-3.jpg" alt="range rover 2"></a>
        </div>
        <div class="img">
           <a href="img/rr-6.jpg"> <img src="img/rr-6.jpg" alt="range rover 2"></a>
        </div>
        
    </div>
       
    <div class="display-gallery">
        <div class="img">
           <a href="img/img-30.jpg"> <img src="img/img-30.jpg" alt="toyota 2" ></a>
        </div>
        <div class="img">
           <a href="img/img-11.jpg"> <img src="img/img-11.jpg" alt="renault 2"></a><br>

          
        </div>
        <div class="img">
           <a href="img/ford.jpg"> <img src="img/ford.jpg" alt="ford 2"></a>
        </div>
        
    </div><br>
    <!-- display gallery ends here -->
    <center> <a href="gallery.html"class="btn2">View Our Gallery &#8594</a></center><br>

    <!-- footer starts here -->
    <hr>
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
             <a href="reconditioned-engines.php">Recon engines</a>
         </li>
            <li>
             <a href="customer-review.html"> Review</a>
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