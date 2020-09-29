<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaderias Kuty</title>
    <link rel="icon" type="image/png" href="<?php echo constant('URL').'assets/img/logokuty.png'; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=URL?>views/assets/css/style.css">
</head>
	<body>
		<div class="container pt-4">
			<div class="row">
				<div class="col-sm-12 col-md-6 mx-auto">
					<div class="card">
						<div class="card-body">
						<?php foreach($data['enterprise'] as $rows) {?>
							<a 
								class ="btn btn-outline-info btn-block"
							href="<?=URL.'survey/index/'.$rows['id']?>"><?=$rows['name_enterprise']?></a>
						<?php }?>	
						</div>
					</div>
				</div>
			</div>
		</div>