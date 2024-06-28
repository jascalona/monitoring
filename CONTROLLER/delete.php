<?php
 
 if (!empty($_GET['id'])) {
    $id=$_GET['id'];
    $sql=$conexion->query(" DELETE FROM user_lg WHERE $id=id ");
    if ($sql==1) {
        echo '<div class="alert alert-success" role="alert">Seha eliminado el registro!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error al eliminar el registro!</div>';
    }
    
 }

?>