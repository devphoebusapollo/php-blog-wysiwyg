<?php
include_once 'post.php';
include './utilities/header.php';
?>

<body>
    <form method="post" action="post.php">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"><br>
        <textarea name="editor" id="mytextarea" placeholder="Write your thoughts..."></textarea>
        <select name="category">
            <option value="motivation">Motivation</option>
            <option value="technical">Technical</option>
        </select>
        <button name="submit" type="submit">Submit</button>
    </form>

<?php include "./utilities/footer.php" ?>