<?php

class Notification
{
    const OOP = "OOP is so funny to learn, but so hard";
}

trait learn
{
    public function learnOOP()
    {
        echo Notification::OOP;
    }
}
class LearnToday 
{
    use Learn;
}

$Learn = new LearnToday();
$Learn->learnOOP();