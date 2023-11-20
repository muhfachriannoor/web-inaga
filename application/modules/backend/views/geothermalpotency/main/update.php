<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Main Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item">Main Page</li>
            <li class="breadcrumb-item active">Change Main Page</li>
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
                <h3 class="card-title">Form Change</h3>
              </div>
              <form action="<?= site_url('backend/geothermalpotency/main/update/down/'.$datanya->id_potency);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if($error == TRUE OR form_error('foto_map') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Map Image<b><?= strip_tags(form_error('foto_map'));?></b></label>
                      <input type="file" name="foto_map" class="form-control is-warning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Map Image</label>
                      <input type="file" name="foto_map" class="form-control">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('text_overview_resources') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Overview Geothermal Resources<b><?= strip_tags(form_error('text_overview_resources'));?></b></label>
                      <textarea id="textarea" name="text_overview_resources" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_overview_resources');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Overview Geothermal Resources</label>
                      <textarea id="textarea" name="text_overview_resources" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= $datanya->text_overview_resources;?></textarea>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('text_overview_workingarea') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Overview Geothermal Working Area<b><?= strip_tags(form_error('text_overview_workingarea'));?></b></label>
                      <textarea id="textarea2" name="text_overview_workingarea" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_overview_workingarea');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Overview Geothermal Working Area</label>
                      <textarea id="textarea2" name="text_overview_workingarea" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= $datanya->text_overview_workingarea;?></textarea>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalpotency/main');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>