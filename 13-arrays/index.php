<?php 
/* Arrays
Un array es una coleccion o un conjunto de datos/valores,
bajo un unico nombre.Para acceder a esos valores podemos usar
un indice numero o alfanumerico.

*/
$pelicula='Batman';
$peliculas= array('Batman','Spiderman','Superman');
$cantantes=['2pac','Pitbull','Bad Bunny'];
//Array asociativo
$personas=array(
    'nombre' => 'Guillermo',
    'apellidos'=> 'Vazquez',
    'web'=>'https://www.facebook.com/guillermo.f.vazquez.33'
);

// var_dump($cantantes);
// var_dump($peliculas [1]);
echo $peliculas[0];
echo "<br/>";
echo $cantantes[2];
//Recorrer un array con FOR
echo '<h1>Listado de peliculas</h1>';
echo '<ul>';
for ($i=0; $i < count($peliculas) ; $i++) { 
    echo '<li>'.$peliculas[$i].'</li>';
    
}
echo '</ul>';

//Recorrer con Foreach
echo '<h1>Listado de cantantes</h1>';
echo '<ul>';
foreach ($cantantes as $cantante) {
        echo '<li>'.$cantante.'</li>';
}
echo '</ul>';



?>