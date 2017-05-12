<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Email</th>
            <th>Názov firmy</th>
            <th>Tlačidlá</th>
        </tr>
    </thead>
    
    <tbody>
    <?php foreach ((array) $zakaznici as $zakaznici_item): ?>
        <tr>
            <td><?php echo $zakaznici_item['ID']; ?></td>
            <td><?php echo $zakaznici_item['meno']; ?></td>
            <td><?php echo $zakaznici_item['priezvisko']; ?></td>
            <td><?php echo $zakaznici_item['email']; ?></td>
            <td><?php echo $zakaznici_item['nazov_firmy']; ?></td>
            <td>
                <a class="btn btn-info btn-xs" href="<?php echo site_url([$uri ='zakaznici/view'.$zakaznici_item['ID']]) ?>">View</a>
                <a class="btn btn-success btn-xs" href="<?php echo site_url([$uri ='zakaznici/view'.$zakaznici_item['ID']]) ?>">Edit</a>
                <a class="btn btn-warning btn-xs" href="<?php echo site_url([$uri ='zakaznici/view'.$zakaznici_item['ID']]) ?>"
                onClick="return confirm('Naozaj chcete vymazať danú položku?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>