<?php

class Duck {

    public function quack() {
        echo "Quack \n";
        echo "<br>";
    }

    public function fly() {
        echo "I'm flying \n";
        echo "<br>";
    }
}

class Turkey {

    public function gobble() {
        echo "Gobble gobble \n";
        echo "<br>";
    }

    public function fly() {
        echo "I'm flying a short distance \n";
        echo "<br>";
    }
}

//Clase amb adapter pattern
class TurkeyAdapter extends Duck{

    public $turkey;
    public function __construct(Turkey $turkey){
        $this->duck_interaction = $turkey;   
    }  

    public function quack() {
        echo "Gobble gobble \n";
        echo "<br>";
    }

    public function fly() {
        echo "I'm flying a short distance"."<br>";
        echo "I'm flying a short distance"."<br>";
        echo "I'm flying a short distance"."<br>";
        echo "I'm flying a short distance"."<br>";
        echo "I'm flying a short distance"."<br>";
    }
}

function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);

echo "The Turkey says...\n";
echo "<br>";
$turkey->gobble();
$turkey->fly();

echo "The Duck says...\n";
echo "<br>";
duck_interaction($duck);

echo "The TurkeyAdapter says...\n";
echo "<br>";
duck_interaction($turkey_adapter);

?>