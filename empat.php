<?php
require_once "Author";
require_once "Publisher";
require_once "Book";


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
