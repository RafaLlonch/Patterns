<?php

class Tigger { 

    private static $instance = null;
    private $counter = 0;

    private function __construct() { 
        echo "Creando tigre " . PHP_EOL;
        echo "<br>";
    }

    /* Funcion que crea una instancia de la clase Tigger solo una vez i devuelve esta misma instancia cada 
    vez que se llama */
    public static function getInstance(){
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function roar() { 
        echo "Grrr!";
        ++$this->counter;
        echo "<br>";
    } 

    public function getCounter()
    {
        echo $this->counter;
    }
}

$tigger1 = Tigger::getInstance()->roar();
$tigger2 = Tigger::getInstance()->roar();
$tigger3 = Tigger::getInstance()->roar();

echo "Contador = "; 
Tigger::getInstance()->getCounter();

?>