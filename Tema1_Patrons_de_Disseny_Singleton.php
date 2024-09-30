<?php

class Tigger {

    private static $instance;
    private $count = 0;

    private function __construct(){
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance(): Tigger{
        
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function roar(): string {
        $this->count++;
        return "Grrr!" . PHP_EOL;
            
    }

    public function getCounter(): string{
        return "S'ha fet roar " . $this->count . " vegada/es." . PHP_EOL;
    }

}

print_r($tigger = Tigger::getInstance());
echo $tigger->roar() . $tigger->roar() . $tigger->roar() . $tigger->roar() . $tigger->roar() . $tigger->getCounter();