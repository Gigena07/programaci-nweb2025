<?php

$emisora = 'radio disney';
echo "me gusta escuchar $emisora";
/*En términos sencillos, las comillas simples (') y las comillas dobles (") en PHP se usan para encerrar texto, pero tienen algunas diferencias clave:

Comillas simples: El texto entre comillas simples se toma literalmente tal cual. Si escribes algo dentro de ellas, PHP no va a tratar de interpretar nada. No entiende variables ni símbolos especiales como saltos de línea o tabulaciones.

Comillas dobles: Estas permiten que PHP entienda las variables y algunos caracteres especiales. Es decir, si tienes una variable dentro de un texto entre comillas dobles, PHP la reemplaza por su valor real. También reconoce símbolos como el salto de línea o la tabulación.

En resumen:

Comillas simples: Todo es texto puro, sin interpretaciones.

Comillas dobles: Se pueden usar para incluir variables y símbolos especiales dentro del texto.

Ejemplo:
Comillas simples: 'Hola, $nombre' — PHP muestra literalmente $nombre.

Comillas dobles: "Hola, $nombre" — PHP reemplaza $nombre por su valor, como Juan.
*/
?>