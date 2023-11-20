<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info Banner</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Association</li>
            <li class="breadcrumb-item">About Us</li>
            <li class="breadcrumb-item">History</li>
            <li class="breadcrumb-item active">Info President API</li>
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
                    <img src="<?= base_url('asset/backend/upload/president/'.$datanya->foto_president);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                  </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Name</td>
                            <td><b><?= $datanya->nama_president;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Term of office</td>
                            <td><b><?= $datanya->masa_jabatan;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/association/aboutus/history');?>';return false;">Kembali</button>
                            </td>
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