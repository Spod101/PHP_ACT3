<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['id'])) {
    $video = getVideoById($_GET['id']);
    if ($video !== null) {
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Video Details</h3>
    </div>
    <div class="card-body">
        <p><strong>Title:</strong> <?php echo htmlspecialchars($video['title']); ?></p>
        <p><strong>Director:</strong> <?php echo htmlspecialchars($video['director']); ?></p>
        <p><strong>Release Year:</strong> <?php echo htmlspecialchars($video['release_year']); ?></p>  
        <p><strong>Casting:</strong> <?php echo htmlspecialchars($video['casting']); ?></p>
        <p><strong>Genre:</strong> <?php echo htmlspecialchars($video['genre']); ?></p>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($video['description']); ?></p>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-secondary" onclick="history.back();">Back</button>
    </div>
</div>
<?php
    } else {
        echo '<div class="alert alert-warning">Video not found.</div>';
    }
} else {
    echo '<div class="alert alert-danger">No video ID specified.</div>';
}
?>