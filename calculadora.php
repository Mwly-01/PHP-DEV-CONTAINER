<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <?php
    $num1 = 10;
    $num2 = "10";
    ?>

    <h1>Calculadora PHP</h1>
    <p>sumar: <?php echo $num1 + $num2 ?></p>
    <p>restar: <?php echo $num1 - $num2 ?></p>
    <p>dividir: <?php echo $num1 / $num2 ?></p>
    <p>multiplicar: <?php echo $num1 * $num2 ?></p>
    <p>modulo: <?php echo $num1 % $num2 ?></p>
    <p>potencia: <?php echo $num1 ** $num2 ?></p>


    <h1>comparacion PHP</h1>
    <P>resultados == <?php
                        if ($num1 == $num2) {
                            echo "son iguales";
                        } else {
                            echo "no son iguales";
                        }
                        ?>
    </P>
    <P>resultados =! <?php
                        if ($num1 != $num2) {
                            echo "son diferentes";
                        } else {
                            echo "no son diferentes";
                        }
                        ?>
    </P>

    <P>resultados >= : <?php
                        if ($num1 >= $num2) {
                            echo "es mayor o igual";
                        } else {
                            echo "no es mayor";
                        }
                        ?>
    </P>
    <P>resultados <= : <?php
                        if ($num1 >= $num2) {
                            echo "es menor o igual";
                        } else {
                            echo "no es menor";
                        }
                        ?>
            </P>
            <P>resultados <=> : <?php
                                echo " 5 -> 5 " . (5 <=> 5) . "<br>";
                                echo " 5 -> 4 " . (5 <=> 4) . "<br>";
                                echo "-5 -> 6 " . (5 <=> 6) . "<br>";

                                ?>
            </P>

</body>

</html>