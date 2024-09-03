<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$title = $_POST['title'];
$content = $_POST['content'];

// Save the blog details to your database
// Ensure you validate and sanitize inputs properly

// Redirect or show a success message
header('Location: admin-blogs.html');
}
?>