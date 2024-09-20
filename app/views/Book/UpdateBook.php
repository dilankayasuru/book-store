<div>
    <h1>Update Book</h1>
    <!-- Display the ID of the book being updated -->
    <h2>ID: <?= $book['id']; ?></h2>
    <!-- Form to update book details, using POST method -->
    <form method="POST">
        <fieldset>
            <!-- Label and input field for the book ISBN -->
            <label for="isbn">ISBN: </label>
            <input type="text" name="isbn" placeholder="<?= $book['isbn']; ?>" id="isbn">
        </fieldset>
        <fieldset>
            <!-- Label and input field for the book title -->
            <label for="title">Title: </label>
            <input type="text" name="title" placeholder="<?= $book['title']; ?>" id="title">
        </fieldset>
        <fieldset>
            <!-- Label and input field for the book author -->
            <label for="author">Author: </label>
            <input type="text" name="author" placeholder="<?= $book['author']; ?>" id="author">
        </fieldset>
        <!-- Submit button to update the book details -->
        <button type="submit">Update</button>
    </form>
    <!-- Link to view all books -->
    <a href="<?=BASE_URL?>books">View All Books</a>
</div>