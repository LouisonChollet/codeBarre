<?php

for ($y=0; $y<12; $y++){
	print_r("Veuillez saisir le chiffre numero ".($y+1)."\n");
	$suiteChif[] = readline();
	
	while ($suiteChif[$y]>9 || $suiteChif[$y]<0) :
		print_r("Veuillez resaisir le chiffre numero ".($y+1)."\n");
		$suiteChif[$y] = readline();
	endwhile;
}

for ($i =0; $i < 11; $i++){
	if ($i%2==1){
	$suiteChif[$i] = $suiteChif[$i]*3;}
}

$s = array_sum($suiteChif);
$reste=$s%10;

if ($reste==0){
	$cle = $reste;
}
else{
	$cle=10-$reste;
}
echo "la clé du 13e chiffre est = " . $cle;

?>