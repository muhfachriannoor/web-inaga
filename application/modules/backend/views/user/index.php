<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <?= $this->session->flashdata('alert') ?>
            <a href="<?= site_url('backend/user/create/');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th width="30%">Name</th>
                  <th width="30%">Username</th>
                  <th>Level</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($datanya->result() as $no => $tampil): ?>
                  <tr>
                    <td><?= $no+1;?></td>
                    <td><?= $tampil->nama_user;?></td>
                    <td><?= $tampil->username;?></td>
                    <td><?= akses_level($tampil->akses);?></td>
                    <td>
                      <a href="<?= site_url('backend/user/detail/'.$tampil->idUser);?>">
                        <button type="button" class="btn btn-info btn-sm" title="Info">
                          <span class="fa fa-info"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/user/update/'.$tampil->idUser);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/user/delete/'.$tampil->idUser);?>" onclick="return confirm('Hapus data ini?')">
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