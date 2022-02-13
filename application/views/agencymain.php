<div class="container">  
<div class="jumbotron">
    <br><br>
        <h2 class="display-3" style="text-align: centre;">AGENCY DASHBOARD</h2>
        <hr>
        <div class="my-4">
            <div class="row">
                <div class="col-lg-4">
                    <?php echo anchor("Cart/upload","ADD CARS", ['class'=>'btn btn-primary']);?>
                </div>
                <div class="col-lg-4">
                <?php echo anchor("Cart/view_booking","VIEW BOOKINGS", ['class'=>'btn btn-primary']);?>
                </div>
               
        </div>
        </div> 
    </div>
<?php include("inc/footer.php");?>