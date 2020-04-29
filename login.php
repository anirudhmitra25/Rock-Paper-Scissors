<?php
$salt = 'XyZzy12*_';
$username="";
$userpass="";
$message= FALSE;
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
//$md5 = hash('md5', 'XyZzy12*_php123');

if(isset($_POST['cancel'])){
    header('Location: index.php');

}
if(isset($_POST['who']) && isset($_POST['pass'])){
if(hash('md5',$salt.$_POST['pass'])==$stored_hash){
    header("Location: game.php?name=".urlencode($_POST['who']));
}
elseif($_POST['who']==""||$_POST['pass']==""){
    $message= "Please fill username and password";
}
elseif($_POST['pass']!='php123'){
    $message="Incorrect password";
}
}


?>

<html>
<head>
<?php require_once "bootstrap.php"; ?>
<title>Anirudh Mitra 3267dec7 </title>
</head>
<body>
<h1>Please Login</h1>
<?php 

if($message!==FALSE){
    echo('<p style="color: red;">'.htmlentities($message)."</p>\n");
}

?>
<form method="post">
<label for="name">Username</label>
<input type="text" name="who" id="nam"></input>
<br>
<label for="pass">Password</label>
<input type="text" name="pass" id="id_1723"></input>
<br>
<input type="submit" value="Log In"></input>
<input type="submit" name="cancel" value="Cancel"></input>


</form>
</body>
</html>
