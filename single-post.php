<?php

include_once 'post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>
    <div class="wrapper">
        <h1><?php echo $single_blog_post['title'] ?></h1>
        <div class="post"><?php echo $single_blog_post['post'] ?></div>
        <a href="http://localhost:8080/xampp/blogging-project/edit-post.php?id=<?php echo $single_blog_post['id'] ?>">Edit</a>
    </div>
</body>
</html>