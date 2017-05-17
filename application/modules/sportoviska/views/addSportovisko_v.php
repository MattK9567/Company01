<div class = "row">
  <div class = "col-md-12">
    <form method = "POST" action = "<?php echo base_url(); ?>Sportoviska/post_sportovisko" enctype = "multipart/form-data">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Názov Športoviska</label>
                    <input type = "text" name = "nazov_sportoviska" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <div class = "form-group">
                    <label>Typ Športoviska</label>
                    <input type = "text" name = "typ_sportoviska" class = "form-control">
                </div>
            </div>

            <div class = "col-md-12">
                <button class = "btn btn-primary btn-large">Pridať</button>
            </div>
        </div>
    </form>
  </div>
</div>