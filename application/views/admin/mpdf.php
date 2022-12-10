<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    Tanggal Cetak : <?= date ('d F Y');?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border :0.1mm solid #000000;" cellpadding="8">
        <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Kecamatan</th>
            <th>Alamat</th>
            <th>No HP RT</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        foreach($penerima as $u) :?>
        <tr>
            <td><?= $i; ?></td>
            <td><?php echo $u->nik ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->kecamatan ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->nohprt ?></td>
        </tr>
        <?php $i++;
        endforeach; ?>
        </tbody>
        </table>
</body>

</html>

