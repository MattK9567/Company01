<!--Dashboard3-->
<h3>Športoviská</h3>

<div class = "row">
    <div class = "col-md-12">
        <a href = "<?php echo base_url(); ?>Dashboard/addSportovisko" class = "btn btn-primary pull-left">Pridať športovisko</a> 
    </div>
</div>

<div class = "row">
    <div class = "col-md-12">
        <table class = "table table-stripped table-bordered">
            <thead>
                <th>#</th>
                <th>Názov športoviska</th>
                <th>Typ športoviska</th>
                <th>Akcie</th>
            </thead>
            <tbody>
                <?php
                    if(!empty($sportoviska_table))
                    {
                        echo $sportoviska_table;
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