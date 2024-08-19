<?php
class Book {
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        if($book->getAvailableCopies() >0){
            $book->borrowBook();
        }
        else{
            echo 'No copies available';
        }
        
        // if ($book->borrowBook()) {
        //     echo $this->name . " successfully borrowed '" . $book->getTitle();
        // } else {
        //     echo $this->name . " could not borrow '" . $book->getTitle() . "' because it's out of stock.";
        // }
    }

    public function returnBook(Book $book) {
        $book->returnBook();
        // echo $this->name . " successfully returned '" . $book->getTitle() . "'.<br>";
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() .PHP_EOL;
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() .PHP_EOL;

