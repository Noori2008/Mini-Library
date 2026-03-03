<?php

require_once __DIR__ . '/../../Config/DBConnection.php';

class BookModel extends DBConnection
{
    private $db;

    // The Constructor: This runs the moment you do "new BookModel()"
    public function __construct()
    {
        // Call the parent (DBConnection) to setup the connection
        parent::__construct();
        $this->db = $this->conn; 
    }

    /**
     * Inserts data into two tables: 'book' and 'book_inventory'
     */
    public function insertBook($bookname, $author, $isbn, $category, $copies, $description, $coverBlob = null)
    {
        // Start Transaction (All-or-Nothing)
        $this->db->begin_transaction();

        try {
            // 1. Insert into 'book' table
            $query1 = "INSERT INTO book (bookname, author, isbn, category, description, coverimg) 
                       VALUES (?, ?, ?, ?, ?, ?)";
            $stmt1 = $this->db->prepare($query1);
            $stmt1->bind_param('sssssis', $bookname, $author, $isbn, $category, $description, $coverBlob);
            $stmt1->execute();

            // 2. Insert into 'book_copies' table
            $query2 = "INSERT INTO bookcopies (isbn, copyid) VALUES (?, ?)";
            $stmt2 = $this->db->prepare($query2);
            $stmt2->bind_param('si', $isbn, $copies);
            $stmt2->execute();

            // Commit changes
            $this->db->commit();
            
            $stmt1->close();
            $stmt2->close();
            return true;

        } catch (Exception $e) {
            $this->db->rollback();
            throw new Exception("Failed to save book: " . $e->getMessage());
        }
    }
}