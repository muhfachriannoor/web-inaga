<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info Gallery</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Association</li>
            <li class="breadcrumb-item">Gallery</li>
            <li class="breadcrumb-item active">Info Gallery</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                    <img src="<?= base_url('asset/backend/upload/gallery/'.$datanya->foto_galeri);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                  </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Name Gallery</td>
                            <td><b><?= $datanya->nama_galeri;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Date</td>
                            <td><b><?= date('d F Y',strtotime($datanya->tanggal_galeri));?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/eventgallery/gallery');?>';return false;">Kembali</button>
                            </td>
                            <td><button type="button" class="btn btn-success" onclick="window.location='<?= site_url('backend/eventgallery/gallery/'.$datanya->slug_galeri.'/'.$datanya->id_galeri);?>';return false;">Tambah</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
</div>