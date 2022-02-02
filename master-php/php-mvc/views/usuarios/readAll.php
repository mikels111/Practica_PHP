<?php
while($object = $usuariosFindAll->fetch_object()) {
    echo "<h1>".$object->nombre."</h1>"."<p>".$object->apellidos."</p>";
    echo "<p>".$object->fecha_registro."</p>";
}