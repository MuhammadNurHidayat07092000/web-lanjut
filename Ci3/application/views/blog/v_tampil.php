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
    <h4 class="text-center">Halaman Blog</h4>
    <hr>
    <a href="<?= base_url('blog/tambahData') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah Data</a>
    <table class="table table-bordered table-hover table-sm mt-1">
        <thead class="text text-center">
            <tr class="bg-warning">
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Penulis</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 1;
            foreach ($isi as $data) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data->judul; ?></td>
                    <td><?= $data->isi; ?></td>
                    <td><?= $data->penulis; ?></td>
                    <td>
                        <a href="<?= base_url('blog/vUbahData/' . $data->id); ?>" class="fas fa-pencil-alt btn btn-warning"></a><br>
                    </td>
                    <td onclick="javascript: return confirm('Yakin mau hapus?')">
                        <a href="<?= base_url('blog/hapusData/' . $data->id); ?>" class="fas fa-trash btn btn-danger"></a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>