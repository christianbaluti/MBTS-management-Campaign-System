<?php
echo '
<!-- Form for creating a new post -->
<form method="post" action="">
    <input type="text" name="title" placeholder="Post title">
    <br>
    <textarea name="content" placeholder="Post content"></textarea>
    <br>
    <input type="submit" name="submit" value="Edit">
</form>';
 
//Check if the Edit post button was clicked


if (isset($_POST['edit'])) {
   
    $id = $_GET['editid'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $title=$row['title'];
    $content=$row['content'];


    if(isset($_POST['edit'])){
        $title=$row['title'];
        $content=$row['content'];
        $sql = "UPDATE users SET title='$title', content='$content' WHERE id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            header('location:create.php');
        }else{
            echo "Something went wrong";
        }
    }
}