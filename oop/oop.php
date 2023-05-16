<?php
class OOP{
    public function publicMethod(){
        echo "Ini adalah OOP metode publik";
    }
    protected function protectedMethod(){
        echo "Ini adalah OOP metode protected";
    }
    private function privateMethod(){
        echo "Ini adalah OOP metode private";
    }

    public function AccessMethodOOP(){
        $this->publicMethod();
        echo "<br>";
        $this->protectedMethod();
        echo "<br>";
        $this->privateMethod();
        echo "<br>";
    }
    
}

$oop = new OOP();
$oop->publicMethod();
echo "<br>";
$oop->AccessMethodOOP();
echo "<br>";
