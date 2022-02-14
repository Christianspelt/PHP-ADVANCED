<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="advanced-1.php" action="advanced-2.php" method="post">
    
<select name="colorb">
    <?php


$kleuren = array("red","blue","green","black","brown");
echo "<p>achtergrondkleur</p>" ;  
foreach($kleuren as $x) {echo"<option name=colorb value=$x >$x</option>";};    
    ?>
</select>    
<select name="colort">

<p>tekstkleur</p>
<?php
foreach($kleuren as $y) {echo"<option name=colort value=$y >$y</option>";};
?>
</select>
    <input type="submit">

<p>dikte van de tabel.</p>
<input type="text" name="dikte">
<input type="text" name="padding">
</select>
</form>
</body>
</html>