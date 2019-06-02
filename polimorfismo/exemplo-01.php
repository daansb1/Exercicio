<?php

class Animal {

    public function falar(){

        return "Som";

    }
    public function mover(){

        return"Anda";

    }
}

class Cachorro extends Animal {

    public function falar(){

        return "Late";
    }
}

class Gato extends Animal {

    public function falar(){

        return "Mia";
    }

}

class Passaro extends Animal {

    public function falar(){

        return "Canta";

    }

    public function mover(){

        return "Voa e" . parent::mover();

    }

}

$pluto = new Cachorro ();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "---------------------------<br/>";

$garfield = new Gato ();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "---------------------------<br/>";

$ave = new Passario();
echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";


?>