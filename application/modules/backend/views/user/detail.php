<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">User</a></li>
            <li class="breadcrumb-item active">Info User</li>
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
                    <?php if($datanya->foto_user != ''): ?>
                    <img src="<?= base_url('asset/backend/upload/user/'.$datanya->foto_user);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                    <?php else: ?>
                    <img src="<?= base_url('asset/backend/upload/default-user.png');?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                    <?php endif; ?>
                  </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Name</td>
                            <td><b><?= $datanya->nama_user;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Username</td>
                            <td><b><?= $datanya->username;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Level</td>
                            <td><b><?= akses_level($datanya->akses);?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Email</td>
                            <td><b><?= $datanya->email;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/user/');?>';return false;">Kembali</button>
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