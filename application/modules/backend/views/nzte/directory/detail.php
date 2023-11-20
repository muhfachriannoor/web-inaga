<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info NZTE Directory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">NZTE</li>
            <li class="breadcrumb-item">NZTE Directory</li>
            <li class="breadcrumb-item active">Info NZTE Directory</li>
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
                    <img src="<?= base_url('asset/backend/upload/directory/picture/'.$datanya->foto);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                  </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Company name</td>
                            <td><b><?= $datanya->company_name;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Link Website</td>
                            <td><b><a href="<?= $datanya->website?>" target="_blank"><?= $datanya->website;?></a></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Contact name</td>
                            <td><b><?= $datanya->contact_name;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Contact position</td>
                            <td><b><?= $datanya->contact_position;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Contact number</td>
                            <td><b><?= $datanya->contact_number;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Contact email</td>
                            <td><b><?= $datanya->contact_email;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Description</td>
                            <td><b><?= strip_tags($datanya->description) ;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/nzte/directory');?>';return false;">Kembali</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <img src="<?= base_url('asset/backend/upload/directory/logo/'.$datanya->logo);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
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