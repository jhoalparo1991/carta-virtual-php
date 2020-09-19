  <?php
$data = $this->msg; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>views/assets/css/style.css">
</head>
<body style="background:#F3E8C0">
<nav class="navbar navbar-expand-lg navbar-dark">
  <img src="<?php echo constant('URL') ?>views/assets/img/logokuty.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  MENÚ
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL'); ?>">HOME</a>
      </li>
      <?php foreach ($data as $rows) { ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL') ?>products/list/<?php echo $rows['id']  ?>"><?php echo $rows['name_category'] ?></a>
      </li>
          <?php } ?>
    </ul>
    <div class="ml-auto">
        <a href="<?php echo constant('URL') ?>admin/" class="nav-link entrar">ENTRAR</a>
    </div>
  </div>
</nav>