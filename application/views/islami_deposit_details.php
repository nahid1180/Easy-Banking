<div class="body_wrapper body_color" style="overflow: hidden;height:auto">
    <table class="table table-hover">
       
        <tr><?php
            if(!$result)
            {?>
                <td><p>Sorry, No description found.</p></td>
                <?php
            }
            else
            {?>
                <div>
                <img src="<?php echo base_url().'images/bank_logo/'.$bank-> bank_banner ?>" height="500" width="1000" alt="images" align="center"/>
                </div>
                <td class="" style="margin-top: 15px"><p><?php echo $result->description;?></p></td>
                <?php
            }?>
        </tr>
        <tr>
            <td>
          <div class="ref_box1">
           	<a href="<?php echo $result->website; ?>" target="blank">Reference</a>
          </div>
  
     <div class="ref_box2">
         <h3 class="ref_text">List Bank of Islamic Deposit,</h3>
         <ul>
             
            <?php
            foreach ($all_bank as $v_bank) {
                ?>
             <li>
                <div class="ref_box3" ">
                   <div>
                        <span>
                          <a href="<?php echo base_url(); ?>welcome/islami_deposit_detail?bank_id=<?php echo $v_bank->bank_id; ?>'"><?php echo $v_bank->bank_name; ?></a>
                        </span>
                    </div>
                </div>
             </li>
           <?php
            }
            ?>
                 
             </ul>

        </div>
        </td>
        </tr>
   </table>
    
   </div>
  