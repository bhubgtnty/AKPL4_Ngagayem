<?php include('partials/header.php'); 
include '../config/koneksi.php';
?>

<?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
        

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
        
        ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <table class="table table-bordered">
	<thead>
		<tr>
		<th>No</th>
		<th>Nama Kategori</th>
		<th>aksi</th>
		</tr> 
	</thead>
    <tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM kategori") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $pecah["nama_kategori"]; ?></td>
			<td>
				<a href="update-category.php?id=<?= $pecah['id_kategori']; ?>" class="btn btn-warning btn-xs">ubah</a> | 
				<a href="delete-category.php?id=<?= $pecah['id_kategori']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>

<a href="add-category.php" class="btn btn-primary">Tambah Kategori</a>

                