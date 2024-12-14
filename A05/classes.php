<?php

class Island
{
    public $name;
    public $shortDescription;
    public $longDescription;
    public $content;
    public $image;
    public $islandperso_image;
    public $title;

    // Static variable to track if the island name has been printed
    private static $displayedNames = [];

    public function __construct($name, $shortDescription, $longDescription, $content, $image, $islandperso_image, $title = [])
    {
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;
        $this->content = $content;
        $this->image = $image;
        $this->islandperso_image = $islandperso_image;
        
        $this->title = $title;
    }

    public function generateCard()
    {
        // Thank you ChanChan and GPT for this one. Di ko kasi talaga alam kung paano gagawin yung part na isa lang yung maloloop for 
        // the name
        if (!in_array($this->name, self::$displayedNames)) {
            self::$displayedNames[] = $this->name; 
            $nameOutput = '<h1 class="text-center mt-5">' . $this->name . '</h1>
            <div class="mb-4">
                <p class="content-text text-center">' . $this->shortDescription . '</p>
                <p class="content-text ">' . $this->longDescription . '</p>
            </div>';
            
        } else {
            $nameOutput = ''; 
        }

        return $nameOutput . '

            <h5 class="text-center text-muted">' . $this->title . '</h5> 
            <img class="mb-3" src="' . $this->image . '" alt="">
            <div class="mb-4">
                <p class="content-text">' . $this->content . '</p>
            </div>
        ';
    }
}