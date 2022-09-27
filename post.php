<?php

$conn = mysqli_connect("localhost", "loren-practice", "pm-loren", "posts");

if(!$conn) {
    echo "Error Connection";
};

//Get all Post Title
$sql = "SELECT * from posts";
$query = mysqli_query($conn, $sql);

//Add New Post
if(isset($_POST['submit'])) {
    $new_post = $_POST['editor'];
    $category = $_POST['category'];
    $title = htmlspecialchars($_POST['title']);
    $sql = "INSERT INTO posts(title, post, category) VALUES('$title', '$new_post', '$category')";
    $query = mysqli_query($conn, $sql);

    header("Location: http://localhost:8080/xampp/blogging-project/index.php");
    };

//Get Single Post
if(isset($_REQUEST['id'])) {
    $id = htmlspecialchars($_REQUEST['id']);
    $sql = "SELECT * from posts WHERE id = $id";
    $single_post = mysqli_query($conn, $sql);
    $single_blog_post = mysqli_fetch_assoc($single_post);
};

//Update
if(isset($_REQUEST['update'])) {
    $id = htmlspecialchars($_REQUEST['id']);
    $updated_title = htmlspecialchars($_REQUEST['title']);
    $updated_post = $_REQUEST['editor'];
    $updated_category = htmlspecialchars($_REQUEST['category']);

    $sql = "UPDATE posts SET title = '$updated_title', post = '$updated_post', category = '$updated_category' WHERE id = $id";
    $single_blog_post = mysqli_query($conn, $sql);

    header("Location: http://localhost:8080/xampp/blogging-project/single-post.php?id=$id");
};
?>