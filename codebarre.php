<?php

for ($y=0; $y<12; $y++){



print_r("Veuillez saisir le chiffre numero ".($y+1)."\n");
$suiteChif[] = readline();


while ($suiteChif[$y]>9 || $suiteChif[$y]<0) :
print_r("Veuillez resaisir le chiffre numero ".($y+1)."\n");
$suiteChif[$y] = readline();
endwhile;
	

}

// print_r($suiteChif);
// affiche la suite de chiffres 
//print_r($suiteChif);

for ($i =0; $i < 11; $i++){
	if ($i%2==1){
	$suiteChif[$i] = $suiteChif[$i]*3;}
}
// affiche la suite avec le *3 pour les nombres au rang impairs
//print_r($suiteChif);

$s = array_sum($suiteChif);
// verification de la valeur de s (la somme)
//echo $s;

$reste=$s%10;
// verification du reste
// echo $reste;

if ($reste==0){
	$cle = $reste;
	// si le reste de % est egale a 0 alors la cle vaut 0
}
else{
$cle=10-$reste;
// sinon la clef prend la valeur de 10-le reste
}
echo "la clé du 13e chiffre est = " . $cle;
//affichage de la valeur de la clef


?>