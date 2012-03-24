<?php

/**
 * Project Euler
 * Problema 26 - http://projecteuler.net/problem=26
 * A  unit fraction contains 1 in the numerator. 
 * The decimal representation of the unit fractions with denominators 2 to 10 
 * are given:
 * 1/2    =   0.5
 * 1/3    =   0.(3)
 * 1/4    =   0.25
 * 1/5    =   0.2
 * 1/6    =   0.1(6)
 * 1/7    =   0.(142857)
 * 1/8    =   0.125
 * 1/9    =   0.(1)
 * 1/10   =   0.1
 * Where 0.1(6) means 0.166666..., and has a 1-digit recurring cycle. It can be
 * seen that 1/7 has a 6-digit recurring cycle.
 *
 * Find the value of d  1000 for which 1/d contains the longest recurring cycle
 * in its decimal fraction part.
 *
 */

function problem26() {
    $maisLongo=-1;
    $resposta = 0;


    for ($i=1;$i<1000;$i++) {
        $denominador = $i;

        // ajusta o numerador em relacao ao denominador (0,0..)
        $numeradores = array(1 => 1);
        $index = 1;
        while($numeradores[$index] < $denominador) {
            $index *= 10;
            $numeradores[$index] = $index;
        }

        // parte fracionaria do quociente
        $quociente = '';

        while(true) {
            // resto da divisao
            $resto = $numeradores[$index] % $denominador;
            // parte inteira da divisao
            $parteInteira = intval($numeradores[$index] / $denominador);

            // casos de dizimas nao-quocientes, como 1/8 = 0.125
            if ($resto == 0) {
                $quociente .= $numeradores[$index] / $denominador;
                break;
            }

            // adiciona novo numero no quociente
            $quociente .= $parteInteira;

            // repeticao do numerador, fim do periodo
            if (isset($numeradores[$resto])) {
                break;
            }

            // novo numerador
            $numeradores[$resto] = $resto;

            // verifica validade do numerador
            $index = $resto;
            while ($numeradores[$index] < $denominador) {
                $index *= 10;
                $numeradores[$index] = $index;
            }
        }

        // testa se eh mais longo que o maior
        $size = strlen($quociente);
        if ($size>$maisLongo) {
            $maisLongo = $size;
            $resposta = $i;
        }
    }

    return $resposta;
}

echo problem26();
