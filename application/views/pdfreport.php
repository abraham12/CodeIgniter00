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
				
				<br/>
				<br/>
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
								$kTotal=$dTotal=0;
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
										$kTotal+=$hasil[$i]['Kredit'];
										$dTotal+=$hasil[$i]['Debet'];
								}
								echo "
									<tr>
											<td>
											</td>
											<td>
											</td>
											<td>
												Total:
											</td>
											<td>
												".$dTotal."
											</td>
											<td>
												".$kTotal."
											</td>
									</tr>
								";
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