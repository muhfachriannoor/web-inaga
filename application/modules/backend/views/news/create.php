<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add News</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add News</li>
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
              <form action="<?= site_url('backend/news/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('judul_berita') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Title news<b><?= strip_tags(form_error('judul_berita'));?></b></label>
                      <input type="text" name="judul_berita" class="form-control is-warning" required="required" placeholder="Fill in the Title news..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title news</label>
                      <input type="text" name="judul_berita" class="form-control" required="required" placeholder="Fill in the Title news..." value="<?= set_value('judul_berita');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('penulis') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Author<b><?= strip_tags(form_error('penulis'));?></b></label>
                      <input type="text" name="penulis" class="form-control is-warning" required="required" placeholder="Fill in the Author..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Author</label>
                      <input type="text" name="penulis" class="form-control" required="required" placeholder="Fill in the Author..." value="<?= set_value('penulis');?>">
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto_berita') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code><b><?= strip_tags(form_error('foto_berita'));?></b></label>
                      <input type="file" name="foto_berita" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code></label>
                      <input type="file" name="foto_berita" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('text_berita') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Text<b><?= strip_tags(form_error('text_berita'));?></b></label>
                      <textarea id="textarea" name="text_berita" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_berita');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Text</label>
                      <textarea id="textarea" name="text_berita" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('text_berita');?></textarea>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/news');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>