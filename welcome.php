
<?php

session_start();


 if ($_SERVER['REQUEST_METHOD']== 'POST') { 



    $SERVER= "localhost";
    $username = "root";
    $password="";
    $bdname = "ds2";
    
    $conn = mysqli_connect ($SERVER , $username , $password , $bdname );
    if (mysqli_connect_errno($conn)) {
        echo "fail";
    }
    echo " <br>" ;
   
  if (!empty ($_POST['email']) && !empty($_POST['password'])) {   
     $email = $_POST['email'];
     $password = $_POST['password'];
    $user =  substr( $email, 0, strpos( $email, '@'));
    
    
  $sql = "select email , pass from users where email ='".$email."'and pass='".$password."'limit 1";

  $result = mysqli_query($conn,$sql);

  

  if (mysqli_num_rows($result)==1){

$_SESSION['user'] = $user;
$msg= 'welcome ' . $_SESSION['user'];

if ( $user == 'admin') {
$_SESSION['user'] ='$user';
   $msg='welcome admin   veuillez patienter' ;
    header('REFRESH:3;URL=admin.php');
}else {  
$msg=  'welcome '.$user . '  veuillez patienter';
    header('REFRESH:5;URL=userhome.php');
}


  }else {
     $msg=" email ou mot de passe incorrect";
      header('REFRESH:3;URL=home.php');
  }
    
    
}else{
    $msg= "tous les champ sont obligatoires vous serez redirigé vers la page d'accueil";
    header('REFRESH:4;URL=home.php');
}

} else {
    $msg= " tu ne peut pas acceder directement a cette page vous serez redirigé vers la page d'accueil ";
    header('REFRESH:4;URL=home.php');
}
 



		
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suppression de users </title>

    <style>
body{
  background-color:   hsl(210, 36%, 96%);
}
   .title {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
    margin: 0 auto;
  
    padding: 30px;

    background: #00C9FF;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
-webkit-background-clip: text;
    -moz-background-clip: text;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;
    }
    .msg {

        display: flex;
        align-items: center;
        justify-content: center;
        color:green ;


    }

    .msg p {
        font-size: 1rem;
    }

    </style>
</head>
<body>
    <div class="title">
         <h1> <?= $msg?></h1>
    </div>
   



</div>
    
   
 


</body>
</html>
