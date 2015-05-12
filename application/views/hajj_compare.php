<link type='text/css' href='<?= base_url() ?>css/modal.css' rel='stylesheet' media='screen' />
<div class="body_wrapper body_color">
    <table class="table table-hover">
       
      <tr>
            <th>Bank Name</th><th>Year</th><th>Installment</th><th>Amount Payable</th><th>Deposit Amount</th>
        </tr>
        <?php
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?= $row['bank_name'] ?></td>
                <td><?= $row['year'] ?></td>
                <td><?= $row['installment'] ?></td>
                <td><?php echo $row['amount_payable'] ?></td>
                <td><?php echo $row['deposit_amount'] ?></td>
                <td>
                    <!-- Button trigger modal -->
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $row['bank_id'] ?>" >
                        Veiw details
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $row['bank_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo $row['description'] ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
           
        <?php } ?>
          
    </table>
   

   
</table>
</div>