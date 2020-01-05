<?php


namespace App\Classes;

use App\Interfaces\ImageInterface;

class RealImage implements ImageInterface
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($fileName);
    }


    public function display()
    {
        echo "Displaying <br>" . $this->fileName;
    }

    private function loadFromDisk(string $fileName)
    {
        echo "Loading  $this->fileName... <br>";
    }
}

