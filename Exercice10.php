<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Tableau multidimensionnel associatif
    $personnes1 = array(
        'cisse' => array('prenom' => 'awa', 'ville' => 'Canada', 'age' => 30),
        'diame' => array('prenom' => 'Aliou', 'ville' => 'Maroc', 'age' => 25),
        'fall' => array('prenom' => 'aicha', 'ville' => 'Paris', 'age' => 35),
    );

    // Tableau multidimensionnel associatif
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
    ?>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>

        <?php
        echo "<tr><td colspan='4'>Personnes 1:</td></tr>";
        foreach ($personnes1 as $key => $value) {
            echo "<tr><td>$key</td>";
            foreach ($value as $innerKey => $innerValue) {
                echo "<td>$innerValue</td>";
            }
            echo "</tr>";
        }

        echo "<tr><td colspan='4'>Personnes 2:</td></tr>";
        foreach ($personnes2 as $key => $value) {
            echo "<tr><td>$key</td>";
            foreach ($value as $innerKey => $innerValue) {
                echo "<td>$innerValue</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
