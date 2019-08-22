<?php
    require_once "../crud/Crud.php";
    $id = $_POST['id'];
    echo json_encode( Crud::obtenerDatos($id) );
    