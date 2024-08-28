<div>
    <h1>Update Book</h1>
    <!-- Display the ID of the book being updated -->
    <h2>ID: <?= $book['id']; ?></h2>
    <!-- Form to update book details, using POST method -->
    <form method="POST">
        <fieldset>
            <p>
                <!-- Label and input field for the book ISBN -->
                <label>Title: </label>
                <input type="text" name="isbn" placeholder="<?= $book['isbn']; ?>">
            </p>
        </fieldset>
        <fieldset>
            <p>
                <!-- Label and input field for the book title -->
                <label>Title: </label>
                <input type="text" name="title" placeholder="<?= $book['title']; ?>">
            </p>
        </fieldset>
        <fieldset>
            <p>
                <!-- Label and input field for the book author -->
                <label>Author: </label>
                <input type="text" name="author" placeholder="<?= $book['author']; ?>">
            </p>
        </fieldset>
        <!-- Submit button to update the book details -->
        <button type="submit">Update</button>
    </form>
    <!-- Link to view all books -->
    <a href="../../books">View All Books</a>
</div>