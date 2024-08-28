<?php

// Define a class named Book this will be the Book model
class Book
{

    // Declare a private property to hold the database connection
    private $db;

    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new instance of the Database class and assign it to $db
        $this->db = new Database();
    }

    // Method to retrieve all books from the database
    public function getAllBooks()
    {
        // Prepare a SQL query to select all records from the book table
        $this->db->query("SELECT * FROM book");
        // Execute the prepared query
        $this->db->execute();
        // Return the results of the query
        return $this->db->results();
    }

    // Method to add a new book to the database
    public function addBook($title, $author, $isbn)
    {
        // Prepare a SQL query to insert a new record into the book table
        $this->db->query("INSERT INTO book (isbn, title, author) VALUES (:isbn, :title, :author)");
        // Bind the isbn parameter to the query
        $this->db->bind(':isbn', $isbn);
        // Bind the title parameter to the query
        $this->db->bind(':title', $title);
        // Bind the author parameter to the query
        $this->db->bind(':author', $author);
        // Execute the prepared query
        $this->db->execute();
    }

    // Method to update an existing book in the database
    public function update($id, $title, $author, $isbn)
    {
        // Prepare a SQL query to update a record in the book table
        $this->db->query("UPDATE book SET isbn=:isbn, title=:title, author=:author WHERE id=:id");
        // Bind the isbn parameter to the query
        $this->db->bind(':isbn', $isbn);
        // Bind the title parameter to the query
        $this->db->bind(':title', $title);
        // Bind the author parameter to the query
        $this->db->bind(':author', $author);
        // Bind the id parameter to the query
        $this->db->bind(':id', $id);
        // Execute the prepared query
        $this->db->execute();
    }

    // Method to retrieve a book by its ID from the database
    public function getBookById($id)
    {
        // Prepare a SQL query to select a record from the book table by ID
        $this->db->query("SELECT * FROM book WHERE id=:id");
        // Bind the id parameter to the query
        $this->db->bind(':id', $id);
        // Execute the prepared query
        $this->db->execute();
        // Return the result of the query
        return $this->db->result();
    }

    // Method to delete a book from the database by its ID
    public function delete($id)
    {
        // Prepare a SQL query to delete a record from the book table by ID
        $this->db->query("DELETE FROM book WHERE id=:id");
        // Bind the id parameter to the query
        $this->db->bind(':id', $id);
        // Execute the prepared query
        $this->db->execute();
    }
}
