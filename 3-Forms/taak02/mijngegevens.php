<html>

<?php 
if ($color = "green"){
    echo $_POST["green"];   
} 
elseif ($color = "blue"){
    echo $_POST["blue"];   
} 
elseif ($color = "white"){
    echo $_POST["white"];   
}
elseif ($color = "yellow"){
    echo $_POST["yellow"];   
}
?>

Welcome <?php echo $_POST["voornaam"];
echo $_POST["achternaam"];?><br>
je is klas: <?php echo $_POST["klas"]; ?><br>
je leeftijd is: <?php echo $_POST["leeftijd"]; ?><br>
je adres is: <?php echo $_POST["adres"]; ?><br>
je woont in.: <?php echo $_POST["woonplaats"]; ?><br>

je geslacht is : <?php echo $_POST["geslacht"]; ?>

</body>
</html> 