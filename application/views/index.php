<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>
	<center><a href="<?php echo site_url('Main/tambah_data'); ?>">Tambah Data</a></center>
	<table border="1" style="margin: 20px auto;">
		<tr>
			<td>NO</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Aktifitas</td>
			<td>Check In</td>
			<td>Check Out</td>
		</tr>

		<?php 
			foreach ($tamu as $tm) {
				$no = 1;
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tm->nama; ?></td>
				<td><?php echo $tm->email; ?></td>
				<td><?php echo $tm->aktifitas; ?></td>
				<td><?php echo $tm->check_in; ?></td>
				<td><?php echo $tm->check_out; ?></td>
			</tr>

			<?php } ?>
	</table>
</body>
</html>