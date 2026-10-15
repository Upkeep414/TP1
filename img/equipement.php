<?php
$nomEquipement = "srv-web-01";
$memoireGo = 16;
$stockageGo = 512;
$coutMensuel = 24.90;
$estActif = true;
echo "Nom : " . $nomEquipement . "<br>";
echo "Mémoire : " . $memoireGo . " Go<br>";
echo "Stockage : " . $stockageGo . " Go<br>";
echo "Coût mensuel : " . $coutMensuel . " euros<br>";

echo "<hr>";
var_dump($nomEquipement);#string
var_dump($memoireGo);#int
var_dump($coutMensuel);#float
var_dump($estActif);#bool