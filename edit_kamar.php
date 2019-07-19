<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$query = mysqli_query($konek, "SElECT * FROM kamar WHERE idkmr='$id'");
$e = mysqli_fetch_array($query);
?>

<h3>Edit data kamar dan Pembina <?=$gen?></h3>

<form method="POST" action="">
	<table class="table table-responsive table-bordered">
		<input type="hidden" name="idkmr" value="<?php echo $e['idkmr']; ?>" maxlength="40"  class="form-control" />
		<label>Kamar</label>
		<input type="text" name="namakmr" value="<?php echo $e['namakmr']; ?>" maxlength="40"  class="form-control" />
		<label>Daya tampung</label>
		<input class="form-control" type="text" name="dayatampung" value="<?php echo $e['dayatampung']; ?>">
		<label>karpet</label>
		<input class="form-control" type="text" name="karpet" value="<?php echo $e['karpet']; ?>">
		<label>kasur</label>
		<input class="form-control" type="text" name="kasur" value="<?php echo $e['kasur']; ?>">
		<label>almari</label>
		<input class="form-control" type="text" name="almari" value="<?php echo $e['almari']; ?>">
		<textarea name="keterangan" id="" cols="30" rows="10"><?php echo $e['keterangan']; ?></textarea>
	<input type="submit" value="Simpan" class="btn btn-primary" />
</form>


<!-- untuk memproses form -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['idkmr'];
	$namakmr = $_POST['namakmr'];
	$dayatampung = $_POST['dayatampung'];
	$karpet = $_POST['karpet'];
	$kasur = $_POST['kasur'];
	$almari = $_POST['almari'];
	$keterangan = $_POST['keterangan'];
	
	if($namakmr=='' || $dayatampung=='' || $karpet=='' || $kasur=='' || $almari==''){
		echo "Form belum lengkap!!!";		
	}else{
		//update data
		$update = mysqli_query($konek, "UPDATE kamar SET namakmr='$namakmr',
		dayatampung='$dayatampung',karpet='$karpet',kasur='$kasur',almari='$almari',keterangan='$keterangan' WHERE idkmr='$id'");
		
		if(!$update){
			echo "Update data gagal!!!";
		}else{
			header('location:tampil_kamar.php');
		}
	}
}
?>

<?php include "footer.php"; ?>