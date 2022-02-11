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
    

    <select name="color">
    <?php


$kleuren = array("red","blue","green","black","brown");
    
foreach($kleuren as $x) {echo"<option name=color value=$x >$x</option>";}    
    ?>
    <input type="submit">
</select>
</body>
</html>