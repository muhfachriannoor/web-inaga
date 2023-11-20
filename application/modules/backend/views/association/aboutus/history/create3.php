<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add President API</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Association</li>
            <li class="breadcrumb-item">About Us</li>
            <li class="breadcrumb-item">History</li>
            <li class="breadcrumb-item active">Add President API</li>
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
              <form action="<?= site_url('backend/association/aboutus/president/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Name<b><?= strip_tags(form_error('nama'));?></b></label>
                      <input type="text" name="nama" class="form-control is-warning" required="required" placeholder="Fill in the Name..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="nama" class="form-control" required="required" placeholder="Fill in the Name..." value="<?= set_value('nama');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('masa_jabatan') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Term of office<b><?= strip_tags(form_error('masa_jabatan'));?></b></label>
                      <input type="text" name="masa_jabatan" class="form-control is-warning" required="required" placeholder="Fill in the Term of office..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Term of office</label>
                      <input type="text" name="masa_jabatan" class="form-control" required="required" placeholder="Fill in the Term of office..." value="<?= set_value('masa_jabatan');?>">
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto_president') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 300 x 300</code><b><?= strip_tags(form_error('foto_president'));?></b></label>
                      <input type="file" name="foto_president" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 300 x 300</code></label>
                      <input type="file" name="foto_president" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/association/aboutus/history');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>