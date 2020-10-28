<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Blog</title>
    
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    
    <style>
    
    body{
        padding: 20px;
    }
    </style>
</head>
<body>
    <h4 class="text text-center">Halaman Tampil</h4>
    <table class="table table-bordered">
        <thead class="text text-center">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php 
        $no = 1;
        foreach ($isi as $data ) { ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data->judul; ?></td>
                <td><?= $data->isi; ?></td>
                <td><?= $data->penulis; ?></td>
                <td></td>
            </tr>
        <?php } ?>

        </tbody>

       

    </table>
</body>
</html>