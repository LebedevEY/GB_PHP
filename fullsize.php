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
    <div class="img_wrapper">
        <img style="max-width: 1920px;" class="fullsize_img" src="/img/<?= $_GET['img'] ?>" alt="image">
    </div>
</body>

</html>