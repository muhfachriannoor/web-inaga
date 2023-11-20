<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info Stakeholder Directory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item">Stakeholder Directory</li>
            <li class="breadcrumb-item active">Info Stakeholder Directory</li>
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
                    <img src="<?= base_url('asset/backend/upload/stakeholder/'.$datanya->foto);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                  </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Stakeholder Name</td>
                            <td><b><?= $datanya->nama_stakeholder;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Category</td>
                            <td><b><?= $datanya->kategori;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Link Website</td>
                            <td><b><a href="<?= $datanya->link_website;?>" target="_blank"><?= $datanya->link_website;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Description</td>
                            <td><b><?= $datanya->description;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalbusiness/stakeholder');?>';return false;">Kembali</button>
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