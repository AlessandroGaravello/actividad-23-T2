<?php
include ("header.html");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha = $_POST["fecha"];
    $fecha = date("j", strtotime($fecha));

    switch ($fecha) {
        case 1:
        case 3:
        case 5:
        case 13:
            echo "<h3>Horario de mañana</h3>";
            break;

        case 10:
        case 14:
        case 24:
        case 28:
            echo "<h3>Horario de tarde</h3>";
            break;

        case 2:
        case 8:
        case 15:
            echo "<h3>No hay clase</h3>";
            break;

        default:
            echo "<h3>No hay nada definido</h3>";
            break;
    }
}



include ("footer.html");