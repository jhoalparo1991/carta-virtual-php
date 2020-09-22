<?php 
	$enterprise = new Home();
	$data = $enterprise->getEnterprise();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo constant('URL') ?>assets/css/style.css">
<div class="container py-4">
	<div class="row">
		<div class="col-sm-10 col-md-6 col-lg-6 mx-auto col-campus">
			<?php foreach ($data as $row) { ?>
			<a href="<?php echo constant('URL');?>main/campus/<?php echo $row['id'] ?>" class="btn btn-info btn-block mb-4 campus-link">
				<?php echo $row['name_enterprise'] ?>
			</a>
			<?php }?>
		</div>
	</div>
</div>
<?php include_once './includes/footer.php' ?>
</body>
</html>