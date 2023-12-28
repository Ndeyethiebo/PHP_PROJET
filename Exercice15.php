<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


function firstCharactertolower(&$tab) {
    foreach ($tab as &$chaineCaractere) {
        $chaineCaractere = ucfirst(strtolower($chaineCaractere));
    }
}


$information = array("rokhaya", "lamanatou", "fatou");
 firstCharactertolower($information);


foreach ($information as $Majuscule) {
    echo $Majuscule . "<br>";
}


?>

</body>
</html>
