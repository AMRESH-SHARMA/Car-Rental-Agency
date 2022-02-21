<?php include("inc/header.php");?>
<div class="container">  
<div class="jumbotron">
<h2 class="display-3" style="text-align: centre;">WELCOME</h2>
<hr>
    <div class="my-4">
    <div class="row">
    <div class="col-lg-4">
    <?php echo anchor("Form","CUSTOMER", ['class'=>'btn btn-primary']);?>
    </div>
    <div class="col-lg-4">
    <?php echo anchor("Formb","AGENCY", ['class'=>'btn btn-primary']);?>
    </div>
    <div class="col-lg-4">
    <?php echo anchor("Form/car_av_btn","Available Cars To Rent", ['class'=>'btn btn-primary']);?>
    </div>
    </div>
    </div> 
</div>
<?php include("inc/footer.php");?>
