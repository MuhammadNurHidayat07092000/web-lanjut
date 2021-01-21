<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Blog</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">
    <style>
        body {
            padding: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text text-center">Edit Data</h2>
        <hr>
        <?php foreach ($blog as $data) { ?>
            <form action="<?= base_url('blog/ubahData'); ?>" method="post">

                <input type="hidden" name="id" id="id" value="<?= $data->id; ?>">
                <div class="form-group">
                    <label for="judul">JUDUL</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="<?= $data->judul; ?>">
                </div>

                <div class="form-group">
                    <label for="isi">ISI</label>
                    <textarea name="isi" id="isi" cols="30" rows="5" class="form-control"><?= $data->isi; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="penulis">PENULIS</label>
                    <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $data->penulis; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                    <a href="<?= base_url('blog/tampilData'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        <?php } ?>
    </div>
</body>