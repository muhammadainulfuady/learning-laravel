<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>404 | ABOUT AREA</title>
</head>

<body>
    <div class="container">
        @include("navbar")
        <div class="non-container">
            <h1>Biodata <?= $name ?> </h1>
            <img src="img/<?= $image ?>" alt="" width="500">
            <ul>
                <li><?= $name ?></li>
                <li><?= $email ?></li>
                <li><?= $nim ?></li>
                <li><?= $prodi ?></li>
            </ul>
        </div>
    </div>
</body>

</html>