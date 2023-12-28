<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$personnes1 = array(
    'cisse' => array('prenom' => 'awa', 'ville' => 'Canada', 'age' => 30),
    'diame' => array('prenom' => 'Aliou', 'ville' => 'Maroc', 'age' => 25),
    'fall' => array('prenom' => 'aicha', 'ville' => 'Paris', 'age' => 35)
);

$personnes2 = array(
    'DIALLO' => array(
        'prenom' => 'Amadou',
        'ville' => 'LOUGA',
        'age' => 30
    ),
    'NDIAYE' => array(
        'prenom' => 'Fatou',
        'ville' => 'Tamba',
        'age' => 25
    ),
    'LY' => array(
        'prenom' => 'Omar',
        'ville' => 'kolda',
        'age' => 35
    )
);

function displayArrayInTable($array)
{
    echo "<table border='1'>";
    echo "<thead><tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Âge</th></tr></thead>";
    echo "<tbody>";

    reset($array);
    while ($outerKey = key($array)) {
        echo "<tr><td>$outerKey</td>";

        $innerArray = current($array);
        reset($innerArray);
        while ($innerKey = key($innerArray)) {
            $innerValue = current($innerArray);
            echo "<td>$innerValue</td>";
            next($innerArray);
        }

        next($array);
        echo "</tr>";
    }

    echo "</tbody></table>";
}

echo "<h2>Personnes 1:</h2>";
displayArrayInTable($personnes1);

echo "<h2>Personnes 2:</h2>";
displayArrayInTable($personnes2);

?>

</body>
</html>
