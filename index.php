D<?php
    $nombre = "Meliza";
    $apellido = "Ardila";
    $skill = ["Git", "Php", "MySQL"];
    $contraseña_usuario = "admin";
    $es_valida = false;
    $edad = 26;
    $nivel_pin_pon = 1.5;
    define("EDAD_MINIMA", 18);
    const EDAD_MAXIMA = 99;

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to php</title>
</head>

<body>
    <h1>
        <?php
        echo "HELLO" . " " . $nombre . " " . $apellido . "!";

        ?>
    </h1>
    <h2>Skill</h2>
    <ul>
        <li><?php printf("Skill nivel 1: %s", $skill[0]); ?></li>
        <li><?php printf("Skill nivel 2: %s", $skill[1]); ?></li>
        <li><?php printf("Skill nivel 3: %s", $skill[2]); ?></li>
    </ul>
    <h2>Requirements</h2>
    <li><?php printf("Edad %s y %s", EDAD_MINIMA, EDAD_MAXIMA); ?></li>
    <ul>
        <h2>Debug</h2>
        <ul>
            <li><?php var_dump($nombre); ?></li>
            <li><?php var_dump($apellido); ?></li>
            <li><?php var_dump($skill); ?></li>
            <li><?php var_dump($contraseña_usuario); ?></li>
            <li><?php var_dump($es_valida); ?></li>
            <li><?php var_dump($edad); ?></li>
            <li><?php var_dump($nivel_pin_pon); ?></li>

        </ul>

</body>

</html>