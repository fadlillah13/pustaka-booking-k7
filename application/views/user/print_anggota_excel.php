<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Anggota Perpustakaan Online</center></h3>
<table class="table-data">
<br/>
<thead>
        <tr>
        <th>No</th> 
		<th>Nama</th> 
		<th>Alamat</th> 
		<th>Email</th>
        <th>Bergabung</th> 
        </tr>
    </thead>

    <tbody>
    <?php
    $no=1;
    foreach($anggota as $b){
    ?>
    <tr>
      	<th scope="row"><?= $no++; ?></th> 
		<td><?= $b['nama']; ?></td> 
		<td><?= $b['alamat']; ?></td> 
		<td><?= $b['email']; ?></td> 
		<td><?= date('d F Y', $b['tanggal_input']); ?></td> 
    </tr>
    <?php
    }
    ?>
    </tbody>        
        
      
</body>
</html>