<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Bank Id</th>
                        <th>Bank Name</th>
                        
                    </tr>
                    <?php
                    foreach ($all_bank as $v_bank) {
                        ?>
                    </thead>   
                    <tbody>
                        <tr>
                            <td><?php echo $v_bank->bank_id ?></td>
                            <td class="center"><?php echo $v_bank->bank_name ?></td>
                            <td class="center">
                            </td>
                            <td class="center">
                               <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/edit_bank/<?php echo $v_bank->bank_id; ?>"title="edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_bank/<?php echo $v_bank->bank_id; ?>" title="delet" onclick="return check_delete();">
                                 <i class="icon-trash icon-white"></i> 

                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->