<?php
    $product = $data['product']; 
    $comment = $data['product'][0];
    $description = $data['product'][0];
    $title = $data['product'][0];

?>
<div class="container py-2">

    <?php if($title != null) {?>
    <div class="alert">
        <h2 class="mx-auto text-center" style="background: #472210; border-radius:20px;padding:5px;"><b class="text-white"><?php echo $title['name_section'];?></b></h2>
    </div>
    <?php } ?>

    <?php if($description != null) {?>
    <div class="alert">
        <p class="mx-auto text-center"><b><?php echo $description['general_description'];?></b></9>
    </div>
    <?php } ?>
    <div class="row">
        <?php  foreach($product as $item){ ?>
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
        <p class="mx-auto text-center"><b><?php echo $comment['comment'];?></b></9>
    </div>
    <?php } ?>
</div>