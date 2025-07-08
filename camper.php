<!-- Arrays -->

<?php
$title = "Welcome to the Best Team" . PHP_EOL . "GROUP_ID: A1";

$campers = [
    [
        "nombre" => "Juan",
        "apellido" => "Jaimes",
        "edad" => 16,
        "grupo" => "El Combo Existe!",
        "skills" => [
            [
                "nombre" => "Git & GitHub",
                "score" => 10,
                "matriculado" => false
            ],
            [
                "nombre" => "MySQL",
                "score" => 20,
                "matriculado" => false
            ],
            [
                "nombre" => "PHP",
                "score" => 95,
                "matriculado" => false
            ],
            [
                "nombre" => "Laravel",
                "score" => 0,
                "matriculado" => true
            ],
        ],
        "score" => 80.1
    ],
    [
        "nombre" => "Jani",
        "apellido" => "Ramirez",
        "edad" => 17,
        "grupo" => "El Combo Existe!",
        "skills" => [
            [
                "nombre" => "Git & GitHub",
                "score" => 89,
                "matriculado" => false
            ],
            [
                "nombre" => "MySQL",
                "score" => 75,
                "matriculado" => false
            ],
            [
                "nombre" => "PHP",
                "score" => 80,
                "matriculado" => false
            ],
            [
                "nombre" => "Laravel",
                "score" => 0,
                "matriculado" => true
            ],
        ],
        "score" => 83
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del camper</title>
</head>

<body>
    <h1>Camper</h1>
    <h2><?= str_replace(PHP_EOL, '<br>', $title); ?></h2>
    <h3>Campers: <span><?= count($campers) ?></span></h3>
    <!-- count permite contar la cantidad de elementos de un array dentro, devolviendo un entero -->
    <?php
    foreach ($campers as $i => $camper) {
        echo "FOR $i -> " . $camper['nombre'] . "<br>";
    
    ?>

    <div>
        <!-- los 'strto' permiten transformar el contenido a mayúscula 'upper' o minúscula 'lower' -->
        <p>
            <?php
            echo "Grupo: <span>" . $campers[$i]['grupo'] . "</span>";
            ?>
        </p>
    </div>

    <div>
        <h2><?= "Skills camper " . $campers[$i]['nombre']; ?></h2>
        <?php
        foreach ($campers[$i]['skills'] as $skill) {
            $esta_matriculado = $skill['matriculado'] ? 'true' : 'false';

            echo "<strong>Curso:</strong> " . $skill['nombre'] . "<br>";
            echo "<strong>Score:</strong> " . $skill['score'] . "<br>";
            echo "<strong>Matriculado:</strong> " . $esta_matriculado . "<br><br>";
        }
    }
        ?>
    </div>
</body>

</html>
