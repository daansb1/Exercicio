<?php

$qualaSuaIdade = 65;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualaSuaIdade < $idadeCrianca) {

    echo "Criança";

} else  if ($qualaSuaIdade < $idadeMaior) {

    echo "Adolescente";

} else  if  ($qualaSuaIdade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "idoso";
}

echo "<br>";

echo ($qualaSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>