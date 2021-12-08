<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Галерея</title>
</head>

<body>
    <div class="wrapper">
        <h1 class="header">Галерея</h1>
        <div class="content">
            <?php
            require "config.php";
            $sql = "select * from images order by views desc";
            $res = mysqli_query($connect, $sql);
            while ($data = mysqli_fetch_assoc($res)){
                    ?><a href="fullsize.php/?img=<?= $data['name'] ?>" target="blank"><img width="200px" src="img/<?= $data['name'] ?>" alt="image"></a><?php
            }

            ?>

        </div>
        <div class="upload">
            <form class="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
                <p class="upload_text">Загрузка картинок</p>
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <input id="upload_input" class="upload_input" type="file" name="photo" accept="image/*">
                <label for="upload_input" class="upload_input-label">
                    <img width="24px" src="/icons/save.png" alt="save">
                    <p>Выберите файл</p>
                </label>
                <p style="text-align: center;" id="file_name"></p>
                <input class="upload_button" type="submit" value="Загрузить">
            </form>
        </div>
    </div>

    <script>
        document.getElementById('upload_input').addEventListener('change', function(e) {
            document.getElementById('file_name').innerHTML = this.files[0].name;
        })
    </script>

</body>

</html>