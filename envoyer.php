<?php
 $SERVER= "localhost";
$username = "root";
$password="";
$bdname = "ds2";

$conn = mysqli_connect ($SERVER , $username , $password , $bdname );
if (mysqli_connect_errno($conn)) {
    echo "fail";
}else{
    echo "succes" ;
    
}
echo " <br>" ;

 if(isset($_POST['submit']))
{	 
	 $nom = $_POST['nom'];
	 	 $email = $_POST['email'];
	 $num = $_POST['phone'] ;
	 $tel = (int)$num;

	 $sexe = $_POST['sexe'];
	 $sex = (string)$sexe;
	 $date = $_POST['date'];	 
	 $hor = $_POST['horaire'];	 
	 $msg = $_POST['msg'];	 


	$em= "select * from inscri where email = '$email'";
	$res = mysqli_query($conn,$em);
	if(mysqli_num_rows($res )> 0){
		$msg= "email deja utulise";

	} else {  
	
	  $sql = "INSERT INTO inscri (nom,email,tel,sexe,daten,hor,msg)
	  VALUES ( '$nom', '$email', '$tel', '$sexe', '$date', '$hor', '$msg')";
	 if (mysqli_query($conn, $sql)) {
		$msg= "Nouvel enregistrement créé !";
	 } else {
		 
		$msg= "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
} 
}		
?> 
