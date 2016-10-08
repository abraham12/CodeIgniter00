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
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<h3 class="text-center">
					Laporan SoftDroid
				</h3> 
				<a type="button"  href="<?php echo base_url()?>index.php/laporan/pdf">
					Export PDF
				</a>
				<br/>
				<br/>
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<form role="form" action="<?php echo base_url() ?>index.php/laporan/input" method="post">
							<div class="form-group">
								 
								<label for="nama">
									Nama
								</label>
								<input class="form-control" required name="nama" placeholder="Nama" type="text" value=""/>
							</div>
							<div class="form-group">
								 
								<label for="nominal">
									Nominal
								</label>
								<input class="form-control" required name="nominal" placeholder="Nominal" type="text" value=""/>
							</div>
							<div class="form-group">
								
								<input id="Debet" type="radio"  required name="payment" value="Debet"/>
									<label for="Debet">
										Debet
									</label>
								<br/>
								<input id="Kredit" type="radio" required name="payment" value="Kredit"/>
									<label for="Kredit">
										Kredit
									</label>
							</div>
							
							<button type="submit" class="btn btn-default">
								Tambah
							</button>
						</form>
						<br/>
					</div>
					<div class="col-md-1">
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>
								No.
							</th>
							<th>
								Nama
							</th>
							<th>
								Nominal
							</th>
							<th>
								Debet
							</th>
							<th>
								Kredit
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
								$maxSize = count($hasil);
								for($i=0; $i<$maxSize; $i++)
								{
									echo "<tr>
											<td>
												".$hasil[$i]['No']."
											</td>
											<td>
												".$hasil[$i]['Nama']."
											</td>
											<td>
												".$hasil[$i]['Nominal']."
											</td>
											<td>
												".$hasil[$i]['Debet']."
											</td>
											<td>
												".$hasil[$i]['Kredit']."
											</td>
										</tr>";
								}
						?>
						
					</tbody>
				</table>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</body>

</html>