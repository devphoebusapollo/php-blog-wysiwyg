<?php
include_once 'post.php';
include './utilities/header.php';
?>

<form method="post" action="post.php">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo $single_blog_post['title'] ?>"><br>
    <textarea name="editor" id="mytextarea"
        placeholder="Write your thoughts..."><?php echo $single_blog_post['post'] ?></textarea>
    <select name="category">
        <option value="motivation">Motivation</option>
        <option value="technical">Technical</option>
    </select>
    <input type="hidden" name="id" value="<?php echo $single_blog_post['id'] ?>">
    <button name="update" type="submit">Update</button>
</form>

<?php include './utilities/footer.php'; ?>