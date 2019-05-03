<h1>Hola mundo</h1>
Esto está escrito en HTML
y no hay saltos de línea
</br>
<?php
/*
echo date('H:i:s');

echo '</br>';

echo 2+5;

echo '</br>';

*/


/* Calcula los días que faltan para una fecha determinada  */

$ahora=time();
$final=strtotime('2019-09-25');
$dias=($final-$ahora)/(60*60*24);

echo 'Días para terminar la teoría del curso: ', $dias;
// Fin de calcular los días 

/* Calcula los años que faltan para una fecha determinada  */
echo '</br>';
$ahora=time();
$inicial=strtotime('1974-05-22');
$years=($ahora-$inicial)/(60*60*24*365.25);
$years=floor($years);
echo 'Tienes esta edad: ', $years;
// Fin de calcular los años 
echo '</br>'.'</br>';

/* Bucle contar  */

for ($i=0;$i<10;$i=$i+1) /* $i=$i++ es los mismo que $i+=1 */
{
	echo $i;
	echo ', ';
}

// Fin Bucle
echo '</br>'.'</br>';


/* Bucle  tabla del 2  */
for ($i=0;$i<12;$i=$i+2) 
{
	echo $i;
	echo ', ';
}
// Fin Bucle
echo '</br>'.'</br>';


/* Bucle  potencia de  2  */
$potencia=2;
for ($i=0;$i<10;$i=$i+1) 
{
	echo 'esto es 2 elevado: ', $i+1 , '=', $potencia;
	$potencia=$potencia*2;
	echo '</br>';
}
// Fin Bucle
echo '</br>'.'</br>';



/* Serie de fibonacci  */

$f[0]=0;
$f[1]=1;


for ($i=2; $i<11; $i++){
	$f[$i] = $f[$i-1] + $f[$i-2];
}

echo '<pre>';
print_r($f);
echo '</pre>';

// factorial de los 10 primeros naturales
echo '</br>'.'</br>';

/* Factorial de un número  */

$f=1;


for ($i=2; $i<=10; $i++)
{
	$f = $f * $i;
	echo $i, '!=' , $f , '</br>';
}
// factorial de los 10 primeros 
echo '</br>'.'</br>';





/* Criba de Erastotoes  */
/* Array asociativo */

for ($i=2 ;$i<=100 ;$i++){

	for ($j=2; $j<=100; $j++){
		if(!isset($np[$i])) $np[$i*$j]=1; 
	}
}

for ($i=1;$i<100;$i++){
	if(!isset($np[$i])) echo $i.'</br>';
}
/*
echo '<pre>';
print_r ($np);
echo '</pre>';
// factorial de los 10 primeros 
echo '</br>'.'</br>';
*/





?>