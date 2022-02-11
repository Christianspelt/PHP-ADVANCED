<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body backgroundcp>
 
    <?php
$x= $_POST['color'];
echo "<body style=background-color:$x;>";

    ?>
<?php
    $info=["voornaam"=>"Christian","leeftijd"=>17,"muziek"=>"pop","woonplaats"=>"nieuwveen","sport"=>"sportloos"];
?>

<?php
    function maakrij($info){
        foreach($info as $y){echo "<th>$y</th>";};
    };
?> 

<table border="1">
    <tr>
        <?php
            ;
            foreach($info as $y){echo "<th>$y</th>";};
        
        
        ?>
    </tr>
</table> 

 
</body>
</html>