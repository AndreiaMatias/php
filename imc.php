<?php

//calculadora IMC

$peso = 68;
$altura = 1.77;
$imc = $peso / ($altura ** 2);

if ($imc <= 16.9){
	echo "Muito abaixo do peso";
}else if ($imc <= 18.4){
	echo "Abaixo do peso";
}else if ($imc <= 24.9){
	echo "Peso normal";
}else if ($imc <= 29.9){
	echo "Acima do peso";
}else if ($imc <= 34.9){
	echo "Obesidade Grau 1";
}else if ($imc <= 40){
	echo "Obesidade Grau 2";
}else{
	echo "Obesidade Grau 3";
}
