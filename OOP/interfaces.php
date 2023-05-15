<?php 

class Notification
{
    const webdev = "Belajar web development php";
}

interface Study
{
    public function personalStudy();
}

class school  implements Study
{
    public function personalStudy()
    {
        echo Notification::webdev;
    }
}

$school = new school();
$school->personalStudy();