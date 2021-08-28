<?php

//executar números de 0 a 100 e imprimir os ímpares

for ($i=0; $i<=100; $i++){
	if ($i % 2 != 0){
		echo "#$i" . PHP_EOL;
	}
}