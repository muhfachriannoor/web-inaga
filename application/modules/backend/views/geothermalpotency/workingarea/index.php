<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Geothermal Working Area</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item active">Geothermal Working Area</li>
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
            <a href="<?= site_url('backend/geothermalpotency/workingarea/create');?>"><button class="btn btn-success">Add Data</button></a>
            <a href="<?= site_url('backend/geothermalpotency/workingarea/powerplant');?>"><button class="btn btn-primary">Power Plant</button></a>
            <a href="<?= site_url('backend/geothermalpotency/workingarea/project');?>"><button class="btn btn-primary">Project & Activities</button></a>
            <a href="<?= site_url('backend/geothermalpotency/workingarea/tender');?>"><button class="btn btn-primary">Tender</button></a>
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
                  <th>Test Kolom</th>
                  <th>Developer</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $test = 0;
                  foreach($datanya->result() as $no => $tampil): ?>
                    <tr>
                    <?php
                      $query = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->where('geothermal_workingarea.id_province', $tampil->id_province)->where('geothermal_workingarea.test_kolom', $tampil->id_province)->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
                      $rowspan = $query->num_rows();
                    ?>
                      <td rowspan="<?= $rowspan;?>"><?= $no+1;?></td>
                      <td rowspan="<?= $rowspan;?>"><?= $tampil->nama_province;?></td>
                      <?php foreach($query->result() as $no2 => $show2): ?>
                      <td><?= $show2->gwa_name;?></td>
                      <td><?= $show2->developer;?></td>
                      <?php 
                        if($test != $show2->test_kolom):
                      ?>
                        <td rowspan="<?= $rowspan;?>"><?= $show2->test_kolom;?></td>
                      <?php 
                        endif;
                        $test = $show2->test_kolom;
                       ?>
                      <td><?= $show2->developer;?></td>
                      <td>
                        <a href="<?= site_url('backend/geothermalpotency/workingarea/detail/'.$show2->id_workingarea);?>">
                          <button type="button" class="btn btn-info btn-sm" title="Info">
                            <span class="fa fa-info"></span>
                          </button>
                        </a>
                        <a href="<?= site_url('backend/geothermalpotency/workingarea/update/'.$show2->id_workingarea);?>">
                          <button type="button" class="btn btn-warning btn-sm" title="Change">
                            <span class="fa fa-edit"></span>
                          </button>
                        </a>
                        <a href="<?= site_url('backend/geothermalpotency/workingarea/delete/'.$show2->id_workingarea);?>" onclick="return confirm('Hapus data ini?')">
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