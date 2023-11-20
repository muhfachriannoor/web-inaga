<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Main Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item active">Main Page</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <?= $this->session->flashdata('alert') ?>
            <?php if($datanya->num_rows() == 0): ?>
              <a href="<?= site_url('backend/geothermalbusiness/main/create');?>"><button class="btn btn-success">Add Data</button></a>
            <?php endif; ?>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Description</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($datanya->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= substr(strip_tags($tampil->description_business), 0,300) ;?></td>
                    <td>
                      <a href="<?= site_url('backend/geothermalbusiness/main/detail/'.$tampil->id_business);?>">
                        <button type="button" class="btn btn-info btn-sm" title="Info">
                          <span class="fa fa-info"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalbusiness/main/update/'.$tampil->id_business);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/geothermalbusiness/main/delete/'.$tampil->id_business);?>" onclick="return confirm('Hapus data ini?')">
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
  <!-- /.content -->
</div>