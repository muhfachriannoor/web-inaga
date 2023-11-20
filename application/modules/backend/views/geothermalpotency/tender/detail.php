<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info Tender</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item">Geothermal Working Area</li>
            <li class="breadcrumb-item active">Tender</li>
            <li class="breadcrumb-item active">Info Tender</li>
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
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Province</td>
                            <td><b><?= $datanya->nama_province;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">GWA Name</td>
                            <td><b><?= $datanya->gwa_name;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Developer</td>
                            <td><b><?= $datanya->developer;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Disctrict Location</td>
                            <td><b><?= $datanya->location;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Potency</td>
                            <td><b><?= $datanya->potency;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Development Plan</td>
                            <td><b><?= $datanya->development_plan;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalpotency/workingarea/tender');?>';return false;">Kembali</button>
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