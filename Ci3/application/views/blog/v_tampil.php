<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Blog</title>
</head>
<body>
    <h4>Halaman Tampil</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>JUDUL</th>
                <th>ISI</th>
                <th>PENULIS</th>
                <th>AKSI</th>
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
            </tr>
        <?php } ?>

        </tbody>

       

    </table>
</body>
</html>