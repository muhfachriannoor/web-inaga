<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Stakeholder Overview</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item">Stakeholder Overview</li>
            <li class="breadcrumb-item active">Add Stakeholder Overview</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add</h3>
              </div>
              <form action="<?= site_url('backend/geothermalbusiness/stakeholder-overview/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('text_overview') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Text overview<b><?= strip_tags(form_error('text_overview'));?></b></label>
                      <textarea id="textarea" name="text_overview" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_overview');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Text overview</label>
                      <textarea id="textarea" name="text_overview" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_overview');?></textarea>
                    </div>
                  <?php endif; ?>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalbusiness/stakeholder-overview');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>