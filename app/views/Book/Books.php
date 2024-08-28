<div>
    <h1>All Books</h1>
    <!-- Table to display all books -->
    <table border="1">
        <thead>
            <!-- Table headers -->
            <th>ID</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date Added</th>
            <th colspan="3">Actions</th>
        </thead>
        <!-- Loop through each book in the data array -->
        <?php foreach ($data['books'] as $book) : ?>
            <tr>
                <!-- Display book details -->
                <td><?= $book['id'] ?></td>
                <td><?= $book['isbn'] ?></td>
                <td><?= $book['title'] ?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['date_added'] ?></td>
                <!-- Action links for each book -->
                <td><a href="book/delete?id=<?= $book['id']; ?>">Delete</a></td>
                <td><a href="book/update?id=<?= $book['id']; ?>">Update</a></td>
                <td><a href="book?id=<?= $book['id']; ?>">View</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- Link to add a new book -->
    <a href="book/add">Add new book</a>
</div>