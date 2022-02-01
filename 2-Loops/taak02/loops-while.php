<?php
$leeftijd =0;

while($leeftijd<=17){
    echo "<li>Ik ben $leeftijd jaar, dus ik mag nog niet stemmen.</li> ";
    $leeftijd++;

};
if($leeftijd =18){
    echo "<li>Ik ben $leeftijd jaar oud, dus ik heb stemrecht!</li>";
}
?>