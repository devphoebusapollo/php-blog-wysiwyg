<?php
include_once 'post.php';
include './utilities/header.php';
?>

<div class="wrapper">
    <h1><?php echo $single_blog_post['title'] ?></h1>
    <?php echo timeago($single_blog_post['createdAt']);?>
    <div class="post"><?php echo $single_blog_post['post'] ?></div>
    <a
        href="http://localhost:8080/xampp/blogging-project/edit-post.php?id=<?php echo $single_blog_post['id'] ?>">Edit</a>
</div>

<?php include './utilities/footer.php'; ?>