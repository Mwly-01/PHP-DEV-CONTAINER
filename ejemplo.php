
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del camper</title>
</head>

<body>
    <h1>camper</h1>
    <h2><?= str_replace(PHP_EOL,'<br>',$title)?></h2>
    <h3>Campers: <span><?= count($camper) ?></span></h3>
    <?php
    for ($i = 0; $i < count($camper); $i++){
        $campers = $camper[$i];
        echo "FOR -> ". $campers['nombre'] . "<br>";
    }
    ?>
    <div>
        <h2><?= "Nombre del camper:".strtoupper($camper[0]['nombre'])." ". strtolower($camper[0]['apellido'])
           ?></h2>
        <p>
           <?php
            echo "Grupo: <span>". $camper['grupo']. '</span>';
            ?>
        </p>
    </div>

</body>

</html>