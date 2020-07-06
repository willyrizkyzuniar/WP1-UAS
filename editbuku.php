<?php
$edit = $mysqli->query("SElECT * FROM buku where id='$_GET[id]'");
$e = mysqli_fetch_array($edit);

?>
<form name="form_mahasiswa" action="home.php?page=updateBuku" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $e['id']; ?>">
		<label for="kode">Kode Buku</label>
		<input type="text" class="form-control" id="kode" placeholder="Input Kode Buku" name="kode" required value="<?php echo $e['kode']; ?>">
	</div>

	<div class="form-group">
		<label for="judul_buku">Judul</label>
		<input type="text" class="form-control" id="judul_buku" placeholder="Input Buku" name="judul_buku" required value="<?php echo $e['judul_buku']; ?>">
	</div>

	<div class="form-group">
		<label for="penerbit">Penerbit</label>
		<input type="text" class="form-control" id="penerbit" placeholder="Input Penerbit Buku" name="penerbit" required value="<?php echo $e['penerbit']; ?>">
	</div>

	<div class="form-group">
		<label for="jenis_buku">Jenis Buku</label>
		<select name="jenis_buku" class="form-control" id="jenis_buku" name="jenis_buku" required>
			<option value="<?php echo $e['jenis_buku']; ?>"><?php echo $e['jenis_buku']; ?></option>
			<option value="Novel">Novel</option>
			<option value="Ensiklopedia">Ensiklopedia</option>
			<option value="Karya Ilmiah">Karya Ilmiah</option>
			<option value="Biografi">Biografi</option>
		</select>
	</div>

	<div class="form-group">
		<label for="referensi">Referensi</label>
		<textarea class="form-control editor" id="referensi" placeholder="Referensi" name="referensi" required><?php echo $e['referensi']; ?></textarea>
	</div>

	<div class="form-group">
		<label for="Gambar">Input Foto Buku</label>
		<input type="file" id="gambar" name="gambar" class="form-control">
		<span><?php echo $e['gambar']; ?></span>
	</div>



	<div class="form-group">
		<button type="reset" class="btn btn-danger">Reset</button>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>