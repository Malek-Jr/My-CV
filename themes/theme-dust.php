<!DOCTYPE html>
<html lang="en">
<head>
<style>
        #message {
            position: fixed;
            top: 20px;
            left: 47%;
            transform: translateX(-50%);
            padding: 15px 30px;
            background-color: rgba(0, 0, 0, 0) ;
            color: rgb(250, 5, 60);
            font-size: 22px;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0);
            display: none;
            opacity: 1;
            transition: opacity 0.5s ease-out;
            z-index: 9999;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Willy Wonkas - Personal Portfolio Website Template" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="willy wonka" />
    <title>My CV</title>
  <!--favicon-img--> 
   <link rel="icon" type="image/png" href="images/favicon.png">
   <!--favicon-img-->
   <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>
<?php
if (isset($_GET['message']) && $_GET['message'] == 10) {
    echo '
    <div id="message">Merci de nos contacter !</div>
    <script>
        document.getElementById("message").style.display = "block";
        setTimeout(() => {
            document.getElementById("message").style.opacity = "0";
        }, 4000);
        setTimeout(() => {
            document.getElementById("message").remove();
        }, 4500);
        setTimeout(() => {
            const url = new URL(window.location);
            url.searchParams.delete("message");
            window.history.replaceState(null, null, url);
        }, 1000); 
    </script>
    ';
}
?>
    <!--contains all the div-->
    <div id="all">
    <!--mouse  follower-->
        <div class="cursor"></div>
    <!--mouse  follower-->
    <!--loader-->
        <div id="loader">
            <span class="color">Malek</span>Romdhane 
        </div>
    <!--loader-end-->
    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
    <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
           
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
               
                <a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
            </div>
        </div>
        <!--Navigator-Fullscreen END-->
          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
         
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="firstline"><span class="color">Malek </span>Romdhane</div>
                <div class="secondline">
                I'm a
            <span class="txt-rotate color" data-period="1200"data-rotate='[ " Student.", " Beginner Developer." ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="Mailto:#"><img src="images/mail.png" alt="email-pic" class="contactpic"></a><!--Your email Id write in place of "#"-->
                <a href="Tel:#"><img src="images/call.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->
                    </div>    
            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/man.jpg" alt="logo">
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->
        <!--about-->
        <div id="about">
           
            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    About <span class="color">Me</span>
                    <span class ="header-caption">Get to Know <span class="color"> me.</span></span>
                </div>
                <div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
               <span class="about-first-line">
                    I'm creative 
                    <span class="color">student</span>
                     based in Tunisia , Nabeul </span>
                     <br>
               <span class="about-second-line"> With 2 years of experience as an IT student, I have acquired the minimum skills and knowledge necessary to make small web sites. I enjoy every step while working.</span>
               <div class="cv">
                
            </div>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/about.jpg" alt="Your Image">
            </div>
            </div>
    
            </div>
            <!--services start-->
            <div id="services">
               
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">My</span> Cv
                    </div>
            <!--services header end-->
            <!--services content-->
                    <div class="services-content">
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/coding.png" alt="service-one">
                               </div>
                               <div class="service-description">
                                <h2>Experience</h2>
                                <p>My experience includes an internship that lasted one month at Société La Paix, where I developed a complete web application to manage the users of the company.</p>
                               </div>
                           </div>
                           <div class="service-two service wow">
                               <div class="service-img">
                               <img src="images/bulb.png" alt="service-two">
                               </div>
                               <div class="service-description">
                                <h2>Diploma</h2>
                                <p> IT degree-Iset Nabeul(2023,2026)-specializing in computer system development.</p>
                               </div>
                           </div>
                           <div class="service-three service wow">
                            <div class="service-img">
                               <img src="images/icon-name.png" alt="service-three">
                            </div>
                            <div class="service-description">
                                <h2>Hobbies</h2>
                                <p>learning new languages and developing simple websites.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!--services content end-->
            <!--services end-->
            <div id="skills">
                <div class="skills-header">
                     My <span class="color"> Skills</span>
                </div>
                <div class="skills-content " style="text-align: center;">
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        HTML/CSS
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="html-progress wow">95%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                      Javascript
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="js-progress wow">70%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Linux
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="adobe-progress wow">55%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        PHP
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="php-progress wow">70%</div>
                    </div>
                    </div>
                    
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Mysql
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="jquery-progress wow">90%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Python
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="seo-progress wow">70%</div>
                    </div>
                    </div>
                </div>
            </div>
    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
             <div class="footer-text">
                 
             </div>
            </div>
    <!--copyright-section-->
        </div>
        <!--about end-->
        <!--portfolio-->
        <div id="portfolio">
           
            <div class="portfolio-header"> <span class="color"> My </span> Portfolio
            <span class ="header-caption"> Some Of My <span class="color"> Works</span></span></div>
             <div id="portfolio-content">
                 <div class="portfolio portfolio-first">
                     <div class="portfolio-image">
                        <img src="images/portfolio-first.jpg" alt="portfolio-first">
                     </div>
                     <div class="portfolio-text">
                         <h2>Web Application</h2>
                         <p>This web application manages the users of the company where I completed my introductory internship, instead of the user management being done with Excel files.</p>
                         
                     </div>
                 </div>
                 <div class="portfolio portfolio-second">
                    <div class="portfolio-image">
                        <img src="images/sisi3.png" alt="portfolio-second">
                    </div>
                    <div class="portfolio-text">
                        
                        <p>You can see all the list of users and their public informations in this data table.</p>
                       
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/sisi4.png" alt="portfolio-third">
                    </div>
                    <div class="portfolio-text">
                        
                        <p>You can add new users,show their full informations ,modify them or even delete them and many other functions.</p>
                       
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/soso.png" alt="portfolio-fourth">
                    </div>
                    <div class="portfolio-text">
                        <h2>Questify website</h2>
                        <p>simple front-end website for doing different surveys that works like a template  </p>
                       
                    </div>
                </div>
                 </div>
                
                    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
               
               </div>
       <!--copyright-section-->
             </div>
        <!--portfolio end-->
        <!--blog-->
       
        <!--contact-->
        <div id="contact">
            <div class="contact-header">Contact <span class="color">Me</span>
              <div class="contact-header-caption"> <span class="color">Get</span> In Touch.</div>
            </div>
            <div class="contact-content">
              <!-- Contact form -->
              <div class="contact-form">
                <div class="form-header">Message Me</div>
                <!-- Modifier l'action pour pointer vers un script PHP -->
                <form id="myForm" action="../contact.php" method="POST">
                  <div class="input-line">
                    <input id="name" name="name" type="text" placeholder="Name" class="input-name" required>
                    <input id="email" name="email" type="email" placeholder="Email" class="input-name" required>
                  </div>
                  <textarea id="body" name="message" class="input-textarea" placeholder="Message" required></textarea>
                  <button type="submit" id="submit" value="send">Submit</button>
                </form>
              </div>
              
              <!-- Contact information -->
              <div class="contact-info">
                <div class="contact-info-header">Contact Info</div>
                <div class="contact-info-content">
                  <div class="contect-info-content-line">
                    <img src="./images/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                      <h6>Name</h6>
                      <p>Malek Romdhane</p>
                    </div>
                  </div>
                  <div class="contect-info-content-line">
                    <img src="./images/icon-location.png" class="icon" alt="location-icon">
                    <div class="contact-info-icon-text">
                      <h6>Location</h6>
                      <p>Tunisia, Nabeul</p>
                    </div>
                  </div>
                  <div class="contect-info-content-line">
                    <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                    <div class="contact-info-icon-text">
                      <h6>Call</h6>
                      <p>+21699855685</p>
                    </div>
                  </div>
                  <div class="contect-info-content-line">
                    <img src="./images/icon-email.png" class="icon" alt="email-icon">
                    <div class="contact-info-icon-text">
                      <h6>Email</h6>
                      <p>romdhanemalek59@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            <!--Contact information end-->
           </div>
        </div>
                    <!--copyright-section You Can Remove After Downloading-->
                    <div class="footer">
                       
                       </div>
               <!--copyright-section-->
     </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>
    <!--particles script-->
    <script>
 particlesJS("particles", {"particles":{"number":{"value":120,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":true,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":true,"speed":0,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.24463576890600452,"width":1.2626362266116362},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>
</body>
</html>