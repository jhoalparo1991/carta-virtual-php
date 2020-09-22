<?php
$items = $this->data;
$general = isset($items[0]['general_description']) ? $items[0]['general_description'] : null;
$comment = isset($items[0]['comment']) ? $items[0]['comment'] : null;
include_once './includes/header.php' ?>
<div class="container py-2">
    
    <div class="row"> 
       <?php if($this->title != null) {?>
         <h1 class="title mx-auto"><span class="title_section mx-auto"><?php echo $this->title;?></span></h1>
       <?php } ?>  
       <?php if($general != null) {?>
         <div class="alert">
             <p class="text-center"><b><?php echo $general;?></b></p>
         </div>
       <?php } ?>     
      <?php  foreach($items as $item){ ?>
        <div class="col-md-6 col-sm-12 col-lg-6 mb-2 mx-auto">
            <div class="card">
                <div class="card-body">
                    <legend class="legend">
                       <b><?php  echo $item['name_articles']; ?></b>
                       <span class="float-right price"> <small>$</small><?php echo $item['price1']; ?></span>
                    </legend>
                        <p>
                             <?php  if($item['description'] != null){?>    
                        <span><?php  echo $item['description']; ?> </span>    
                        <?php } ?>
                        <?php  if($item['price2'] != null || $item['price2'] !== 0){?>    
                        <span class="float-right price"><?php  echo $item['price2']; ?> </span>    
                        <?php } ?>
                        </p>
                       <p>
                            <b>
                        <?php if($item['description2'] != null){ ?>    
                        <span><?php echo $item['description2']; ?> </span>    
                        <?php } ?>
                        </b>
                       </p>
                       <p>
                            <b>
                        <?php if($item['description3'] != null){ ?>    
                        <span><?php echo $item['description3']; ?> </span>    
                        <?php } ?>
                        </b>
                       
                       </p>
                </div>
            </div>
        </div>
            <?php }?> 
    </div>
            <?php if($comment != null) {?>
         <div class="alert">
             <p class="mx-auto text-center"><b><?php echo $comment;?></b></9>
         </div>
       <?php } ?>
</div>
<?php include_once './includes/footer.php' ?>