<?php
declare(strict_types=1);

// Spaceship opérator, renvoie 0 si les 2 sont égaux, 1 si gauche est plus grand, -1 si droite est plus grand
echo 2 <=> 3;

// Null coalesce operator
/*if(isset($_GET['id'])){
	$id = $_GET['id'];
} else {
	$id = 1;
}*/

$id = $_GET['id'] ?? '3';

echo $id;

//Type Scalaire
function random(int $min, int $max) : float{
	return $min * $max;
}

echo random(1, 6);

// Try catch
function division($a,$b){
	if(!$b){
		throw new Exception("Division par 0");
	}
	return $a/$b;
}


try{
	division(10,0);
} catch(Exception $e){
	var_dump($e);
}

?>