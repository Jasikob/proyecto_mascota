<?php include './conexion.php' ?>
<html>

<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include './menu.php' ?>
    <table>

        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>TIPO</th>
            <th>RAZA</th>
            <th>SEXO</th>
            <th>CLIENTE</th>
            <th>FECHA NACIMIENTO MASCOTA</th>
        </tr>
        <?php
        $sql = "SELECT * FROM mascotas_j";
        $result = mysqli_query($link, $sql); //ejecuto la consulta
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nombre']; ?></td>
                <td><?= $row['tipo']; ?></td>
                <td><?= $row['raza']; ?></td>
                <td><?= $row['sexo']; ?></td>
                <td><?= $row['cliente']; ?></td>
                <td><?= $row['fecha nacimiento mascota']; ?></td>
                <td><a href="modificar_formulario.php?mod=<?php print
                    $row['id']; ?> ">Modificar</a></td>
                <td><a href="eliminar.php?eli=<?php print $row['id']; ?>
">Eliminar</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>