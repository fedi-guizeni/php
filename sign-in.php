

<?php
 $SERVER= "localhost";
$username = "root";
$password="";
$bdname = "ds2";

$conn = mysqli_connect ($SERVER , $username , $password , $bdname );
if (mysqli_connect_errno($conn)) {
    echo "fail";
}

$msg ='';
echo " <br>" ;
if(isset($_POST['submit'])) {
  if (!empty ($_POST['nom']) && !empty ($_POST['email']) &&!empty ($_POST['password']) ) {
    
  
	 
	 $nom = $_POST['nom'];
	 	 $email = $_POST['email'];
	 $pass = $_POST['password'] ;
	 	 


	$em= "select * from users where email = '$email'";
	$res = mysqli_query($conn,$em);
	if(mysqli_num_rows($res )> 0){
		$msg=" email déjà utilisé";

	} else {  
	
	  $sql = "INSERT INTO users (nom,email,pass)
	  VALUES ( '$nom', '$email', '$pass')";
	 if (mysqli_query($conn, $sql)) {
		$msg= "Nouvel utilisateur créé !";
         header('REFRESH:3;URL=home.php');
	 } else {
		 
	$msg= "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
} 
} else {
  $msg="tous les champs sont obligatoires";
}
}

	
   
	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign.css">
    <title>Document</title>
</head>
<body>
    

<div class="modal" id="email-modal">
       <div class="modal-content">
         <span class="close-btn">&times;</span>
         <div class="modal-content-left">
       
         </div>
         <div class="modal-content-right">
           <form action="sign-in.php" method="POST" class="modal-form" id="form">

           <h1>

           formulaire d'inscription
           </h1>
           <p><?= $msg ?></p>
           <p id="error"></p>

             <div class="form-validation">
               <input type="text" class="modal-input" id="name" name="nom" placeholder="Nom" autofocus    >
              
             </div>
             <div class="form-validation">
               <input type="email" class="modal-input" id="emaile" name="email" placeholder="Email"  >
               
             </div>
             <div class="form-validation">
               <input type="password" class="modal-input" id="password" name="password" placeholder="Mot de passe"  >
               
             </div>
             <div class="form-validation">
               <input type="password" class="modal-input" id="password-confirm"  placeholder="Mot de passe"   >
               
             </div>
             
             <input type="submit" class="modal-input-btn" value="envoyer" name="submit">
             
           </form>
         </div>
       </div>
     </div>

    
</body>

</html>