<?php
/*-------------------------------------------------------
Universidad del Cauca - Departamento de Telematica
-------------------------------------------------------
Ing. Javier Alexander Hurtado
javhur@unicauca.edu.co
-------------------------------------------------------
Practica No. 2 - Funciones en PHP
*/
?>
<?php
/* Definicion de una Funcion
Formato:
string date ( string format [, int timestamp])
Devuelve una cadena formateada de acuerdo con la cadena de
formato dada, utilizando
el valor de timestamp dado o la hora local actual si no hay
parámetro.
*/
function fecha()
{
    $fecha = date("d-m-Y");
    return $fecha;
}

// UNIVERSIDAD DEL CAUCA

// DEPARTAMENTO DE
// TELEMÁTICA

// ELECTIVA DESARROLLO DE APLICACIONES WEB
// 2025 Javier Alexander Hurtado – Universidad del Cauca

/* Fin de la Definicion de una Funcion
*/ /* Otra funcion */

function mes()
{
    print "<select name=\"mes\">\n";
    print "<option value=\"1\">Enero</option>\n";
    print
        "<option value=\"2\">Febrero</option>\n";
    print
        "<option value=\"3\">Marzo</option>\n";
    print
        "<option value=\"4\">Abril</option>\n";
    print
        "<option value=\"5\">Mayo</option>\n";
    print
        "<option value=\"6\">Junio</option>\n";
    print
        "<option value=\"7\">Julio</option>\n";
    print
        "<option value=\"8\">Agosto</option>\n";
    print
        "<option value=\"9\">Septiembre</option>\n";
    print
        "<option value=\"10\">Octubre</option>\n";
    print
        "<option value=\"11\">Noviembre</option>\n";
    print
        "<option value=\"12\">Diciembre</option>\n";
    print
        "</select>";
}
?>
<html>

<head>
    <title>Practica 2 - Funciones en PHP</title>
</head>

<body>
    La fecha generada por el sistema es:<br>
    <?php /* Invoca la funcion definida por el usuario */
    ?> <b><?php print fecha() ?></b>
    <form method="post"
        action="">
        Mes: <?php mes() ?>
    </form>
    <?php
    //Función para obtener la hora del sistema
    function hora()
    {
        $h = date("g:i:s A");
        return ($h);
    }
    function suma($a, $b)
    {
        return ($a + $b);
    }
    $d = 5;
    $e = 8;
    print "Hora: " . hora() . "<br>";
    print "Suma: " . suma($d, $e) . "<br>";
    ?>
</body>

</html>