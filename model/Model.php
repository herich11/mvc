<?php
include_once("model/Book.php");
include_once("model/Author.php");
include_once("model/Price.php");

class Model
{
    public function getBookList()
    {
        return array(
            "Jungle Book" => new Book("Jungle Book", "Kipling", "A classic book.", "175"),
            "Moonwalker" => new Book("Moonwalker", "Walker", "", "175"),
            "PHP for Dummies" => new Book("PHP for Dummies", "Guy", "", "175")
        );
    }
    public function getBook($title)
    {
        $allBooks = $this->getBookList();
        return $allBooks[$title];
    }

    public function getAuthorList()
    {
        return array(
            "Kipling" => new Author("Kipling", "25", "New York"),
            "Walker" => new Author("Walker","35", "London"),
            "Guy" => new Author("Guy","22", "Tokyo")
        );
    }
    public function getAuthor($author)
    {
        $allAuthors = $this->getAuthorList();
        return $allAuthors[$author];
    }

    public function getPriceList()
    {
        return array(
            "175" => new Price ("175 IDR"),
            "175" => new Price ("175 Dollar"),
            "175" => new Price ("175 Yen")
        );
    }
     public function getPrice($price)
    {
        $allPrices = $this->getPriceList();
        return $allPrices[$price];
}
}