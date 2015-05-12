 <div class="body_wrapper" style="height:auto">
<div style="overflow: hidden;height:auto" class="body_wrapper body_color">
    <div  >
        <h3 style="margin:10px; color:#03C">Select Bank,</h3>
        <div>
            <?php
            foreach ($all_bank as $v_bank) {
                ?>
                <div  style="margin-left:70px;float:left;text-align:center">
                    <div style="margin:15px;">
                        <img src="<?php echo base_url() . 'images/bank_logo/' .$v_bank->bank_logo; ?> "height="" width="" alt="images" />
                    </div>
                    <div >
                    <span >
                      <a href="<?php echo base_url(); ?>welcome/credit_card_detail?bank_id=<?php echo $v_bank->bank_id; ?>&type='visa'"><?php echo $v_bank->bank_name; ?></a>
                    </span>
                        </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="" style="float: right;margin: 25px;margin-top: 50px">
        <p><?php echo $rows->visa_detail ?></p>
    </div>
</div>
</div>