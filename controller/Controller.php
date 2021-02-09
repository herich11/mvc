<?php
include_once("model/Model.php");

class Controller
{
     public $model;

     public function __construct()
     {
          $this->model = new Model();
     }
     public function invoke()
     {
     //      if (!isset($_GET['book'])) {
     //           // no special book is requested, we'll show a list of all available books
     //           $books = $this->model->getBookList();
     //           include 'view/booklist.php';
     //      } else {
     //           // show the requested book
     //           if (!isset($_GET['book'])) {
     //           $book = $this->model->getBook($_GET['book']);
     //           include 'view/viewbook.php';
     //           if (!isset($_GET['author'])) {

     //      }
     // }

     //  public function author()
     //  {
     //      if (!isset($_GET['author'])) {
     //           $authors = $this->model->getAuthorList();
     //           include 'view/authorlist.php';
     //      } else {
     //           $author = $this->model->getAuthor($_GET['author']);
     //           include 'view/viewauthor.php';

          if (isset($_GET['book'])) {
               $book = $$this->model->getBook($_GET['book']);
               include 'view/viewbook.php';
          }
          else if (isset($_GET['author'])) {
               $author = $this->model->getAuthor($_GET['author']);
               include 'view/viewauthor.php';
          }
          else if (isset($_GET['price'])) {
               $price = $this->model->getPrice($_GET['price']);
               include 'view/viewprice.php';
          }
          else {
               $books = $this->model->getBookList();
               include 'view/booklist.php';
          }
     }
}
