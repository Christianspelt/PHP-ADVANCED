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
    function rekenuit($aaa,$bbb,$ccc ){
        $som=$aaa+$bbb+$ccc;
        echo "het antwoord is $som";
    }

    rekenuit(4,2,9);
    rekenuit(3,7,1);
    rekenuit(3,24,6);
    rekenuit(96,42,500);
    ?>
</body>
</html>