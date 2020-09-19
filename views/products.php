<?php
$items = $this->data;
include_once './views/includes/header.php' ?>
<style>
    .title{
        width: 100%;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .title_section{
        width: 50%;
        margin: 0 auto;
        text-align: center;
        display: block;
        background: #472210;
        color: #fff;
        padding: 20px;
        font-size: 70px;
        font-family: 'Oleo Script', cursive;
        border-radius: 100px;
}
</style>
<div class="container py-2">
    <?php if($this->title != null) {?>
         <h1 class="title"><span class="title_section"><?php echo $this->title;?></span></h1>
     <?php } ?>   
    <div class="row">        
      <?php  foreach($items as $item){ ?>
        <div class="col-md-6 col-sm-12 col-lg-6 mb-2">
            <div class="card">
                <div class="card-body">
                    <legend class="legend">
                       <b><?php  echo $item['name_articles']; ?></b>
                       <span class="float-right price"> <small>$</small><?php echo $item['price1']; ?></span>
                    </legend>
                       <?php  if($item['description'] != null){?>    
                        <p><?php  echo $item['description']; ?> </p>    
                        <?php } ?>
                        <?php if($item['description2'] != null){ ?>    
                        <p><?php echo $item['description2']; ?> </p>    
                        <?php } ?>
                </div>
            </div>
        </div>
            <?php } ?>
    </div>
</div>
<?php include_once './views/includes/footer.php' ?>