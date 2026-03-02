<?php

require_once 'src/Models/BookModel.php';

if (isset($_POST['isbn'])) {
    $isbn = $_POST ['isbn'];

    $book = getBookByID($conn, $isbn);

    if (!$book) {
        die ("Book not found");
    
    } else {
        die ("No ISBN Provided");
}
}

$books =[];

if (isset($_POST['query']) && !empty(trim($_POST['query']))) {
    $item = $_POST['query'];
    $books = searchBooks($conn, $item);
} else {
    $sql = "SELECT * FROM book ORDER BY DESC";
    $books = mysqli_query($conn, $sql);
}

