<div class = "row">
  <div class = "col-md-12">
    <form method = "POST" action = "<?php echo base_url(); ?>Rezervacie/post_rezervacia" enctype = "multipart/form-data">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Športovisko</label>
                    <input type = "text" name = "sportoviska_ID" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Status rezervácie</label>
                    <input type = "text" name = "status_rezervacie_ID" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Zákazník</label>
                    <input type = "text" name = "zakaznici_ID" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Dátum</label>
                    <input type = "text" name = "datum" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Cena</label>
                    <input type = "text" name = "cena" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Počet hodín</label>
                    <input type = "text" name = "cas" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <button class = "btn btn-primary btn-large">Pridať</button>
            </div>
        </div>
    </form>
  </div>
</div>