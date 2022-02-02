<?php
while($object = $notasFindAll->fetch_object()) {
    echo "<h1>".$object->titulo."</h1>"."<p>".$object->fecha."</p>";
    echo "<p>".$object->descripcion."</p>";
}
// var_dump($notas);
