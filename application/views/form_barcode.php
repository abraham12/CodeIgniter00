<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Laporan - SoftDroid</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <link rel="stylesheet" href= " <?php echo base_url(); ?>assets/css/bootstrap.css" />
</head>

<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" class="form-inline" action="<?php echo base_url() ?>index.php/barcode/input" method="post">
				<div class="form-group">
					 
					<label for="kodeBarang">
						Kode Barang
					</label>
					<input class="form-control" required name="kodeBarang" id="kodeBarang" type="text" />
				</div>
				<div class="form-group">
					 
					<label for="namaBarang">
						Nama Barang
					</label>
					<input class="form-control" required name="namaBarang" id="namaBarang" type="text" />
				</div>
				<div class="form-group">
					 
					 <select class="form-control">
					 <?php
						$maxSize = count($hasil);
						for($i=0; $i<$maxSize; $i++)
						{
							echo "<option name='jenis' id='jenis' value=".$hasil[$i]['Jenis'].">".$hasil[$i]['Jenis']."</option>";
						}
					?>
					</select> 
				</div>
				<div class="checkbox">
					 
				</div> 
				<button type="submit" class="btn btn-default">
					Save
				</button>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</body>

</html>