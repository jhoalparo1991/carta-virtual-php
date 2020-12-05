<?php 

  if(isset($_SESSION['ok'])){
    if($_SESSION['ok'] !== true){
      header('location: '.URL.'home'); 
    }
  }


?>
<?php $route = $data['header']; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?></title>
    <link rel="icon" type="image/png" href="<?php echo constant('URL').'assets/img/logokuty.png'; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo constant('URL').'assets/img/logokuty.png'; ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?=URL?>views/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <img src="<?php echo constant('URL') ?>views/assets/img/logokuty.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  MENÚ
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php foreach($route as $row){?>
      <li class="nav-item active">
        <a class="nav-link" href="<?=URL.'product/category/'.$row['id']?>"><?=$row['name_section']?></a>
      </li>
      <?php }?>
    </ul>
    <div class="ml-auto">
      <ul class="navbar-nav">
          <li class="nav-item">
             <a href="<?=URL.'home/index'?>" class="nav-link entrar">CAMBIAR SEDE</a>
          </li>
          <li class="nav-item">
             <a href="<?=URL.'survey/index/'.$_SESSION['id_enterprise']?>" class="nav-link entrar">ENCUESTA</a>
          </li>
        </ul>
    </div>
  </div>
</nav>
