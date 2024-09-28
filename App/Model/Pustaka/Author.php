<?php
class Author
{
    public $name;
    public $description;

    public function show()
    {
        echo "Name: {$this->name}\n";
        echo "Description: {$this->description}\n";
    }
}