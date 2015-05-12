
<div class="view view-first">
    <div class="body_box_text">
        <h4>Deposit Accounts</h4>
        <img src="images/1.jpg" />
    </div>
    <div class="mask">
        <h2>Deposit Accounts</h2>
        <p>Account to deposite your money</p>
        <!--code for button-->
        <div class="body_button_diposit">
            <div id="alert"></div>
            <div id="confirm"></div>
            <?php
            foreach ($all_category_deposit as $v_category_deposit) {
                ?>
                <div id="modal1">
                    <div class="body_button_di1">
                        <a href="<?php echo base_url(); ?>welcome/deposit/<?php echo $v_category_deposit->category_id ?>" ><?php echo $v_category_deposit->category_name; ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>    
    </div>

</div> 
<div class="view view-first">
    <div class="body_box_text">
        <h4>Deposit Pension Sheme (DPS)</h4>
        <img src="images/2.jpg" />
    </div>
    <div class="mask">
        <h2>Deposit Pension Sheme (DPS)</h2>
        <p>Deposit Pension Scheme is an installment-based savings' scheme.</p>
        <!--code for button-->
        <div class="body_button_dps">
            <?php
            foreach ($all_category_dps as $v_category_dps) {
                ?>
                <div id="modal3">
                    <div class="body_button_di1">
                        <a href="<?php echo base_url(); ?>welcome/dps/<?php echo $v_category_dps->category_id ?>" ><?php echo $v_category_dps->category_name; ?></a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<div class="view view-first">
    <div class="body_box_text">
        <h4>Islamic Banking</h4>
        <img src="images/3.jpg" />
    </div>
    <div class="mask">
        <h2>Islamic Banking</h2>
        <p>A banking system that is based on the principles of Islamic law  and guided by Islamic economics.</p>
        <!--code for button-->
        <?php
        foreach ($all_category_islami_bank as $v_category_islami_bank) {
            ?>
            <div class="body_button_islamic">
                <div id="modal9">
                    <div class="body_button_di1">
                        <a href="<?php echo base_url(); ?>welcome/islami/<?php echo $v_category_islami_bank->category_id ?>" ><?php echo $v_category_islami_bank->category_name; ?></a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="view view-first">
    <div class="body_box_text">
        <h4>Credit Card</h4>
        <img src="images/4.jpg" />
    </div>
    <div class="mask">
        <h2>Credit Card</h2>
        <p>A card issued by a financial company giving the holder an option to borrow funds, usually at point of sale.</p>
        <!--code for button-->
        <?php
        foreach ($all_category_credit_card as $v_category_credit_card) {
            ?>
            <div class="body_button_card">
                <div id="modal15">
                    <div class="body_button_di1">
                        <a href="<?php echo base_url(); ?>welcome/credit_card/<?php echo $v_category_credit_card->category_id ?>" ><?php echo $v_category_credit_card->category_name; ?></a>
                    </div>
                </div>

            </div>
            <?php
        }
        ?>
    </div>
</div>