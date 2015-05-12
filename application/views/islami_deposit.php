<div class="body_wrapper body_color">
  
        <div class="retaire1">Islami Deposit Account....</div>
        <div class="retaire2">Banks List....</div>
        
            <div style="overflow: hidden;height:auto" class="body_wrapper body_color">
                <div>
                   <div>
                        <?php
                        foreach ($all_bank as $v_bank) {
                            ?>
                            <div class="" style="margin-left:80px;float:left;text-align:center;">
                                <div style="margin:15px;">
                                    <img src="<?php echo base_url() . 'images/bank_logo/' . $v_bank->bank_logo; ?> "height="" width="" alt="images"" />
                                </div>
                                <div style="">
                                    <span class="" style="text-align:center">
                                        <a href="<?php echo base_url(); ?>welcome/islami_deposit_detail?bank_id=<?php echo $v_bank->bank_id; ?>'"><?php echo $v_bank->bank_name; ?></a>
                                    </span>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                 <div class="" style="float: right;margin: 25px;margin-top: 50px">
        <p><?php echo $rows->islami_deposit_details ?></p>
    </div>
            </div>
           
          
     </div>