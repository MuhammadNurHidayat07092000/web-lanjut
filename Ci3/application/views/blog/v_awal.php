<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Blog</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

    <style>
        body {
            background-image: url('./../assets/bg/p3.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Blog/tampilData'); ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>