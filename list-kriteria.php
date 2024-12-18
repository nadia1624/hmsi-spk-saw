<?php
require_once('includes/init.php');
$page = "Kriteria";
require_once('template/header.php');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Data Kriteria</h1>

	<a href="tambah-kriteria.php" class="btn btn-primary no-focus">
    <i class="fa fa-plus"></i> Tambah Data
</a>
</div>

<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
$msg = '';
switch ($status):
	case 'sukses-baru':
		$msg = 'Data berhasil disimpan';
		break;
	case 'sukses-hapus':
		$msg = 'Data behasil dihapus';
		break;
	case 'sukses-edit':
		$msg = 'Data behasil diupdate';
		break;
endswitch;

if ($msg) :
	echo '<div class="alert alert-info">' . $msg . '</div>';
endif;
?>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold"><i class="fa fa-table"></i> Daftar Data Kriteria</h6>
	</div>
	<div class="card-body">
	<div class="card-header py-3">
                        <h4>Petunjuk Pengisian:</h4>
                        <ul>
                        <li>Pastikan Seluruh Kriteria memiliki bobot kriteria 100% atau 1</li>
                        <li>Untuk Type Kriteria, Benefit merupakan Kriteria yang semakin besar nilainya, semakin diutamakan dalam perhitungan SAW. Contoh: Keuntungan, keuntungan penjualan, atau nilai performa. Serta Cost merupakan Kriteria yang semakin kecil nilainya, semakin diutamakan dalam perhitungan SAW. Contoh: Biaya, waktu, atau jumlah kerugian.</li>
                        <li>Untuk cara penilaian dapat menginputkan langsung dengan memilih <strong>Input Langsung</strong>atau membuat sub kriteria dengan memilih <strong>Pilihan Sub-Kriteria</strong></li>
                    </ul>
                    </div>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
					<tr align="center">
						<th>No</th>
						<th>Nama Kriteria</th>
						<th>Type</th>
						<th>Bobot</th>
						<th>Cara Penilaian</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					$query = mysqli_query($koneksi, "SELECT * FROM kriteria ORDER BY id_kriteria ASC");
					while ($data = mysqli_fetch_array($query)) :
					?>
						<tr align="center">
							<td><?php echo $no; ?></td>
							<td align="left"><?php echo $data['nama']; ?></td>
							<td><?php echo $data['type']; ?></td>
							<td><?php echo $data['bobot']; ?></td>
							<td><?php echo ($data['ada_pilihan']) ? 'Pilihan Sub Kriteria' : 'Input Langsung'; ?></td>
							<td>
								<div class="btn-group" role="group">
									<a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="edit-kriteria.php?id=<?php echo $data['id_kriteria']; ?>" class="btn btn-warning btn-sm">Edit</a>
									<a data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="hapus-kriteria.php?id=<?php echo $data['id_kriteria']; ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm">Hapus</a>
								</div>
							</td>
						</tr>
					<?php
						$no++;
					endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
require_once('template/footer.php');
?>