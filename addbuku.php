<form name="form_buku" action="home.php?page=createbuku" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="kode">Kode Buku</label>
		<input type="text" class="form-control" id="kode" placeholder="Input Kode Buku" name="kode" required>
	</div>

	<div class="form-group">
		<label for="judul_buku">Judul</label>
		<input type="text" class="form-control" id="judul_buku" placeholder="Input Judul Buku" name="judul_buku" required>
	</div>

	<div class="form-group">
		<label for="penerbit">Penerbit</label>
		<input type="text" class="form-control" id="penerbit" placeholder="Input Penerbit Buku" name="penerbit" required>
	</div>

	<div class="form-group">
		<label for="jenis_buku">Jenis Buku</label>
		<select name="jenis_buku" class="form-control" id="jenis_buku" name="jenis_buku" required>
			<option value="">Pilih Jenis Buku</option>
			<option value="Novel">Novel</option>
			<option value="Ensiklopedia">Ensiklopedia</option>
			<option value="Karya Ilmiah">Karya Ilmiah</option>
			<option value="Biografi">Biografi</option>
		</select>
	</div>

	<div class="form-group">
		<label for="referensi">Referensi</label>
		<textarea class="form-control editor" id="referensi" placeholder="Referensi" name="referensi" required></textarea>
	</div>


	<div class="form-group">
		<label for="Gambar">Input Foto</label>
		<input type="file" class="form-control" id="gambar" name="gambar" required>
	</div>


	<div class="form-group">
		<button type="reset" class="btn btn-danger">Reset</button>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>

</form>