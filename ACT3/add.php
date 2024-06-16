<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Call the addVideo function from functions.php
    addVideo($_POST['title'], $_POST['director'], $_POST['release_year'],  $_POST['casting'],  $_POST['genre'],  $_POST['description']);
    // Display a success message
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Video added successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Video</h3>
    </div>
    <form action="index.php?page=add" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" name="director" placeholder="Enter director" required>
            </div>
            <div class="form-group">
                <label for="release_year">Release Year</label>
                <input type="number" class="form-control" name="release_year" placeholder="Enter release year" max="9999" required>
            </div>
            <div class="form-group">
                <label for="casting">Casting</label>
                <input type="text" class="form-control" name="casting" placeholder="Enter casting" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" name="genre" placeholder="Enter genre" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" placeholder="Enter description" required></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Video</button>
        </div>
    </form>
</div>