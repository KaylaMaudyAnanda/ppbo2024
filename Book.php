<?php
class Book
{
    public $isbn;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll()
    {
        echo "ISBN: {$this->isbn}\n";
        echo "Title: {$this->title}\n";
        echo "Description: {$this->description}\n";
        echo "Category: {$this->category}\n";
        echo "Language: {$this->language}\n";
        echo "Number of Pages: {$this->numberOfPage}\n";
        echo "Author: {$this->author->name}\n";
        echo "Publisher: {$this->publisher->name}\n";
    }
    public function detail($isbn)
    {
        if ($this->isbn == $isbn) {
            return $this->showAll();
        }
        return null;

    
    }
}