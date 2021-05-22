<?php 
session_start();
if( isset($_SESSION ['user'] )) { 
    
   
$conn = new PDO('mysql:host=localhost;dbname=ds2','root','');

if (mysqli_connect_errno($conn)) {
    echo "fail";
}
    


$sql = $conn->prepare('select * from inscri order by nom');




 $excuteIsOK= $sql->execute();


$clients = $sql -> fetchAll();


}else{

    echo"tu n'es pas un admin";

 header('REFRESH:3;URL=home.php');

}
?>

<?php 

if( isset($_SESSION ['user'] )) { 
    
   
$conn = new PDO('mysql:host=localhost;dbname=ds2','root','');

if (mysqli_connect_errno($conn)) {
    echo "fail";
}
    


$sql = $conn->prepare('select * from users order by nom');




 $excuteIsOK= $sql->execute();


$users = $sql -> fetchAll();



}else{

    echo"tu n'es pas un admin";

 header('REFRESH:3;URL=home.php');

}
?>



<?php
if( isset($_SESSION ['user'] )) {
$SERVER= "localhost";
$username = "root";
$password="";
$bdname = "ds2";

$conn = mysqli_connect ($SERVER , $username , $password , $bdname );
if (mysqli_connect_errno($conn)) {
    echo "fail";
}
echo " <br>" ;
$em= "select id from inscri ";
	$res = mysqli_query($conn,$em);

    $row = mysqli_num_rows($res);
    
    

}else{

    echo"out";
}


?>
<?php
if( isset($_SESSION ['user'] )) {
$SERVER= "localhost";
$username = "root";
$password="";
$bdname = "ds2";

$conn = mysqli_connect ($SERVER , $username , $password , $bdname );
if (mysqli_connect_errno($conn)) {
    echo "fail";
}
echo " <br>" ;
$em= "select id from users ";
	$res = mysqli_query($conn,$em);

    $roww = mysqli_num_rows($res);
    
    

}else{

    echo"out";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>admin</title>
</head>


<style>
    *{
        font-family: 'Poppins', sans-serif;
    }
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

    table  {
        border:  4px  solid green ;
        
    }
    tr:hover {background-color: white;}
.supprimer  {
    text-decoration: none;
    color: red;
}
.modifier {
    text-decoration: none;
    color: green;    
}
.btn{
display: flex;
    align-items: center;
  justify-content: center;
 margin-bottom: 3rem;
}
.log {
    font-size: 1.8rem;
  background: #00C9FF;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
  padding: 20px 60px;
  border: none;
  border-radius: 4px;
  margin-top: 2rem;
  cursor: pointer;
  position: relative;
  transition: all 0.35s;
  outline: none;
}

.log a {
    text-decoration: none; 
    color: #131313;
}
.log a:hover {
 
    color: white;
}
    
</style>
<body>

<div class="btn"> <button  class="log" >  <a href="logout.php">  logout</a></button>
  </div>

    <div class="title">
 

    <h1>liste de pre-inscription</h1>

    </div>

   
<table border="1" align="center">
<tr >
<td colspan="9" align="center"> nombre d'incription :   <?= $row ?></td>
</tr>
<tr>
<th>  nom et prenom  </th>
<th>   email </th>
<th> telephone</th>
<th>  sexe </th>
<th>  date de naissance </th>
<th>  horraire </th>
<th>  message </th>
<th > supprimer    </th>
<th> modifier    </th>



</tr>


<?php 
foreach (  $clients as $client ): ?>

<tr>

<th>  
<?= $client ['nom'] ?>  </th> 
<th>   <?= $client ['email'] ?> </th>
<th>    <?= $client ['tel'] ?></th>
<th>  <?= $client ['sexe'] ?>  </th>
<th>  <?= $client ['daten'] ?> </th>
<th>   <?= $client ['hor'] ?> </th>
<th>   <?= $client ['msg'] ?> </th>
<th> <a class="supprimer" href="supprimer.php?numclient=<?=$client['id']?>"> supprimer</a>  </th> 
<th> <a  class="modifier" href="modifier.php?numclient=<?=$client['id']?>"> modifier</a>  </th> 


</tr>

 <?php  endforeach; ?>



</table>
<br><br><br>
<div class="title">
    <h1>liste des utilisateur</h1>

    </div>
<table border="1" align="center">
<tr >
<td colspan="4" align="center"> nombres d'utilisatuer :  <?= $roww ?></td>
</tr>
<tr>

<th>  nom   </th>
<th>  email</th>
<th>   mot de passe</th>
<th>  supprimer</th>





</tr>


<?php 
foreach (  $users as $user ): ?>

<tr>

<th>  
<?= $user ['nom'] ?>  </th> 
<th>   <?= $user ['email'] ?> </th>

<th>  <?= $user ['pass'] ?>  </th>
<th> <a class="supprimer" href="supprimeruser.php?numuser=<?=$user['id']?>"> supprimer</a>  </th> 



</tr>

 <?php  endforeach; ?>



</table>
<br><br><br>
</body>
</html>