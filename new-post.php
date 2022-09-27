<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js'></script>
    <script src="./scripts/editor.js"></script>
</head>

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
</body>

</html>