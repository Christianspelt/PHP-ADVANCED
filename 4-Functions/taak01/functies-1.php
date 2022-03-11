<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$kleur =["red","green","blue","yellow"];
function schrijfKleurs($kleur){
    foreach($kleur as $kleur){
        echo "<p style=color:$kleur;>Deze tekst is in de kleur $kleur.</p>";
    };
}

schrijfKleurs($kleur); 
  
    ?>
</body>
</html>