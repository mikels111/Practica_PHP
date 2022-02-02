<?php
$peliculas = array('El caballero oscuro', 'La gran belleza', 'Barton Fink');

// Recorrer con for
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>" . $peliculas[$i] . "</li>";
}
echo "</ul>";

echo "<ul>";
// Recorrer con for each
foreach ($peliculas as $key => $peli) {
    echo "<li>" . $peli . "</li>";
}
echo "</ul>";

// arrays asociativos
$personas = array(
    'nombre' => 'Mikel',
    'apellidos' => 'Seara Caballero'
);
echo $personas['nombre'] . " " . $personas['apellidos'];
