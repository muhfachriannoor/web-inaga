<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Geothermal Working Area</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item active">Geothermal Working Area</li>
            <li class="breadcrumb-item active">Change Geothermal Working Area</li>
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
              <form action="<?= site_url('backend/geothermalpotency/workingarea/update/down/'.$datanya->id_workingarea);?>" method="post" enctype="multipart/form-data">
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
                      <select name="id_province" id="province" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT PROVINCE --</option>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Province</label>
                      <select name="id_province" id="province" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT PROVINCE --</option>
                        <?php
                          $province = $this->db->get('province');
                          foreach($province->result() as $no => $province):
                        ?>
                        <option value="<?= $province->id_province;?>" <?= ($datanya->id_province == $province->id_province) ? 'selected="selected"' : '';?>><?= $province->nama_province;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('gwa_name') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> GWA Name<b><?= strip_tags(form_error('gwa_name'));?></b></label>
                      <input type="text" name="gwa_name" class="form-control is-warning" required="required" placeholder="Fill in the GWA Name.." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>GWA Name</label>
                      <input type="text" name="gwa_name" class="form-control" required="required" placeholder="Fill in the GWA Name.." value="<?= $datanya->gwa_name;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('developer') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Developer<b><?= strip_tags(form_error('developer'));?></b></label>
                      <input type="text" name="developer" class="form-control is-warning" required="required" placeholder="Fill in the Developer.." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Developer</label>
                      <input type="text" name="developer" class="form-control" required="required" placeholder="Fill in the Developer.." value="<?= $datanya->developer;?>">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalpotency/workingarea');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>