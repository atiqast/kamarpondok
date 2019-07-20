<?php include "header.php"; ?>
<div class="form-top">
	<h3>Tambah data Kamar</h3>
	<form method="POST" action="" class="col-sm-8">
			<div class="form-group">
				<label class="control-label col-sm-6">Kamar</label>
				<div class="col-sm-6">
					<input type="text" name="namakmr" maxlength="40" class="form-control" />
				</div>
			</div>

			<div class="form-group">
              <label class="control-label col-sm-6">Daya Tampung:</label>
              <div class="col-sm-6">
			  <input id="kt-ada" name="dayatampung" type="radio" value="1" class="custom-control-input" required>
	            	<label class="custom-control-label" for="kt-ada">Satu</label>
	            	<input id="kt-kosong" name="dayatampung" type="radio" value="2" class="custom-control-input" required>
	            	<label class="custom-control-label" for="kt-kosong">Dua</label>
                </div>
              </div>

			<div class="form-group">
	          	<label class="control-label col-sm-6">Karpet:</label>
	          	<div class="col-sm-6">
	            	<input id="kt-ada" name="karpet" type="radio" value="Y" class="custom-control-input" required>
	            	<label class="custom-control-label" for="kt-ada">Ada</label>
	            	<input id="kt-kosong" name="karpet" type="radio" value="T" class="custom-control-input" required>
	            	<label class="custom-control-label" for="kt-kosong">Kosong</label>
	          	</div>
			</div>

			<div class="form-group">
	        	<label class="control-label col-sm-6">Kasur:</label>
	          	<div class="col-sm-6">
					<input id="kr-ada" name="kasur" type="radio" value="Y" class="custom-control-input" required>
	            	<label class="custom-control-label" for="kr-ada">Ada</label>
	            	<input id="kr-kosong" name="kasur" type="radio" value="T" class="custom-control-input" required>
	            	<label class="custom-control-label" for="kr-kosong">Kosong</label>
	          	</div>
	        </div>

			<div class="form-group">
	            <label class="control-label col-sm-6">Almari:</label>
	            <div class="col-sm-6">
	                <input id="a-ada" name="almari" type="radio" value="Y" class="custom-control-input" required>
	                <label class="custom-control-label" for="a-ada">Ada</label>
	                <input id="a-kosong" name="almari" type="radio" value="T"q class="custom-control-input" required>
	                <label class="custom-control-label" for="a-kosong">Kosong</label>
	            </div>
	        </div>

			<div class="form-group">
	            <label class="control-label col-sm-6">Keterangan:</label>
	            <div class="col-sm-6">
	            	<textarea class="form-control" rows="5" name="keterangan" id="keterangan"></textarea>
	            </div>
	        </div>
		<input type="submit" value="Simpan" class="btn btn-primary" />
	</form>
</div>
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