<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>President Message</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Association</li>
            <li class="breadcrumb-item">About Us</li>
            <li class="breadcrumb-item active">President Message</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <?= $this->session->flashdata('alert') ?>
            <?php if($datanya->num_rows() == 0): ?>
              <a href="<?= site_url('backend/association/aboutus/presidentmessage/create');?>"><button class="btn btn-success">Add Data</button></a>
            <?php endif; ?>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Message</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($datanya->result() as $no => $tampil): ?>
                  <tr>
                    <td align="center"><?= $no+1;?></td>
                    <td><?= substr(strip_tags($tampil->message), 0,300) ;?></td>
                    <td>
                      <a href="<?= site_url('backend/association/aboutus/presidentmessage/detail/'.$tampil->id_message);?>">
                        <button type="button" class="btn btn-info btn-sm" title="Info">
                          <span class="fa fa-info"></span>
                        </button>
                      </a>
                      <a href="<?= site_url('backend/association/aboutus/presidentmessage/update/'.$tampil->id_message);?>">
                        <button type="button" class="btn btn-warning btn-sm" title="Change">
                          <span class="fa fa-edit"></span>
                        </button>
                      </a>
                      <?php if($datanya->num_rows() != 1): ?>
                      <a href="<?= site_url('backend/association/aboutus/presidentmessage/delete/'.$tampil->id_message);?>" onclick="return confirm('Hapus data ini?')">
                        <button type="button" class="btn btn-danger btn-sm" title="Delete">
                          <span class="fa fa-trash"></span>
                        </button>
                      </a>
                      <?php endif; ?>
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