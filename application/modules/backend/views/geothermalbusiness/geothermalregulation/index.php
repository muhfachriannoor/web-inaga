<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item active">Geothermal Regulation</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <?= $this->session->flashdata('alert2') ?>
            <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/category/create');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Category</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($category->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= $tampil->nama_kategori;?></td>
                    <td>
                      <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/category/update/'.$tampil->id_kategori_geothermal);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/category/delete/'.$tampil->id_kategori_geothermal);?>" onclick="return confirm('Hapus data ini?')">
                        <button type="button" class="btn btn-danger btn-sm" title="Delete">
                          <span class="fa fa-trash"></span>
                        </button>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Geothermal Regulation</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <?= $this->session->flashdata('alert') ?>
            <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/create');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Category</th>
                  <th>Name regulation IND</th>
                  <th>Name regulation ENG</th>
                  <th>PDF IND</th>
                  <th>PDF ENG</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($regulation->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= $tampil->nama_kategori;?></td>
                    <td><?= $tampil->nama_regulation_ind;?></td>
                    <td><?= $tampil->nama_regulation_eng;?></td>
                    <td align="center">
                      <a href="<?= base_url('asset/backend/upload/regulation/geothermalregulation/IND/'.$tampil->pdf_ind);?>" target="_blank">
                        <button type="button" class="btn btn-success btn-sm" title="PDF IND">
                          <span class="fas fa-file-pdf"></span>
                        </button>
                      </a>
                    </td>
                    <td align="center">
                      <?php if($tampil->pdf_eng != ''):?>
                      <a href="<?= base_url('asset/backend/upload/regulation/geothermalregulation/ENG/'.$tampil->pdf_eng);?>" target="_blank">
                        <button type="button" class="btn btn-success btn-sm" title="PDF ENG">
                          <span class="fas fa-file-pdf"></span>
                        </button>
                      </a>
                      <?php else: ?>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/detail/'.$tampil->id_geothermal_regulation);?>">
                        <button type="button" class="btn btn-info btn-sm" title="Info">
                          <span class="fa fa-info"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/update/'.$tampil->id_geothermal_regulation);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation/delete/'.$tampil->id_geothermal_regulation);?>" onclick="return confirm('Hapus data ini?')">
                        <button type="button" class="btn btn-danger btn-sm" title="Delete">
                          <span class="fa fa-trash"></span>
                        </button>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>