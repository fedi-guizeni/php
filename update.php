<?php 


 $SERVER= "localhost";
$username = "root";
$password="";
$bdname = "ds2";

$conn = mysqli_connect ($SERVER , $username , $password , $bdname );
if (mysqli_connect_errno($conn)) {
    echo "fail";
}
echo " <br>" ;

 
	 
$num= (int) $_POST['numclient'];	 
$nom= (string)$_POST['nom'];
$email= $_POST['email'];
$msg= $_POST['msg'];
$tel=  (int)$_POST['tel'];
$sexe= $_POST['sexe'];
$daten= $_POST['daten'];
$hor= $_POST['hor'];

	
	  $sql =" UPDATE inscri SET  nom='$nom' ,email='$email' ,msg='$msg' ,tel = '$tel' , sexe='$sexe',daten = '$daten' , hor ='$hor'
        WHERE inscri.id='$num' LIMIT 1";
      $res = mysqli_query($conn,$sql);
	 if ($res) {
        $message = 'le client  a ete bien modifier';
    }
    else{
    $message = 'echec de la modification du client !!';
	 }
	 mysqli_close($conn);
 
		
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
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
    <h1>resultat de la modification</h1>
</div>

<div class="msg">
<p><?= $message ?></p>

</div>


<?php header('REFRESH:3;URL=admin.php');?> 

</body>
</html>
