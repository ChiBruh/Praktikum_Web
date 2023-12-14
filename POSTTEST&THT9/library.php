<?php
class Library {
    private $users;
    private $books;
    private $borrowedBooks;

    public function __construct() {
    }
    

    public function getAvailableBooks() {
        return [];
     }

    public function getBorrowedBooks($user) {
        if (isset($this->borrowedBooks[$user->getName()])) {
            return $this->borrowedBooks[$user->getName()];
        } else {
            return []; 
        }    }

    public function borrowBook($user, $book) {
        $this->borrowedBooks[$user->getName()][] = $book;
    }
}
?>
