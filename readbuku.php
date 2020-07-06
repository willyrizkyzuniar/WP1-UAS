<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>#</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Penerbit</th>
			<th>Jenis Buku</th>
			<th>Referensi</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$no = 0;
		$buku = $mysqli->query("SELECT * FROM buku");
		while ($m = mysqli_fetch_array($buku)) {
			$no++;
		?>

			<?php
			include "pagingbuku.php";
			$p = new paging_mahasiswa;
			$batas = 5;
			$posisi = $p->cariPosisi($batas);
			$buku = $mysqli->query("SELECT * FROM buku ORDER BY id DESC LIMIT $posisi,$batas");
			$no = 0;
			while ($m = mysqli_fetch_array($buku)) {
				$no++;
			?>
				<tr>
					<th scope="row"><?php echo $no; ?></th>
					<td><?php echo $m['kode']; ?></td>
					<td><?php echo $m['judul_buku']; ?></td>
					<td><?php echo $m['penerbit']; ?></td>
					<td><?php echo $m['jenis_buku']; ?></td>
					<td><?php echo $m['referensi']; ?></td>
					<td><img src="images/<?php echo $m['gambar']; ?>" height="50"></td>
					<td>
						<button type="button" class="btn btn-default<?php echo $var ?>"><a href="home.php?page=editBuku&id=<?php echo $m['id']; ?>"><i class="fa fa-pencil"></i> Edit </a></button>
						<button type="button" class="btn btn-danger"><a href="home.php?page=deleteBuku&id=<?php echo $m['id']; ?>" style="color:white;" onclick="return confirm('Anda yakin mau menghapus Data ini?')"><i class="fa fa-trash-o"></i> Hapus </a></button>
					</td>
				</tr>
			<?php
			}
			?>

	</tbody>
</table>

<div class="halaman">
	<nav aria-label="...">
		<ul class="pagination">

		<?php } ?>
		<?php
		$jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM buku"));
		$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		$linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
		echo " <li class='page-item'> $linkHalaman </li>";
		?>

		</ul>
	</nav>
</div>