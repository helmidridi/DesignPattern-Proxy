<?php


namespace App\Classes;

use App\Interfaces\ImageInterface;

class ProxyImage implements ImageInterface
{

    private  $realImage;
    private  $fileName ;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function display()
    {
        if (!$this->realImage) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}

