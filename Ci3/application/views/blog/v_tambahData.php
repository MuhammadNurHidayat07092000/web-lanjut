<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">

    <style>
        body {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text text-center">Tambah Data</h2>
        <hr>
        <form action="<?= base_url('Blog/tambahData'); ?>" method="post">

            <div class="form-group">
                <label for="judul">JUDUL</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>

            <div class="form-group">
                <label for="isi">ISI</label>
                <textarea name="isi" id="isi" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="penulis">PENULIS</label>
                <input type="text" name="penulis" id="penulis" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                <a href="<?= base_url('blog/tampilData'); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>

</body>

</html>