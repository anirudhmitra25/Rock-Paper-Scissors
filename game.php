<?php

if(!$_GET){
    die("Name parameter missing");
}

$names = array("Rock","Paper","Scissors");
$result_3=array("");
$result=FALSE;
//$res_human="";
//$res_computer="";

if(isset($_POST["logout"])){
    header('Location: index.php');
}
if(isset($_POST["human"])){
    $index_human=$_POST["human"];
    if($index_human=='3'){
        $n=0;
        for($c=0;$c<3;$c++) {

            for($h=0;$h<3;$h++) {
            
            $r = check($c, $h);
            
            $result= "Human=$names[$h] Computer=$names[$c] Result=$r\n";
            $result_3[$n++]=$result;
            
            }
            
            }
    }
    else{
    $res_human = $names[$index_human];
    $res_computer=$names[array_rand($names)];
    
    $result="Your Play=".$res_human." "."Computer Play=".$res_computer." Result= ".check($res_computer,$res_human);
    }
}
function check($computer,$human){
    if($computer==$human){
        return "Tie";
    }
    elseif($computer=="Rock"){

        if($human=="Scissors"){
            return "You Lose";
        }
        else{
            return "You win";
        }
    }
    elseif($computer=="Scissors"){
        
        if($human=="Paper"){
            return "You Lose";
        }
        else{
            return "You win";
        }
    }
    elseif($computer=="Paper"){
        
        if($human=="Rock"){
            return "You Lose";
        }
        else{
            return "You win";
        }
    }
}


?>

<html>
<head>
<?php require_once "bootstrap.php"; ?>
<title>Anirudh Mitra 3267dec7</title>
</head>
<body>
<div>
<h1>Rock Paper Scissors</h1>
<p>Welcome <?=$_GET['name']?></p>
<form method="post">
<select name="human">
<option value="-1">Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">scissors</option>
<option value="3">Test</option>
</select>
<input type="submit" value="Play">
<input type="submit" name="logout" value="Logout">
</form>
<pre>
<?php 
    if($result==FALSE){
        echo('Select your strategy');
    }
    else{
        if($index_human=='3'){
            foreach ($result_3 as $value) {
                echo ($value);
              }
        }
        else
        echo($result);
    }
?>
</pre>

</div>
</body>
</html>