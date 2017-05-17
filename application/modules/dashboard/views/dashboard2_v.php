<!--Dashboard2-->
<h3>Rezervácie</h3>

<div class = "row">
    <div class = "col-md-12">
        <a href = "<?php echo base_url(); ?>Dashboard/addRezervacia" class = "btn btn-primary pull-left">Pridať rezerváciu</a> 
    </div>
</div>

<div class = "row">
    <div class = "col-md-12">
        <table class = "table table-stripped table-bordered">
            <thead>
                <th>#</th>
                <th>Zákazník</th>
                <th>Dátum</th>
                <th>Cena</th>
                <th>Počet hodín</th>
                <th>Akcie</th>
            </thead>
            <tbody>
                <?php
                    if(!empty($rezervacie_table))
                    {
                        echo $rezervacie_table;
                    }
                    else {
                ?>
                <tr>
                    <td colspan = "6"><center>Bohužiaľ mi neberie údaje z tabuľky</center></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>