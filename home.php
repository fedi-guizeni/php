





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <link
     rel="stylesheet"
     href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
     integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
     crossorigin="anonymous"
  />
    <title>Robotique club </title>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
          <a href="#home" id="navbar__logo"><img src="images/logo.png" alt="">
          </a>
          
          <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <ul class="navbar__menu">
            <li class="navbar__item">
              <a href="#home" class="navbar__links" id="home-page">Home</a>
            </li>
            <li class="navbar__item">
              <a href="#about" class="navbar__links" id="about-page">offres</a>
            </li>
            <li class="navbar__item">
              <a href="#services" class="navbar__links" id="services-page"
                >Services</a
              >
            </li>
            <li class="navbar__item">
              <a href="#contact" class="navbar__links" id="about-page">Contact</a>
            </li>
            <li class="navbar__btn">
              <a href="#sign-up" class="button" id="signup-btn">
                Se connecter
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </nav>
 
    <!-- login section -->
     <div class="modal" id="email-modal">
       <div class="modal-content">
         <span class="close-btn">&times;</span>
         <div class="modal-content-left">
           <img src="images/logiin.svg" alt="" id="modal-img">
           
         </div>
         <div class="modal-content-right">
           <form action="welcome.php" method="POST" class="modal-form" id="form">
 
          
             <div class="form-validation">
               <input type="email" class="modal-input" id="emaile" name="email" placeholder="Email">
               <p></p>
             </div>
             <div class="form-validation">
               <input type="password" class="modal-input" id="password" name="password" placeholder="Mot de passe">
               <p></p>
             </div>
        
             <input type="submit" class="modal-input-btn" value="login" name="submit">
             <span class="modal-input-login">tu a deja un compte ?  <a href="sign-in.php">cliquez ici</a></span>
           </form>
          </div>
      </div>
      
     </div>

<script>
const modal =document.getElementById('email-modal');
const openbtn =document.getElementById('signup-btn');
const closebtn =document.querySelector('.close-btn'); 

//click events
openbtn.addEventListener('click', () => {
  modal.style.display='block';
});

closebtn.addEventListener('click', ()=> {
  modal.style.display='none';
});

window.addEventListener('click',(e)=>{
  if (e.target === modal) {
    modal.style.display = 'none';
  }
})
</script>


   <!-- home section -->

    <div class="hero" id="home">
        <div class="hero__container">
          
            <h1 class="hero__heading"> <span>La robotique pour tous,</span></h1>
          <p class="hero__description">Club de robotique pour les jeunes</p>
          <button class="main__btn"><a href="explore.html">Explore</a></button>
        
          
           <div class="hero__img--container">
          
        </div>
        </div>
       
      </div>
      <!-- offre section -->
      <div class="main" id="about">
        <div class="main__container">
          <div class="main__img__container">
            <div class="main__img--card"><img src="images/kids2.jpg" alt=""></div>
          </div>
          <div class="main__content">
            <h1>CLUB DE SCIENCE ROBOTIQUE</h1>
            <h2>Pour les fans de robots !</h2>
            <p>  Bonne nouvelle, il sera proposé à la réservation pour la saison 2021-2022 ! </p>
            <button class="main__btn"> <a href="index.php">  pré-inscrire</a></button>
          </div>
        </div>
      </div>
      <!-- services section -->
      <div class="services" id="services">
        <h1>Nos activités</h1>
        <div class="services__wrapper">
          <div class="services__card">
            <h2>Un soutien psychologique</h2>
            <img src="images/act1.jpg" alt="">
            <div class="services__btn"><button> <a href="certification.html">Plus de détails</a> </button></div>
          </div>
          <div class="services__card">
            <h2>Des activités pratiques  sur le tas</h2>
            <img src="images/act2.jpg" alt="">
            <div class="services__btn"><button>Plus de détails</button></div>
          </div>
          <div class="services__card">
            <h2>Certifications</h2>
            <img src="images/act3.jpg" alt="">
            
            <div class="services__btn"><button>Plus de détails</button></div>
          </div>
          <div class="services__card">
           <h2>Intelligence artificial</h2>
            
            <img src="images/act4.jpg" alt="">
            <div class="services__btn"><button>Plus de détails</button></div>
          </div>
          </div>
        </div>

      </div>
      <!-- email section-->
      <div class="email">
        <div class="email__content">
          <h1>Entrez votre email </h1>
          <p> Recevez les dernières nouvelles, offres et promotions

          </p>
          <form action="#">
            <div class="form__wrap">
              <label for="email">
                <input type="email" placeholder="entrez votre email" id="email">
              </label>
              <button class="buttonn" type="submit">enovoyer</button>
          

            </div>

          </form>

        </div>
      </div>
      <!-- contact section -->
      <div class="container" id="contact">
        
        <div class="form">

            
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
          <p class="text">
            N'hésitez pas de nous contacter pour toute information, nous sommes toujours à l'écoute.
            Robotique Club, des professionnels à votre service.
          </p>
          <div class="info">
            <div class="information">
              <img src="images/location.png" class="icon" alt="" />
              <p>10 rue de bosnie ben arous </p>
            </div>
            <div class="information">
              <img src="images/email.png" class="icon" alt="" />
              <p>robotiqueclub@gmail.com</p>
            </div>
            <div class="information">
              <img src="images/phone.png" class="icon" alt="" />
              <p>+216-75 153 139</p>
            </div>
           </div>
           <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
            </div>
            

            <div class="contact-form" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.311463280226!2d10.17265456528955!3d36.787082029951335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3408c0a06d69%3A0x3b8c5efde9487a09!2sESSECT%2C%20Ave%20Ali%20Trad%2C%20Tunis!5e0!3m2!1sfr!2stn!4v1616095840226!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
     </div>


      
     <!-- Footer Section -->
  <div class="footer__container">
    <div class="footer__links">
      <div class="footer__link--wrapper">
        <div class="footer__link--items">
          <h2>About Us</h2>
          <a href="/sign__up">comment ca marche </a> <a href="/">Témoignages</a>
          <a href="/">Careers</a> <a href="/">Terms of Service</a>
        </div>
        <div class="footer__link--items">
          <h2>Contact Us</h2>
          <a href="/">Contact</a> <a href="/">Support</a>
          <a href="/">Destinations</a>
        </div>
      </div>
      <div class="footer__link--wrapper">
        <div class="footer__link--items">
          <h2>Videos</h2>
          <a href="/">nos Video</a> <a href="/">Ambassadeurs</a>
          <a href="/">Agence</a>
        </div>
        <div class="footer__link--items">
          <h2>Social Media</h2>
            <a href="/">  <i class="fab fa-instagram"></i>    Instagram</a>
            <a href="/"><i class="fab fa-facebook"></i >Facebook</a>
            <a href="/"><i class="fab fa-youtube  "></i>  Youtube</a>
            <a href="/"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
      </div>
    </div>
    <section class="social__media">
      <div class="social__media--wrap">
        <div class="footer__logo">
          <a href="/" id="footer__logo">FEDI</a>
        </div>
        <p class="website__rights">© FEDI 2021. All rights reserved</p>
        <div class="social__icons">
          <a href="/" class="social__icon--link" target="_blank"
            ><i class="fab fa-facebook"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-youtube"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-linkedin"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-twitter"></i
          ></a>
        </div>
      </div>
    </section>
  </div>

<!--    <script src="app.js"></script> -->
</body>
</html>