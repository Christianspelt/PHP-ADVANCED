<html>

<?php 
if ($color = "green"){
  echo "<body style='background-color:green;'>";   
} 
elseif ($color = "blue"){
    echo "<body style='background-color:blue;'>";   
} 
elseif ($color = "white"){
    echo "<body style='background-color:white;'>";   
}
elseif ($color = "yellow"){
    echo "<body style='background-color:yellow;'>";   
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