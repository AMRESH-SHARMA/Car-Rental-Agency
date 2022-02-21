<div class="col-lg-12">
    <h1 class="page-header">
    Record Of Vehicles</h1>
</div>                        
<div class="col-lg-12">
<a href="<?php echo site_url('Cart/add_car'); ?>" type="button" class="btn btn-xs btn-info">Add New</a>
                                
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr> 
        <th>ID</th>                   
        <th>VEHICLE NUMBER</th>
        <th>VEHICLE MODEL</th>
        <th>SEAT CAPACITY</th>
        <th>RENT</th>
        <th></th>
        <th></th>
        </tr>
        </thead>


    <tbody>                   
        <?php if(count($data)): ?> 
        <?php foreach ($data as $row): ?>
    <tr>    
            <td><?=  $row->id; ?></td>
            <td><?=  $row->vnumber; ?></td>
            <td><?=  $row->vmodel; ?></td>
            <td><?=  $row->seat; ?></td>
            <td>$<?= $row->rent; ?></td>
            <td>
            <?=
            form_open('cart/edit_car'),
            form_hidden('id',$row->id,),
            form_hidden('vnumber',$row->vnumber  ),
            form_hidden('vmodel',$row->vmodel  ),
            form_hidden('seat',$row->seat  ),
            form_hidden('rent',$row->rent  ),
            form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-xs btn-success']),
            form_close();
            ?>
            </td>
            <td>
            <?=
            form_open('cart/del_car'),
            form_hidden('id',$row->id),
            form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-xs btn-danger']),
            form_close();
            ?>
        </td>    
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
    <tr>
        <td colspan="3">Not data available</td>
        </tr>
        <?php endif; ?>
    </tbody>
    </table>
        </div>
        </div>
        </div>              
        </div>
        </div>


