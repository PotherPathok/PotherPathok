<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$title = $_POST['title'];
$details = $_POST['details'];
$image = $_FILES['book-image']['name'];

// Save the book details and image to your database
// Ensure you validate and sanitize inputs properly

// Example code for uploading image
move_uploaded_file($_FILES['book-image']['tmp_name'], 'uploads/' . $image);

// Redirect or show a success message
header('Location: admin-books.html');
}
?>