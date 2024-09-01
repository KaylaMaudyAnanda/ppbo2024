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

class Publisher
{
    public $name;
    public $address;
    public $phone;

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
}
$author = new Author();
$author->name = "MARK MANSON";
$author->description = "Penulis Buku";

$publisher = new Publisher();
$publisher->name = "HARPERONEE";
$publisher->address = "JL. PALMERAH BARAT NO. 33-37, JAKARTA 10270";
$publisher->setPhone("02153698098");

$book = new Book();
$book->isbn = "978-602-452-698-6";
$book->title = "SEBUAH SENI UNTUK BERSIKAP BODO AMAT";
$book->description = "PENDEKATAN YANG WARAS DEMI MENJALANI HIDUP YANG BAIK";
$book->category = "NONFIKSI";
$book->language = "INDONESIAN";
$book->numberOfPage = 246;
$book->author = $author;
$book->publisher = $publisher;

$book->showAll();

$book->detail("978-602-452-698-6");

echo "Publisher Phone: " . $publisher->getPhone() . "\n";
