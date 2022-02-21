<div class="col-lg-12">
    <h1 class="page-header">
    Vehicles Booked</h1>
</div>                        
<div class="myform">


<form method="post" action="<?php echo site_url('Cart/search'); ?>"> 
    <a href="<?php echo site_url('Cart/view_booked'); ?>" class="btn btn-success btn-md form_link mr-auto">View All Bookings</a>
    <div class="row">
    <div class="form-group col-12">
    <label for="email">VEHICLE NUMBER</label>
    <input type="text" id="vnumber" name="vnumber"   class="form-control" > 
    </div>
    <input type="submit" value="Search" class="btn btn-info btn-md ml-auto">
    </div>
</form>
</div>

    
                                
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>                    
        <th>VEHICLE NUMBER</th>
        <th>EMAIL</th>
        <th>DATE</th>
        <th>DAY</th>
        </tr>
        </thead>


    <tbody>                   
        <?php if(count($data)): ?> 
        <?php foreach ($data as $row): ?>
    <tr>    

        <td><?=  $row->vnumber; ?></td>
        <td><?=  $row->email; ?></td>
        <td><?=  $row->date; ?></td>
        <td><?=  $row->day; ?></td>   
    </tr>
        <?php endforeach; ?>
        <?php else: ?>
    <tr>
        <td colspan="4">Not data available</td>
        </tr>
        <?php endif; ?>
    </tbody>
    </table>
        </div>
        </div>
        </div>              
        </div>
        </div>


