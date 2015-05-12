<div id="content" class="span10">
    <!-- content starts -->


    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url() ?>super_admin">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo base_url() ?>super_admin/category">Category</a>
            </li>
        </ul>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div>
                <h3>
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_description_islami" method="post">
                    <fieldset>
                       <legend>Add Islamic Description</legend>
                         <div class="control-group">
                            <label class="control-label" for="textarea2">Savings Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="islami_deposit_details"></textarea>
                            </div>
                        </div>
                       <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="btn">Save description</button>

                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>