<?php
error_reporting(0);
function awok($awal,$akhir){
	$range=range($awal,$akhir);
	return $range[rand(0,count($range)-1)];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>ICWR-TECH | Random picker</title>
  </head>
  <body class="container">
		<h1 class="d-flex justify-content-center mt-5">Random picker</h1>
		<form action="" method="post" class="form-group mt-4" enctype="multipart/form-data">
		  <div class="row">
		    <div class="col">
		      <input type="text" name="awal" class="form-control" placeholder="Mulai dari angka">
		    </div>
				<p> <strong>-</strong> </p>
		    <div class="col">
		      <input type="text" name="akhir" class="form-control" placeholder="Sampai angka">
		    </div>
		  </div>
			<input type="submit" name="submit" value="Pick" class="btn btn-primary mt-3">
		</form>
		<strong>*Note: Angka maksimal 9999999</strong>
		<?php
		if ($_POST) {
			$aawal=$_POST['awal'];
			$aakhir=$_POST['akhir'];
			if($aawal && $aakhir){
				if($aawal==$aakhir){
					?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Angka awal & angka akhir tidak boleh sama!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php
				}else {
					?>
					<div class="d-flex justify-content-center">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">Hasil: </h5>
								<h6 class="card-subtitle mb-2 text-muted mt-3"><?php echo awok($_POST['awal'],$_POST['akhir']); ?></h6>
							</div>
						</div>
					</div>
					<?php
				}
				?>
				<?php
			}else {
				?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Angka awal/ angka akhir tidak boleh kosong!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
			}
		}
		 ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
