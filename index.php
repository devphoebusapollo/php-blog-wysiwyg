<?php
include_once 'post.php';
include './utilities/header.php';
?>

<div>
    <?php foreach($query as $q) {?>
    <div>
        <a href="single-post.php?id=<?php echo $q['id'] ?>"><?php echo $q['title'] ?></a>
    </div>
    <?php } ?>
</div>

<?php include './utilities/footer.php'; ?>