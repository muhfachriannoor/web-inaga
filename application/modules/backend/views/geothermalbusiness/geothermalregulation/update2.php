<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item active">Geothermal Regulation</li>
            <li class="breadcrumb-item active">Change Category</li>
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
              <form action="<?= site_url('backend/geothermalbusiness/geothermalregulation/category/update/down/'.$datanya->id_kategori_geothermal);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama_kategori') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Category name<b>&nbsp;<?= strip_tags(form_error('nama_kategori'));?></b></label>
                      <input type="text" name="nama_kategori" class="form-control is-warning" required="required" placeholder="Fill in the name of the category..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category name</label>
                      <input type="text" name="nama_kategori" class="form-control" required="required" placeholder="Fill in the name of the category..." value="<?= $datanya->nama_kategori;?>">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalbusiness/geothermalregulation');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>