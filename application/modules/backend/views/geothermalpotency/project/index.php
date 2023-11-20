<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project & Activities</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item">Geothermal Working Area</li>
            <li class="breadcrumb-item active">Project & Activities</li>
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
            <a href="<?= site_url('backend/geothermalpotency/workingarea/project/create');?>"><button class="btn btn-success">Add Data</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Province</th>
                  <th>GWA Name</th>
                  <th>Developer</th>
                  <th>Status</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($datanya->result() as $no => $tampil): ?>
                    <tr>
                    <?php
                      $query = $this->db->join('geothermal_workingarea', 'project.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->where('geothermal_workingarea.id_province', $tampil->id_province)->order_by('project.id_project','ASC')->get('project');
                      $rowspan = $query->num_rows();
                    ?>
                      <td rowspan="<?= $rowspan;?>"><?= $no+1;?></td>
                      <td rowspan="<?= $rowspan;?>"><?= $tampil->nama_province;?></td>
                      <?php foreach($query->result() as $no2 => $show2): ?>
                      <td><?= $show2->gwa_name;?></td>
                      <td><?= $show2->developer;?></td>
                      <td><?= $show2->status;?></td> 
                      <td>
                        <a href="<?= site_url('backend/geothermalpotency/workingarea/project/detail/'.$show2->id_project);?>">
                          <button type="button" class="btn btn-info btn-sm" title="Info">
                            <span class="fa fa-info"></span>
                          </button>
                        </a>
                        <a href="<?= site_url('backend/geothermalpotency/workingarea/project/update/'.$show2->id_project);?>">
                          <button type="button" class="btn btn-warning btn-sm" title="Change">
                            <span class="fa fa-edit"></span>
                          </button>
                        </a>
                        <a href="<?= site_url('backend/geothermalpotency/workingarea/project/delete/'.$show2->id_project);?>" onclick="return confirm('Hapus data ini?')">
                          <button type="button" class="btn btn-danger btn-sm" title="Delete">
                            <span class="fa fa-trash"></span>
                          </button>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; endforeach;?>
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