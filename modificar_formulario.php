<?php include "./conexion.php"; ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Modificar Formulario</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $sql = "SELECT * FROM mascotas_j WHERE id_mascota ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form id="form1" name="form1" method="post" action="modificar_logica.php">
        <label for="textfield">ID de la mascota: <input type="text" name="id_mascota" id="id_mascota"
                value="<?php print $row['nombre']; ?>" /></label>
        <label for="textfield2">Nombre de la mascota: <input type="text" name="nombre_mascota" id="nombre_mascota"
                value="<?php print $row['apellido']; ?>" /></label>
        <label for="select">Tipo de mascota:
            <select name="tipo_mascota" id="tipo_mascota">
                <option value="<?php print $row['tipo']; ?>"><?php print
                       $row['tipo']; ?></option>
                <option value="perro">Perro</option>
                <option value="gato">Gato</option>
            </select>
        </label>
        <label for="textfield3">Raza: <input type="text" name="raza" id="raza" value="<?php print $row['raza'];
        ?>" /></label>
        <legend>Sexo:</legend>
        <?php if ($row['sexo'] == 'H') { ?>
            <input type="radio" name="sexo" value="H" id="H" checked="checked" />
        <?php } else { ?> <input type="radio" name="sexo" value="H" id="H" /><?php } ?>
        <label for="H">Hembra</label>
        <?php if ($row['sexo'] == 'M') { ?>
            <input type="radio" name="sexo" value="M" id="M" checked="checked" />

        <?php } else { ?> <input type="radio" name="sexo" value="M" id="M" /><?php } ?>
        <label for="M">Macho</label>
        <label for="textfield3">Nombre del cliente: <input type="text" name="nombre_cliente" id="nombre_cliente"
                value="<?php print $row['cliente']; ?>" /></label>
        <label for="textfield3">Fecha de nacimiento de la mascota: <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                value="<?php print $row['fecha nacimiento mascota']; ?>" /></label>
    </form>
</body>

</html>