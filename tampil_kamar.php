<?php include "header.php"; ?>

<h3>Data Kamar pondok</h3>
<a href="tambah_kamar.php" class="btn btn-info"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Kamar</a><p></p>

<?php
	$sql = mysqli_query($konek,"SELECT * FROM kamar WHERE idkmr ORDER BY namakmr asc");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "
			<div class='col-sm-3 col-md-3'>
			<ul class='list-group'>
				<li class='list-group-item'>
				<img src='library/img/gambar.png' class='img-responsive' alt='Image'>
				</li>
				<li class='list-group-item'>$d[namakmr]</li>
				<li class='list-group-item list-data1'>Daya Tampung <div class='block-content'>$d[dayatampung]</div></li>
				<li class='list-group-item list-data'>Karpet <div class='block-content'>$d[karpet]</div></li>
				<li class='list-group-item list-data1'>Kasur <div class='block-content'>$d[kasur]</div></li>
				<li class='list-group-item list-data'>Almari <div class='block-content'>$d[almari]</div></li>
				<li class='list-group-item'>Keterangan<div class='keterangan'>$d[keterangan]<div></li>
				<li class='list-group-item text-center'>
				<a href='edit_kamar.php?id=$d[idkmr]' class='btn btn-info'><i class='glyphicon glyphicon-pencils'></i> Update</a>
				<a href='hapus_kamar.php?id=$d[idkmr]' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i> Hapus</a>
				</li>
			</ul>
			</div>";
$no++;
}
?>

<?php include "footer.php"; ?>