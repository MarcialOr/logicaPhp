<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--

1.       Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso.
-->
<?php
function invertirArray($array) {
    $arrayInvertido = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $arrayInvertido[] = $array[$i];
    }
    return $arrayInvertido;
}

$arrayOriginal = [1, 2, 3, 4, 5];
$arrayInvertido = invertirArray($arrayOriginal);

// Formatear salida en HTML
echo "<pre>";
print_r($arrayInvertido);
echo "</pre>";
?>



<!--
2.       Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros.
-->
<?php
function sumarParesEjercicio2($arrayEjercicio2) {
    $sumaEjercicio2 = 0;

    foreach ($arrayEjercicio2 as $numeroEjercicio2) {
        if ($numeroEjercicio2 % 2 == 0) { // Verifica si el número es par
            $sumaEjercicio2 += $numeroEjercicio2;
        }
    }

    return $sumaEjercicio2;
}

// Ejemplo de uso
$arrayNumerosEjercicio2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumaParesEjercicio2 = sumarParesEjercicio2($arrayNumerosEjercicio2);

echo "La suma de los números pares es: " . $sumaParesEjercicio2;
?>


<!--
3.       Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.
-->
<?php
function contarFrecuenciaCaracteres($cadena) {
    $frecuencia = [];

    // Recorre cada carácter en la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Si el carácter ya existe en el array, incrementa su contador
        if (array_key_exists($caracter, $frecuencia)) {
            $frecuencia[$caracter]++;
        } else {
            // Si el carácter no existe, lo inicializa en 1
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

// Ejemplo de uso
$cadenaTexto = "hola mundo";
$frecuenciaCaracteres = contarFrecuenciaCaracteres($cadenaTexto);

echo "<pre>";
print_r($frecuenciaCaracteres);
echo "</pre>";
?>


<!--
4.       Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.
-->
<?php
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprime espacios para centrar la pirámide
        for ($j = $i; $j < $altura; $j++) {
            echo " ";
        }
        
        // Imprime los asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        
        // Salto de línea al final de cada nivel de la pirámide
        echo "<br>";
    }
}

// Ejemplo de uso
$alturaPiramide = 5;
imprimirPiramide($alturaPiramide);
?>




</body>
</html>