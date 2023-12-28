<?php

function afficherTableauXHTML($tableauMultidimensionnel) {
    echo '<table border="1">';
    
   
    echo '<tr>';
    foreach (array_keys($tableauMultidimensionnel) as $cle) {
        echo '<th>' . htmlspecialchars($cle) . '</th>';
    }
    echo '</tr>';
    

    $nbLignes = count(reset($tableauMultidimensionnel));
    for ($i = 0; $i < $nbLignes; $i++) {
        echo '<tr>';
        foreach ($tableauMultidimensionnel as $cle => $colonne) {
            echo '<td>' . htmlspecialchars($colonne[$i]) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}


$tableau = array(
    'Nom' => array('Momodou', 'Eva', 'Mamy'),
    'Âge' => array(25, 19, 22),
    'Ville' => array('Louga', 'thies', 'kolda')
);

afficherTableauXHTML($tableau);

?>
