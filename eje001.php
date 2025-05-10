<?php
/*-------------------------------------------------------
Universidad del Cauca - Departamento de Telematica
-------------------------------------------------------
Ing. Javier Alexander Hurtado
javhur@unicauca.edu.co
-------------------------------------------------------
Practica No. 1 - Mi primera pagina PHP
*/
?>
<html>

<head>
    <title>Practica 1 - Mi primera pagina PHP</title>
</head>

<body>
    <?php
    /* Apertura del modo PHP */
    /* Definicion de una constante */
    define("PI", 3.1416);
    define("AUTOR", "Javier Hurtado");
    /* Declaracion de una variable */
    $variable = 10;
    print "Var: <b>$variable</b><br>";
    /* Redeclaracion de la misma variable
*/
    $variable = "Ahora soy cadena";
    print "Var: <b>$variable</b><br>";
    /* Ejemplo de una decision */
    $var = 1;
    if ($var == 1) {
        print "<br>La condicion es
verdadera<br>";
    } else {
        print "<br>La condicion es falsa<br>";
    }
    /* Cierre del modo PHP */
    ?>
    <br>
    <form method="post" action="">
        Soy un combo box generado con PHP<br>
        Dia: <select name="dia">
            <?php
            /* Apertura del modo PHP */
            /* Ejemplo de un ciclo FOR */
            /*
ELECTIVA DESARROLLO DE APLICACIONES WEB
2025 Javier Alexander Hurtado – Universidad del Cauca

UNIVERSIDAD DEL CAUCA

DEPARTAMENTO DE
TELEMÁTICA*/

            for ($n = 1; $n <= 31; $n++) {
                print "<option>$n</option>";
            }
            /* Cierre del modo PHP */
            ?>
        </select>
        Mes: <select name="mes">
            <?php
            /* Apertura del modo PHP */
            /* Ejemplo de un ciclo WHILE */
            $n = 1;
            while ($n <= 12) {
                print "<option>$n</option>";
                $n++;
            }
            /* Cierre del modo PHP */
            ?>
        </select>
    </form>
    <br>
    <p>
        Imprimiendo constates PI = <?php print PI ?><br>
        Otra constante AUTOR = <?php print AUTOR ?><br>
        Las dos dentro de una cadena? Funciona diferente<br>
        <b><?php print "El autor AUTOR definio a pi PI"; ?></b>
    </p>
</body>

</html>