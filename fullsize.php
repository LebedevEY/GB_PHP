<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title><?= $_GET['img'] ?></title>
</head>

<body>
    <?php
        require "config.php";

        $sql_set = "update images set views = views +1 where name = '{$_GET['img']}'";
        $sql_get = "select views from images where name = '{$_GET['img']}'";
        $res_set = mysqli_query($connect, $sql_set);
        $res_get = mysqli_query($connect, $sql_get);
        $views = mysqli_fetch_assoc($res_get);

    ?>
    <div class="img_wrapper">
        <img style="max-width: 1080px;" class="fullsize_img" src="/img/<?= $_GET['img'] ?>" alt="image">
        <p class="img_text">Количество просмотров: <span style="color: white"><?= $views['views'] ?></span></p>
    </div>
</body>

</html>