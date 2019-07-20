<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$query = mysqli_query($konek, "SElECT * FROM kamar WHERE idkmr='$id'");
$e = mysqli_fetch_array($query);
?>

<h3>Edit data kamar dan Pembina</h3>
<form method="POST" action="" class="col-sm-8">
	<input type="hidden" name="idkmr" value="<?php echo $e['idkmr']; ?>" maxlength="40"  class="form-control" />
	<div class="form-group">
		<label class="control-label col-sm-6">Kamar</label>
		<div class="col-sm-6">
			<input type="text" name="namakmr" maxlength="40" class="form-control" value="<?php echo $e['namakmr']; ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-6">Daya tampung</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name="dayatampung" value="<?php echo $e['dayatampung']; ?>">
		</div>
	</div>
	<div class="form-group">
	 	<label class="control-label col-sm-6">Karpet:</label>
	   	<div class="col-sm-6">
			<?php
				if ($e['karpet'] == "Y") {
					echo '<input id="kt-ada" name="karpet" type="radio" value="Y" class="custom-control-input" checked>
					<label class="custom-control-label" for="kt-ada">Ada</label>
					<input id="kt-kosong" name="karpet" type="radio" value="T" class="custom-control-input" required>
					<label class="custom-control-label" for="kt-kosong">Kosong</label>';
				} else {
					echo '<input id="kt-ada" name="karpet" type="radio" value="Y" class="custom-control-input" required>
					<label class="custom-control-label" for="kt-ada">Ada</label>
					<input id="kt-kosong" name="karpet" type="radio" value="T" class="custom-control-input"  checked>
					<label class="custom-control-label" for="kt-kosong">Kosong</label>';
				}
			?>
	    </div>
	</div>

	<div class="form-group">
	  	<label class="control-label col-sm-6">Kasur:</label>
	   	<div class="col-sm-6">
			<?php
				if ($e['kasur'] == "Y") {
					echo '<input id="kt-ada" name="kasur" type="radio" value="Y" class="custom-control-input" checked>
					<label class="custom-control-label" for="kt-ada">Ada</label>
					<input id="kt-kosong" name="kasur" type="radio" value="T" class="custom-control-input" required>
					<label class="custom-control-label" for="kt-kosong">Kosong</label>';
				} else {
					echo '<input id="kt-ada" name="kasur" type="radio" value="Y" class="custom-control-input" required>
					<label class="custom-control-label" for="kt-ada">Ada</label>
					<input id="kt-kosong" name="kasur" type="radio" value="T" class="custom-control-input"  checked>
					<label class="custom-control-label" for="kt-kosong">Kosong</label>';
				}
			?>
	   	</div>
	</div>

	<div class="form-group">
	  	<label class="control-label col-sm-6">Almari:</label>
	   	<div class="col-sm-6">
			<?php
				if ($e['kasur'] == "Y") {
					echo '<input id="kt-ada" name="almari" type="radio" value="Y" class="custom-control-input" checked>
					<label class="custom-control-label" for="kt-ada">Ada</label>
					<input id="kt-kosong" name="almari" type="radio" value="T" class="custom-control-input" required>
					<label class="custom-control-label" for="kt-kosong">Kosong</label>';
				} else {
					echo '<input id="kt-ada" name="almari" type="radio" value="Y" class="custom-control-input" required>
					<label class="custom-control-label" for="kt-ada">Ada</label>
					<input id="kt-kosong" name="almari" type="radio" value="T" class="custom-control-input"  checked>
					<label class="custom-control-label" for="kt-kosong">Kosong</label>';
				}
			?>
	   	</div>
	</div>
	          <label class="control-label col-sm-6">Keterangan:</label>
	          <div class="col-sm-6">
	          	<textarea class="form-control" rows="5" name="keterangan" id="keterangan"><?php echo $e['keterangan']; ?></textarea>
	          </div>
	      </div>
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