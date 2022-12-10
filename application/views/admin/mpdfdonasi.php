<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    Tanggal Cetak : <?= date ('d F Y');?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border :1 mm solid #000000;" cellpadding="8">
        <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Id Barang</th>
            <th>Penerima</th>
            <th>Jenis Barang</th>
            <th>Nama Barang</th>
            <th>Tampak Depan</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        foreach($tb_donasi as $ds) :?>
        <tr>
            <td><?php echo $ds->tanggal_donasi ?></td>
            <td><?php echo $ds->nama_donatur ?></td>
            <td><?php echo $ds->nohp ?></td>
            <td><?php echo $ds->alamat ?></td>
            <td><?php echo $ds->id_barang ?></td>
            <td><?php echo $ds->nama_penerima ?></td>
            <td><?php echo $ds->jenis_barang ?></td>
            <td><?php echo $ds->nama_barang ?></td>
            <td><img src="<?php echo base_url() . '/barangdonasi/'. $ds->gb_depan; ?>" width="100"></td>
        </tr>
        <?php $i++;
        endforeach; ?>
        </tbody>
        </table>
</body>

</html>

