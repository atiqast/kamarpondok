<?php include "header.php"; ?>

<h3>Tambah data Kamar dan Pembina <?=$gen?></h3>
<form method="POST" action="">
	<table class="table table-responsive table-bordered">
		<label>Kamar</label>
		<input type="text" name="namakmr" maxlength="40" class="form-control" />
		<label>Daya tampung</label>
		<input class="form-control" type="text" name="dayatampung">
		<label>karpet</label>
		<input class="form-control" type="text" name="karpet">
		<label>kasur</label>
		<input class="form-control" type="text" name="kasur">
		<label>almari</label>
		<input class="form-control" type="text" name="almari">
		<textarea name="keterangan" id="" cols="30" rows="10"></textarea>
	<input type="submit" value="Simpan" class="btn btn-primary" />
</form>

<!-- untuk memproses form -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$namakmr = $_POST['namakmr'];
	$dayatampung = $_POST['dayatampung'];
	$karpet = $_POST['karpet'];
	$kasur = $_POST['kasur'];
	$almari = $_POST['almari'];
	$keterangan = $_POST['keterangan'];
	
	if($namakmr=='' || $dayatampung=='' || $karpet=='' || $kasur=='' || $almari==''){
		echo "Form belum lengkap!!!";		
	}else{
		//simpan data
		$simpan = mysqli_query($konek, "INSERT INTO kamar(namakmr,dayatampung,karpet,kasur,almari,keterangan)
						VALUES ('$namakmr','$dayatampung','$karpet','$kasur','$almari','$keterangan')");
		if(!$simpan){
			echo "Simpan data gagal!!!";
		}else{
			header('location:tampil_kamar.php');
		}
	}
}
?>

<?php include "footer.php"; ?>