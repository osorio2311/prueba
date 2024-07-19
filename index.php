<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hola Mundo</h1>
<h2>
<?php

//comentarios de linea
/**
 * comentario de bloque
 */
#comentario de linea

$a=3;
$b=5;//si es la ultima linea no es obligatorio poner el ;
$c=$a+$b;
echo "El resultado de la suma de a + b es: " . $c; //se concatena con . o con ,
echo "<br>";
echo "El resultado de la suma de a + b es: $c";
$nombre="Jose Luis";
$nombre.=" Osorio";
echo "<br>".$nombre;

echo "<br>".gettype($a);
echo "<br>".gettype($nombre);
const IVA = 21;
echo "<br>El IVA es ".IVA."%";
echo "<br>".M_PI;//saca el valor de PI
echo "<br>".__LINE__;//nos dice la linea en la que estamos la 36

/*
 * Variables generadas dinamicamente
 */
$m_en="Hello";
$m_es="Hola";
$m_it="Ciao";
//variable para definir el idioma que se va a usar en este caso
$idioma="en";
//variable con el nombre generado dinamicamente
$bienvenida="m_".$idioma;
echo "<br>";
echo "!".$$bienvenida."!";

/***************************************/
#Caso práctico nº1
$r=10;
$radio=2*M_PI*$r;
echo "<br>";
echo $radio;
echo "<br><h1>";
printf(  "El valor de la circunferencia es: %0.2f",$radio);

echo "</h1>";






?>
</h2>
</body>
</html>
