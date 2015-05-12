<link type='text/css' href='<?= base_url() ?>css/modal.css' rel='stylesheet' media='screen' />
<div class="body_wrapper body_color">
    <table class="table table-hover">
        <?php
        if (!$rows) {
            ?>
            <td><p>The  installment or period you entered is not correct. you can use installment:300 TK, 500 TK, 1000 TK, 2000 TK and 5000 TK<br/> And you can use period:3 years, 5 years, and 10 years.</p></td>
            <?php
        } else {
            ?>

            <tr>
                <th>Bank</th><th>Installment</th><th>Year</th><th>Interest</th><th>Deposit Amount</th><th>Amount With Interest</th>
            </tr>
            <?php
            foreach ($rows as $row) {
                ?>
                <tr>
                    <td><?= $row['bank_name'] ?></td>
                    <td><?= $row['installment'] ?></td>
                    <td><?= $row['year'] ?></td>
                    <td><?= $row['interest'] ?>%</td>
                    <td><?php echo $row['deposit_amount'] ?></td>
                    <td><?php echo $row['amount_with_interest'] ?></td>

                    <td>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo 
                        $row['bank_id'] ?>" >
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


        <?php }
        ?>
    </table>
</div>