<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Island</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item active">Island, Province, District</li>
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
            <?= $this->session->flashdata('alert') ?>
            <a href="<?= site_url('backend/geothermalpotency/island/create');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Island name</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($island->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= $tampil->nama_island;?></td>
                    <td>
                      <a href="<?= site_url('backend/geothermalpotency/island/update/'.$tampil->id_island);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalpotency/island/delete/'.$tampil->id_island);?>" onclick="return confirm('Hapus data ini?')">
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
          <h1>Province</h1>
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
            <a href="<?= site_url('backend/geothermalpotency/province/create');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Island name</th>
                  <th>Province name</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($province->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= $tampil->nama_island;?></td>
                    <td><?= $tampil->nama_province;?></td>
                    <td>
                      <a href="<?= site_url('backend/geothermalpotency/province/update/'.$tampil->id_province);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalpotency/province/delete/'.$tampil->id_province);?>" onclick="return confirm('Hapus data ini?')">
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
          <h1>District</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <?= $this->session->flashdata('alert3') ?>
            <a href="<?= site_url('backend/geothermalpotency/district/create');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Island name</th>
                  <th>Province name</th>
                  <th>District name</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($district->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= $tampil->nama_island;?></td>
                    <td><?= $tampil->nama_province;?></td>
                    <td><?= $tampil->nama_district;?></td>
                    <td>
                      <a href="<?= site_url('backend/geothermalpotency/district/update/'.$tampil->id_district);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalpotency/district/delete/'.$tampil->id_district);?>" onclick="return confirm('Hapus data ini?')">
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