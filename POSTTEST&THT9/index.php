<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <style>
    </style>
</head>
<body>

<?php
require_once 'user.php';
require_once 'book.php';
require_once 'library.php';

$library = new Library();

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    echo "<p>Welcome, {$user->getName()}!</p>";

    $borrowedBooks = $library->getBorrowedBooks($user);
    if(!empty($borrowedBooks)) {
        echo "<h2>Borrowed Books:</h2>";
        echo "<ul>";
        foreach ($borrowedBooks as $book) {
            echo "<li>{$book->getTitle()}</li>";
        }
        echo "</ul>";
    }

    echo "<h2>Available Books:</h2>";
    $availableBooks = $library->getAvailableBooks();
    if(!empty($availableBooks)) {
        echo "<ul>";
        foreach ($availableBooks as $book) {
            echo "<li>{$book->getTitle()} - <a href='borrow.php?book_id={$book->getId()}'>Borrow</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No available books at the moment.</p>";
    }

    echo "<a href='logout.php'>Logout</a>";
} else {
    include 'login_form.php';
}
?>

</body>
</html>
