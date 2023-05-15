<?php

class OOP
{
    public function publicMethod(){
        echo "Ini adalah OOP Method Public";
    }

    protected function protectedMethod()
    {
        echo "Ini adalah OOP Method Protected";
    }

    private function privateMethod()
    {
        echo "Ini adalah OOP Method Private";
    }

    public function AccessMethodOOP()
    {
        $this->publicMethod();
        echo "<br>";
        $this->protectedMethod();
        echo "<br>";
        $this->privateMethod();
    }

}
$oop = new OOP();
$oop->publicMethod();
echo "<br>";
$oop->AccessMethodOOP();
