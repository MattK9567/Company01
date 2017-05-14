<div class = "row">
  <div class = "col-md-12">
    <form method = "POST" action = "<?php echo base_url(); ?>Customers/post_customer" enctype = "multipart/form-data">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Meno</label>
                    <input type = "text" name = "meno_zakaznika" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Priezvisko</label>
                    <input type = "text" name = "priezvisko_zakaznika" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Email</label>
                    <input type = "text" name = "email_zakaznika" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Názov firmy</label>
                    <input type = "text" name = "nazov_firmy" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <button class = "btn btn-primary btn-large">Pridať</button>
            </div>
        </div>
    </form>
  </div>
</div>