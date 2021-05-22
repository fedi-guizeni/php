<?php 
$conn = new PDO('mysql:host=localhost;dbname=ds2','root','');

if (mysqli_connect_errno($conn)) {
    echo "fail";
}

$sql = $conn->prepare('DELETE
  from inscri where id=:num LIMIT 1');


$sql ->bindValue(':num' , $_GET['numclient'],PDO::PARAM_INT );


 

$excuteIsOK= $sql->execute();

if ($excuteIsOK){
    $message = 'le client  a ete supprimé';
}
else{
$message = 'echec de la suppression du client !!';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suppression</title>

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
         <h1>suppression</h1>
    </div>
   
<div class="msg">
<p> <?= $message ?>

</div>
    
   
 </p>
 <?php header('REFRESH:3;URL=admin.php');?> 

</body>
</html>