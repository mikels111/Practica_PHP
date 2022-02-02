<?php
$resultado = 0;
if (!isset($_REQUEST['num1']) || !isset($_REQUEST['num2'])) {
    echo "Falta algún número";
} else {
    if (is_numeric($_REQUEST['num1']) and is_numeric($_REQUEST['num2'])) {
        if (isset($_REQUEST['sumar'])) {
            $resultado = $_REQUEST['num1'] + $_REQUEST['num2'];
        } else if (isset($_REQUEST['restar'])) {
            $resultado = $_REQUEST['num1'] - $_REQUEST['num2'];
        } else if (isset($_REQUEST['dividir'])) {
            $resultado = $_REQUEST['num1'] / $_REQUEST['num2'];
        } else if (isset($_REQUEST['multiplicar'])) {
            $resultado = $_REQUEST['num1'] * $_REQUEST['num2'];
        }
    } else {
        echo "Introduce un número";
    }
}
echo "<h2>Resultado=$resultado</h2>"

?>

<form action="ejercicio3.php" method="get">
    <input type="number" name="num1" id="num1">
    <input type="number" name="num2" id="num2">
    <input type="submit" value="sumar" name="sumar">
    <input type="submit" value="restar" name="restar">
    <input type="submit" value="dividir" name="dividir">
    <input type="submit" value="multiplicar" name="multiplicar">
</form>