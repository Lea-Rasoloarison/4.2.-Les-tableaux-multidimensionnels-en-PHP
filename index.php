<?php


$film1 ='Indiana Jones et le Temple maudit';
$film2 = 'Indiana Jones et la Dernière Croisade';
$film3 = 'Indiana Jones et le Royaume du crâne de cristal';

$actors = [
    'Indiana Jones et le Temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Amrish Puri'],
    'Indiana Jones et la Dernière Croisade' => ['Harrison Ford', 'Sean Connery', 'Denholm Elliott'],
    'Indiana Jones et le Royaume du crâne de cristal' => ['Harrison Ford', 'Kate Capshaw', 'Jonathan Ke Quan']
];

echo 'Dans le film Indiana Jones et le Temple maudit les principaux acteurs sont:';

echo '</br>';
echo $actors['Indiana Jones et le Temple maudit'][0];
echo '</br>';
echo $actors['Indiana Jones et le Temple maudit'][1];
echo '</br>';
echo $actors['Indiana Jones et le Temple maudit'][2];

echo '</br>';
echo '</br>';
echo '</br>';


echo 'Dans le film Indiana Jones et la Dernière Croisade les principaux acteurs sont:';
echo '</br>';
echo '</br>';

echo $actors['Indiana Jones et la Dernière Croisade'][0];
echo '</br>';
echo $actors['Indiana Jones et la Dernière Croisade'][1];
echo '</br>';
echo $actors['Indiana Jones et la Dernière Croisade'][2];

echo '</br>';
echo '</br>';
echo '</br>';


echo 'Dans le film Indiana Jones et le Royaume du crâne de cristal les principaux acteurs sont:';
echo '</br>';
echo '</br>';

echo $actors['Indiana Jones et le Royaume du crâne de cristal'][0];
echo '</br>';
echo $actors['Indiana Jones et le Royaume du crâne de cristal'][1];
echo '</br>';
echo $actors['Indiana Jones et le Royaume du crâne de cristal'][2];

?>