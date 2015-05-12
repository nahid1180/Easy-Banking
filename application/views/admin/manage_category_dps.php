<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Tables</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Members</h2>
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
                        <th>category id</th>
                        <th>category name</th>
                        <th>publication status</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    foreach ($all_category_dps as $v_category_dps) {
                        ?>
                    </thead>   
                    <tbody>
                        <tr>
                            <td><?php echo $v_category_dps->category_id ?></td>
                            <td class="center"><?php echo $v_category_dps->category_name ?></td>
                            <td class="center">
    <?php
    if ($v_category_dps->publication_status) {
        echo 'published';
    } else {
        echo 'unpublished';
    }
    ?>

                            </td>
                            <td class="center">
                                <?php
                                if ($v_category_dps->publication_status) {
                                    ?>

                                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/unpublished_category_dps/<?php echo $v_category_dps->category_id; ?>" title="unpublished">
                                        <i class="icon-arrow-down"></i>  

                                    </a>
                                <?php
                                } else {
                                    ?>
                                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/published_category_dps/<?php echo $v_category_dps->category_id; ?>" title="published">
                                        <i class="icon-arrow-up"></i>  

                                    </a>  
                                 <?php } ?>
                                <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/edit_category_dps/<?php echo $v_category_dps->category_id; ?>"title="edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_category_dps/<?php echo $v_category_dps->category_id; ?>" title="delet" onclick="return check_delete();">
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