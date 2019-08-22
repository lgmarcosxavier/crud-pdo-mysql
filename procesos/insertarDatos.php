<?php

    require "../crud/Crud.php";

    $datos = array(
        'nombre' => $_POST['nombre'],
        'sueldo' => $_POST['sueldo'],
        'edad' => $_POST['edad'],
        'fecha' => $_POST['fecha']
    );

    echo Crud::insertarDatos($datos);