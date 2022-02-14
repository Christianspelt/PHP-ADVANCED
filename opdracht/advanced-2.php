<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
body
{
    background-color: <?php echo $_POST['colorb'] ?>;
    color: <?php echo $_POST['colort'] ?>;
}
table{
    padding:<?php echo $_POST['padding']?>px;
}
</style>
 
    <?php
$x= $_POST['colorb'];
$q= $_POST['colort'];


    ?>
<?php
    $info=["voornaam"=>'Christian',"leeftijd"=>17,"muziek"=>'pop',"woonplaats"=>'nieuwveen',"sport"=>'sportloos'];
?>
<?php

$a= $_POST["dikte"];
echo "<table border=$a>";
?> 
<tr>
<?php
    function maakrij($info){
        foreach($info as $y => $x){echo "<th  style=background-color:;>$y</th><th  style=background-color:;>$x</th>";};
    };
    maakrij($info)
?> 
    </tr>
</table>

 
</body>
</html>