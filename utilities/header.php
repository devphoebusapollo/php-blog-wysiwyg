<?php require_once('./utilities/env.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js'></script>
    <script src="./scripts/editor.js"></script>
</head>
<body>
    <nav>
        <ul>
            <a href=<?php echo "$domain/index.php" ?>><li>Home</li></a>
            <a href=<?php echo "$domain/new-post.php" ?>><li>New Post</li></a>
        </ul>
    </nav>