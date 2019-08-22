<?php
    require_once "../crud/Crud.php";
    $id = $_POST['id'];
    echo Crud::eliminarDatos($id);
    