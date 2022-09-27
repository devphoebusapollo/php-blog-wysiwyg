<?php

include_once 'post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP Blog</title>
</head>
<body>
    <div>
        <?php foreach($query as $q) {?>
        <div>
            <a href="single-post.php?id=<?php echo $q['id'] ?>"><?php echo $q['title'] ?></a>
        </div>
        <?php } ?>
    </div>
</body>
</html>