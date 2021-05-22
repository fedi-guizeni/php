<?php 
$conn = new PDO('mysql:host=localhost;dbname=ds2','root','');

if (mysqli_connect_errno($conn)) {
    echo "fail";
}else{
    echo "succes" ;
    
}

$sql = $conn->prepare('select * from inscri where id =:num');

$sql ->bindValue(':num' , $_GET['numclient'],PDO::PARAM_INT );

$excuteIsOK= $sql->execute();

$client = $sql-> fetch();

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
     <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>pre-inscription</title>
</head>
<body>
    <div class="container">
        <span class="big-circl"></span>
        <div class="form">

            
            <div class="contact-info">
              <div class="logo">
                <a href="index.html">  <img src="images/logo.png" alt="">   </a> 
              </div>
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
                <span class="circle one"></span>
                <span class="circle two"></span>
                
                 
<form action="update.php" method="POST" autocomplete="off" id="form" onsubmit="return validation ()">
    <h3 class="title">pre-inscription</h3>
    <input type="hidden" name="numclient" value="<?= $client['id'];?>">
    <div id="error-msg"></div>
    <div class="input-container focus">
        <input type="text" name="nom" class="input" id="name" value="<?= $client['nom'];?>">
       
        <label for="">nom et prénom</label>
        <p id=" error"  ></p>
        <span>nom et prénom</span>
    </div>
    <div class="input-container focus">
        <input type="email" name="email" class="input" id="email" value="<?= $client['email'];?>">
        <label for="">Email</label>
        <span>Email</span>
        <p id="error"></p>
    </div>
    <div class="input-container focus ">
        <input type="text" name="tel" class="input" id="tel" value="<?= $client['tel'];?>">
        <label for="">Numero de tel</label>
        <span> Numero de tel</span>
    </div>
    <div class="input-container  ">
    sexe <br>
    <input type="radio" value="masculin" name="sexe">masculin <br>
    <input type="radio" value="feminin" name="sexe">feminin
    </div>
  
    <div class="input-container  focus focus focus ">
        <input type="date" name="daten" class="input "  id="date">
        <label for="">Date de Naissance</label>
        <span> Date de Naissance</span>
    </div>
    <div class="input-container">
        <SELECT name="hor"  id="hor" SIZE="1" class="input" ><OPTION>

        </OPTION> <OPTION value="16h à 18h " >9-11 ans :de 16h à 18h </OPTION><OPTION value="13h30 à 15h30"> 12-15 ans : de 13h30 à 15h30</OPTION></SELECT>
        <label for="horaire"> Les horaires</label>
        <span>Les horaires</span>
    </div>
    <div class="input-container textarea">
        <textarea name="msg" class="input"
        ></textarea>
        <label for="">Message</label>
        <span>Message</span>
    </div>
    <input type="submit" value="modifier" name="submit" class="btn">
</form>

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
          <a href="/" id="footer__logo">zyga</a>
        </div>
        <p class="website__rights">© zyga 2021. All rights reserved</p>
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
    <script src="script.js"></script>
</body>
</html>