<h3>Dashboard 1 - tu budú zákazníci</h3>

<div class = "row">
    <div class = "col-md-12">
        <a href = "<?php echo base_url(); ?>Dashboard/addCustomer" class = "btn btn-primary pull-left">Pridať zákazníka</a> 
    </div>
</div>

<div class = "row">
    <div class = "col-md-12">
        <table class = "table table-stripped table-bordered">
            <thead>
                <th>#</th>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Email</th>
                <th>Názov firmy</th>
            </thead>
            <tbody>
                <?php  
                    if($customers_table !== "")
                    {
                        echo $customers_table;
                    }
                    else {
                ?>
                <tr>
                    <td colspan = "6"><center>Hadam to uz pojde</center></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>