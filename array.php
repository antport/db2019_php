<?php

// Array estructurado 

$alumno=[];

$alumno[]=[
	'nombre'=>'David',
	'apellido'=>'Blanco',
	'mesa'=>'700'
];

$alumno[]=[
	'nombre'=>'Roberto',
	'apellido'=>'Hernádezdez',
	'mesa'=>'702'
];

$alumno[]=[
	'nombre'=>'María',
	'apellido'=>'Hoyos',
	'mesa'=>'704'
];

$alumno[]=[
	'nombre'=>'Antonio',
	'apellido'=>'Portilla',
	'mesa'=>'709'
];

echo '<pre>';
print_r ($alumno);
echo '</pre>';

// Sacar datos de un array
echo $alumno[1]['nombre'];
echo '</br>';
echo $alumno[2]['nombre'];
echo '</br>';

// Poner más posiciones a un array ya iniciado añadiendo un array embebido
// Queda de esta forma un array no estructurado

$alumno[2]['lenguajes']=[
	'HTML',
	'CSS',
];

// Sacar datos de un array bidimensional
echo '<pre>';
print_r ($alumno[2]);
echo '</pre>';




?>
