<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title></title>
    <meta name="description" content="" />

    <link rel="stylesheet" href="./home.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Yanone Kaffeesatz:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Monoton:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Alegreya Sans:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work Sans:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Passion One:wght@400&display=swap"
    />
    
  </head>
  <body>
    <?php 
    session_start();
    $username=$_SESSION["Full_Name"];
    ?>
    <div class="slide-169-1" data-animate-on-scroll>
      <div class="simplify-customer-loyalty">SIMPLIFY CUSTOMER LOYALTY</div>
      <div class="and-online-ordering">AND ONLINE ORDERING.</div>
      <h1><?php echo $username; ?></h1><img
        class="taxi-dragon-transparent-by-ico-icon"
        alt=""
        src="public/Taxi_dragon_transparent_by_Icons8.gif"
      />
      <div class="lunch-boxdiv">LUNCH BOX</div>
      <img
        class="lunchbox-1-icon"
        alt=""
        src="public/lunchbox-1@2x.png"
      /><button class="basicoutline-buttonlargefocu">
        <div class="basicoutline-large-base">
          <div class="content-div">
            <b class="button"> <a href="login.php">LOGIN</a></b
            ><img class="icon-large" alt="" src="public/icon--large.svg" />
          </div>
        </div>
      </button>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">MENUS</a>
        <a href="buy.php">BUY</a>
        <a href="sell.php">SELL</a>
        <a href="#">CONTACT</a>
        <a href="#">ABOUT</a>
      </div>
      <button class="menu-1-button" onclick="openNav()"></button><b class="maximize-ordering-potential-an"
        >Maximize ordering potential and make it easy for customers to get
        exactly what they want over and over again.
      </b>
      
  </div>
     

    <section>
      <div class="slide-169-2" data-animate-on-scroll>
        
        <div class="slideshow-container">

        <div class="mySlides fade">
          <!-- <img src="public/cristianopinto2lwgq02dgl8unsplash-1@2x.png"   width="1500" height="300"
              />
          -->
          <img src="public/ella-olsson-mmnKI8kMxpc-unsplash.jpg"  width="1550" height="650" >
          
        </div>
        
        <div class="mySlides fade">
          
          <img src="public/lily-banse--YHSwy6uqvk-unsplash.jpg"  width="1550" height="650" >
          
        </div>
        
        <div class="mySlides fade">
          
          <img src="public/cristianopinto2lwgq02dgl8unsplash-1@2x.png"  width="1550" height="650" >
          
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div></div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
  
      </div>
    </section>
    <section>
      <div class="frame-div" data-animate-on-scroll>
        <div class="line-div"></div>
        <div class="malcom-forbes-div">MALCOM FORBES</div>
        <div class="food-may-be-essential-as-fuel">
          <p class="food-may-be">“ FOOD MAY BE ESSENTIAL AS FUEL</p>
          <p class="food-may-be">FOR THE BODY,</p>
          <p class="food-may-be">BUT GOOD FOOD IS FUEL</p>
          <p class="for-the-soul">FOR THE SOUL “</p>
        </div>
        <div class="online-ordering-div">ONLINE ORDERING</div>
        <img class="ellipse-icon" alt="" src="public/ellipse-2.svg" /><img
          class="vector-icon"
          alt=""
          src="public/vector-1.svg"
        />
        <div class="order-aggregation-div">ORDER AGGREGATION</div>
        <img class="ellipse-icon1" alt="" src="public/ellipse-2.svg" /><img
          class="vector-icon1"
          alt=""
          src="public/vector-11.svg"
        /><img
          class="screenshot-99-removebg-previ-icon"
          alt=""
          src="public/screenshot--99-removebgpreview-1@2x.png"
        />
        <div class="we-integrate-with-every-major">
          <p class="food-may-be">
            <span class="we-integrate-with">WE INTEGRATE WITH </span
            ><span>EVERY MAJOR</span>
          </p>
          <p class="point-of-sale-to-create-an">
            <span>POINT OF SALE</span><span> TO CREATE AN</span>
          </p>
          <p class="food-may-be"><span>EFFORTLESS ORDERING SYSTEM TO</span></p>
          <p class="for-the-soul">
            <span>GROW YOUR ONLINE </span
            ><span class="revenue-span">REVENUE</span>
          </p>
        </div>
        <div class="powerful-and-simple-online-ord">
          POWERFUL AND SIMPLE ONLINE ORDERING
        </div>
        <div class="lunch-box-div">LUNCH BOX</div>
        <div class="line-div1"></div>
        <div class="about-us-div">
          <p class="food-may-be"><span>ABOUT US</span></p>
          <p class="blank-line-p"><span>&nbsp;</span></p>
        </div>
        <div class="line-div2"></div>
        <div class="learn-more-div">
          <p class="food-may-be"><span>LEARN MORE</span></p>
          <p class="blank-line-p"><span>&nbsp;</span></p>
        </div>
        <div class="security-privacy-terms">
          <p class="food-may-be">SECURITY</p>
          <p class="food-may-be">&nbsp;</p>
          <p class="food-may-be">PRIVACY</p>
          <p class="food-may-be">&nbsp;</p>
          <p class="for-the-soul">TERMS</p>
        </div>
        <div class="blog-work-with-us-contact-us">
          <p class="food-may-be">BLOG</p>
          <p class="food-may-be">&nbsp;</p>
          <p class="food-may-be">WORK WITH US</p>
          <p class="food-may-be">&nbsp;</p>
          <p class="for-the-soul">CONTACT US</p>
        </div>
        <div class="line-div3"></div>
        <div class="social-links-div">SOCIAL LINKS</div>
        <a href="https://www.facebook.com/">
        <img class="facebook-icon" alt="" src="public/facebook@2x.png" /></a><a href="https://www.instagram.com/"><img
          class="instagram-icon"
          alt=""
          src="public/instagram@2x.png"
        /></a>
        <a href="https://www.twitter.com/">
          <img class="twitter-icon" alt="" src="public/twitter@2x.png" /></a>
          <a href="https://web.whatsapp.com/">
            <img
          class="whatsapp-icon"
          alt=""
          src="public/whatsapp@2x.png"
        /></a><img class="copyright-1-1" alt="" src="public/copyright-1-1@2x.png" /><b
          class="all-rights-reserved"
          >2022 All rights reserved</b
        ><div class="marquee-content"> 
          <div class="marquee-item"><img
          class="ss6-removebg-preview-icon"
          alt=""
          src="public/ss6removebgpreview@2x.png"
        /></div> <div class="marquee-item"><img
          class="ss5-removebg-preview-icon"
          alt=""
          src="public/ss5removebgpreview@2x.png"
        /></div><div class="marquee-item"><img
          class="ss7-removebg-preview-icon"
          alt=""
          src="public/ss7removebgpreview@2x.png"
        /></div><div class="marquee-item"><img
          class="ss2-removebg-preview-icon"
          alt=""
          src="public/ss2removebgpreview@2x.png"
        /></div><div class="marquee-item"><img
          class="ss3-removebg-preview-icon"
          alt=""
          src="public/ss3removebgpreview@2x.png"
        /></div><div class="marquee-item"><img
          class="ss1-removebg-preview-icon"
          alt=""
          src="public/ss1removebgpreview@2x.png"
        /></div></div><img
          class="abstract-easy-money-transparen-icon"
          alt=""
          src="public/Abstract_easy_money_transparent_by_Icons8.gif"
        />
      </div>
    </section>
    <script>
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0.15,
        }
      );
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
      </script>
  </body>
</html>
