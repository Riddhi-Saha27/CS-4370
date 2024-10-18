<?php

$artist = $_POST['artist'];
$album = $_POST['album'];
$song = $_POST['song'];
$reviewer = $_POST['reviewer'];
$platform = $_POST['platform'];
$rating = $_POST['rating'];
$review = $_POST['review'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Confirmation</title>
</head>
<body>
    <h1>Thank you for entering a review!</h1>

    <h2>Here are the details of your review:</h2>

    
    <p><strong>Artist:</strong> <?= $artist ?></p>
    <p><strong>Album Title:</strong> <?= $album ?></p>
    <p><strong>Song Title:</strong> <?= $song ?></p>
    <p><strong>Reviewer Name:</strong> <?= $reviewer ?></p>
    <p><strong>Streaming Platform:</strong> <?= $platform ?></p>
    <p><strong>Rating:</strong> <?= $rating ?>/5</p>
    <p><strong>Review:</strong> <?= $review ?></p>
</body>
</html>
