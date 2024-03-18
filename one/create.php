<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "mbts");

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Validate and sanitize the form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    
    // Insert the new post into the database
    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $sql);
}

// Check if the delete button was clicked
if (isset($_POST['delete'])) {
    // Get the post ID and sanitize it
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    
    // Delete the post from the database
    $sql = "DELETE FROM posts WHERE id = $id";
    mysqli_query($conn, $sql);
}

// Retrieve the posts from the database
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

// Display the posts
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<form method='post' action=''>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "<input type='submit' name='delete' value='Delete'>";
    echo "</form>";
}

?>

<!-- Form for creating a new post -->
<form method="post" action="">
    <input type="text" name="title" placeholder="Post title">
    <br>
    <textarea name="content" placeholder="Post content"></textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
 