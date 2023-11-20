<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add <?= $nama_galeri;?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Event & Gallery</li>
            <li class="breadcrumb-item"><?= $nama_galeri;?></li>
            <li class="breadcrumb-item active">Add <?= $nama_galeri;?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('alert');?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add <?= $nama_galeri;?></h3>
              </div>
              <form action="<?= site_url('backend/eventgallery/gallery/'.$slug_galeri.'/up/'.$id_galeri);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama_galeri_detail') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Name image<b><?= strip_tags(form_error('nama_galeri_detail'));?></b></label>
                      <input type="text" name="nama_galeri_detail" class="form-control is-warning" required="required" placeholder="Fill in the Name image..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name image</label>
                      <input type="text" name="nama_galeri_detail" class="form-control" required="required" placeholder="Fill in the Name image..." value="<?= set_value('nama_galeri_detail');?>">
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto_galeri_detail') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code><b><?= strip_tags(form_error('foto_galeri_detail'));?></b></label>
                      <input type="file" name="foto_galeri_detail" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code></label>
                      <input type="file" name="foto_galeri_detail" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('deskripsi_galeri_detail') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Description<b><?= strip_tags(form_error('deskripsi_galeri_detail'));?></b></label>
                      <textarea id="textarea" name="deskripsi_galeri_detail" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Description...."><?= set_value('deskripsi_galeri_detail');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea id="textarea" name="deskripsi_galeri_detail" rows="10" cols="80" required="required" placeholder="Description...."><?= set_value('deskripsi_galeri_detail');?></textarea>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/eventgallery/gallery/detail/'.$id_galeri);?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">All images in the <b><?= $nama_galeri;?></b> gallery</div>
            </div>
            <div class="card-body">
              <div class="row"> 
                <?php foreach($datanya->result() as $no => $tampil): ?>
                <?php
                  $url = site_url('backend/eventgallery/gallery/'.$slug_galeri.'/delete/'.$id_galeri.'/'.$tampil->id_galeri_detail);
                  $button = "<a href='".$url."' onclick='return returnConfirm()'><button type='button' class='btn btn-danger btn-sm' title='Delete'><span class='fa fa-trash'></span></button></a>";
                ?>
                <div class="col-sm-2">
                  <a href="<?= base_url('asset/backend/upload/gallery/gallery_detail/'.$tampil->foto_galeri_detail);?>" data-toggle="lightbox" data-title="<?= $tampil->nama_galeri_detail;?>" data-gallery="gallery" data-footer="<div class='float-left'><p align='justify'><?= strip_tags($tampil->deskripsi_galeri_detail);?></p></div><div class='float-right'><?= $button;?></div>">
                    <img src="<?= base_url('asset/backend/upload/gallery/gallery_detail/'.$tampil->foto_galeri_detail);?>" class="img-fluid mb-2" alt="<?= $tampil->nama_galeri_detail;?>"/>
                  </a>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <script>
    function returnConfirm() {
      return confirm('Hapus data ini?');
    }
  </script>
</div>