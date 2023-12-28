
<?php

function sinusAngle($angle, $unite = 'radian') {
    if ($unite == 'degre') {
        $angle = deg2rad($angle);
    } elseif ($unite == 'grade') {
        $angle = deg2rad($angle * 9/10);
    }
   
    $sinus = sin($angle);
    return $sinus;
}


$angleEnRadian = 1.2;
$sinusRadian = sinusAngle($angleEnRadian);
echo "Sinus de l'angle en radian : $sinusRadian\n";

$angleEnDegre = 45;
$sinusDegre = sinusAngle($angleEnDegre, 'degre');
echo "Sinus de l'angle en degré : $sinusDegre\n";

$angleEnGrade = 50;
$sinusGrade = sinusAngle($angleEnGrade, 'grade');
echo "Sinus de l'angle en grade : $sinusGrade\n";

?>