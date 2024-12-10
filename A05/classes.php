<?php

class Island
{
    public $name;
    public $shortDescription;
    public $longDescription;
    public $content;
    public $image;
    public $islandperso_image;

    public function __construct($name, $shortDescription, $longDescription, $content, $image, $islandperso_image)
    {
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;
        $this->content = $content;
        $this->image = $image;
        $this->islandperso_image = $islandperso_image;
    }

    public function generateCard()
    {
        return '
                   
            <img class="mb-3" src="' . $this->image. '" alt="">
                <div class="mb-4">
                    <p class="content-text">' . $this->content. '</p>
                </div>
        
        ';
    }
}
