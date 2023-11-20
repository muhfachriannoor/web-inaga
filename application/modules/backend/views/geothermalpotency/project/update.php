<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Project & Activities</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item active">Geothermal Working Area</li>
            <li class="breadcrumb-item active">Project & Activities</li>
            <li class="breadcrumb-item active">Change Project & Activities</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Change</h3>
              </div>
              <form action="<?= site_url('backend/geothermalpotency/workingarea/project/update/down/'.$datanya->id_project);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('id_province') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Province<b>&nbsp;<?= strip_tags(form_error('id_province'));?></b></label>
                      <select name="id_province" id="province_project" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT PROVINCE --</option>
                        <?php
                          $province = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
                          foreach($province->result() as $no => $province):
                        ?>
                        <option <?= ($data_workingarea->id_province == $province->id_province) ? 'selected="selected"' : '';?> value="<?= $province->id_province;?>"><?= $province->nama_province;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Province</label>
                      <select name="id_province" id="province_project" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT PROVINCE --</option>
                        <?php
                          $province = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->group_by('geothermal_workingarea.id_province')->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
                          foreach($province->result() as $no => $province):
                        ?>
                        <option <?= ($data_workingarea->id_province == $province->id_province) ? 'selected="selected"' : '';?> value="<?= $province->id_province;?>"><?= $province->nama_province;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('gwa_name') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> GWA Name<b>&nbsp;<?= strip_tags(form_error('gwa_name'));?></b></label>
                      <select name="gwa_name" id="gwa_name_project" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT GWA NAME --</option>
                        <?php
                          $query = $this->db->where('id_province', $data_workingarea->id_workingarea)->order_by('gwa_name', 'ASC')->get('geothermal_workingarea');
                          foreach($query->result() as $no => $gwa_name):
                        ?>
                        <option <?= ($data_workingarea->id_workingarea == $gwa_name->id_workingarea) ? 'selected="selected"' : '';?> value="<?= $gwa_name->id_workingarea;?>"><?= $gwa_name->gwa_name;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>GWA Name</label>
                      <select name="gwa_name" id="gwa_name_project" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT GWA NAME --</option>
                        <?php
                          $query = $this->db->where('id_province', $data_workingarea->id_province)->order_by('gwa_name', 'ASC')->get('geothermal_workingarea');
                          foreach($query->result() as $no => $gwa_name):
                        ?>
                        <option <?= ($data_workingarea->id_workingarea == $gwa_name->id_workingarea) ? 'selected="selected"' : '';?> value="<?= $gwa_name->id_workingarea;?>"><?= $gwa_name->gwa_name;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('developer') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Developer<b><?= strip_tags(form_error('developer'));?></b></label>
                      <div id="developer_project">
                        <input type="text" name="developer" class="form-control is-warning" required="required" placeholder="Fill in the Developer.." id="inputWarning" readonly="readonly">
                      </div>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Developer</label>
                      <div id="developer_project">
                        <input type="text" name="developer"  class="form-control" required="required" placeholder="Fill in the Developer.." value="<?= $data_workingarea->developer;?>" readonly="readonly">
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('status') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Status<b><?= strip_tags(form_error('status'));?></b></label>
                      <input type="text" name="status" class="form-control is-warning" required="required" placeholder="Fill in the Status" id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" name="status"  class="form-control" required="required" placeholder="Fill in the Status" value="<?= $datanya->status;?>">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalpotency/workingarea/project');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>