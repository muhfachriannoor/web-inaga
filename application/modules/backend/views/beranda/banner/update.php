<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Banner</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Change Banner</li>
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
              <form action="<?= site_url('backend/beranda/banner/update/down/'.$datanya->id_banner);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('judul_banner') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Title banner<b><?= strip_tags(form_error('judul_banner'));?></b></label>
                      <input type="text" name="judul_banner" class="form-control is-warning" required="required" placeholder="Fill in the title banner..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title banner</label>
                      <input type="text" name="judul_banner" class="form-control" required="required" placeholder="Fill in the title banner..." value="<?= $datanya->judul_banner;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('text_banner') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Text Banner<b><?= strip_tags(form_error('text_banner'));?></b></label>
                      <textarea id="textarea" name="text_banner" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_banner');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Text Banner</label>
                      <textarea id="textarea" name="text_banner" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= $datanya->text_banner;?></textarea>
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto_banner') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 1280 x 720</code><b><?= strip_tags(form_error('foto_banner'));?></b></label>
                      <input type="file" name="foto_banner" class="form-control is-warning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 1280 x 720</code></label>
                      <input type="file" name="foto_banner" class="form-control">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/beranda/banner');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>