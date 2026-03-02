<?php

require_once 'Config/DBConnection.php';

function getBookByID($conn, $isbn)
{
    $isbn = mysqli_real_escape_string($conn, $isbn);
    $sql = "SELECT * FROM book WHERE id = '$isbn' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    return mysqli_fetch_assoc($result);
}

function searchBooks($conn, $item)
{

    $search = mysqli_real_escape_string($conn, $item);
    $sql = "SELECT * FROM book WHERE bookname LIKE '%$search%' OR author LIKE '%$search%' ORDER BY id DESC";

    return mysqli_query($conn, $sql);
}
