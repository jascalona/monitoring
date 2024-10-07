<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=control_asistencia_" . date('Y:m:d:m:s').".xls");

?>

    <table>
        <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cliente</th>
            <th>Status</th>
            <th>Fecha</th>
            <th>Tiempo</th>
            <th>Localidad</th>
        </tr>

<?php

    $conexion = mysqli_connect("localhost","root", "", "XDV", "3306");
    $sql=" SELECT *FROM m_Uload ";
    $execute=mysqli_query($conexion, $sql);
    while ($fila=mysqli_fetch_array($execute)) {



        

?>
    <tr>
        <td><?php echo $fila[0]?></td>
        <td><?php echo $fila[1]?></td>
        <td><?php echo $fila[2]?></td>
        <td><?php echo $fila[3]?></td>
        <td><?php echo $fila[4]?></td>
        <td><?php echo $fila[5]?></td>
        <td><?php echo $fila[6]?></td>
        <td><?php echo $fila[7]?></td>
    </tr>

<?php } ?>


    </table>