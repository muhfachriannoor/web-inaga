<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Vision & Mission</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Association</li>
            <li class="breadcrumb-item">About Us</li>
            <li class="breadcrumb-item">Vision & Mission</li>
            <li class="breadcrumb-item active">Add Vision & Mission</li>
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
              <form action="<?= site_url('backend/association/aboutus/visionmission/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('visimisi') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Vision & Mission<b><?= strip_tags(form_error('visimisi'));?></b></label>
                      <textarea id="textarea" name="visimisi" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Vision & Mission...."><?= set_value('visimisi');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Vision & Mission</label>
                      <textarea id="textarea" name="visimisi" rows="10" cols="80" required="required" placeholder="Isi Vision & Mission...."><?= set_value('visimisi');?></textarea>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/association/aboutus/visionmission');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>