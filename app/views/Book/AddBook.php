<div>
    <h1>Add Book</h1>
    <form method="POST">
        <fieldset>
            <label for="isbn">ISBN No: </label>
            <input type="text" name="isbn" id="isbn">
        </fieldset>
        <fieldset>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title">
        </fieldset>
        <fieldset>
            <label for="author">Author: </label>
            <input type="text" name="author" id="author">
        </fieldset>
        <button type="submit">Add Book</button>
    </form>
    <a href="<?=BASE_URL?>books">View All Books</a>
</div>