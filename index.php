<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/EstiloGuia4.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <div class="CuadroSup">
        <form method="post">
            Ingrese un numero: 
            <input type="text" name="Numero" 
            placeholder="Solo numeros" 
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
            title="Solo numeros" 
            class="Numero"><br><br>


            <input type="submit" 
            name="Calcular" 
            value="Mostrar tabla" 
            class="Calcular"><br><br>
        </form>
    </div>

    <div class="Mostrar">
        <?php if(isset($_POST["Calcular"]) && !empty($_POST["Numero"]) && $_POST["Numero"] <= 10) { ?>
        <h1>Tabla del <?php echo $_POST["Numero"] ?></h1>
        <div>
            <?php

                for($i = 1; $i < 11; $i++)
                {
                    echo $_POST["Numero"]. " x " .$i. " = " . ($_POST["Numero"] * $i. "<br>");
                }
            ?>
        </div>
        <?php
        }
        else
        {
            echo "Ingrese un numero";
        }
        ?>



    </div>
</body>
</html>