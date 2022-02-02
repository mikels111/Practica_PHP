<?php

function validarEmail($email)
{
    $valido = "No es válido";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valido = "Válido";
    }
    return $valido;
}

if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']);
} else {
    echo "Pasa un email";
}
