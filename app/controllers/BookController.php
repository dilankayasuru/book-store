<?php

class BookController extends Controller
{ 
    // Method to display all books
    public function index()
    {
        // Load the Book model by calling loadModel() method which is inherited from Controller super class
        $bookModel = $this->loadModel("Book");
        // Retrieve all books from the model calling getAllBooks() method from Book class
        $books = $bookModel->getAllBooks();
        // Render the view with the list of books by calling renderView() method which is inherited from Controller super class
        $this->renderView('Book/Books', ["books" => $books]);
    }

    // Method to add a new book
    public function addNewBook()
    {
        // Check if the request method is POST by checking whether the user is clicked submit button
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Load the Book model
            $bookModel = $this->loadModel("Book");
            // Add a new book using data from the POST request
            $bookModel->addBook($_POST["title"], $_POST["author"], $_POST['isbn']);
            // Redirect to the main page where all the books are listed in a table
            header('Location: ../books');
        }
        // Render the view to add a new book
        $this->renderView('Book/AddBook');
    }

    // Method to delete a book by its ID
    public function deleteBook($id)
    {
        // Load the Book model
        $bookModel = $this->loadModel("Book");
        // Delete the book with the given ID
        $bookModel->delete($id);
        // Redirect to the books list page
        header('Location: ../books');
    }

    // Method to display a book by its ID
    public function bookById($id)
    {
        // Load the Book model
        $bookModel = $this->loadModel("Book");
        // Retrieve the book with the given ID
        $book = $bookModel->getBookById($id);
        // Render the view with the book details | $book['title'] is replacing the title of the webpage tab
        $this->renderView('Book/Book', ["book" => $book], $book['title']);
    }

    // Method to update a book by its ID
    public function updateBook($id)
    {
        // Load the Book model
        $bookModel = $this->loadModel("Book");
        // Check if the request method is POST
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Update the book with the given ID using data from the POST request
            $bookModel->update($id, $_POST['title'], $_POST['author'], $_POST['isbn']);
            // Redirect to the books list page
            header('Location: ../books');
        }
        // Retrieve the book with the given ID
        $book = $bookModel->getBookById($id);
        // Render the view to update the book
        $this->renderView('Book/UpdateBook', ["book" => $book]);
    }
}