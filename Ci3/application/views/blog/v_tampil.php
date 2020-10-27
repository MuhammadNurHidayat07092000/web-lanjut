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
            <th>No</th>
            <th>JUDUL</th>
            <th>ISI</th>
            <th>PENULIS</th>
        </thead>

        <?php 
        $no = 1;
        foreach ($data as $dt): ?>
        
        <tbody>
            <td><?= $no++; ?></td>
            <td><?= $dt->judul; ?></td>
            <td><?= $dt->isi; ?></td>
            <td><?= $dt->penulis; ?></td>            
        </tbody>

        <?php endforeach; ?>
    </table>
</body>
</html>