<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change District</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item active">Island, Province, District</li>
            <li class="breadcrumb-item active">Change District</li>
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
              <form action="<?= site_url('backend/geothermalpotency/resources/update/down/'.$datanya->id_resources);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('id_island') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Island<b>&nbsp;<?= strip_tags(form_error('id_island'));?></b></label>
                      <select name="id_island" id="island" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT ISLAND --</option>
                        <?php
                          $island = $this->db->get('island');
                          foreach($island->result() as $no => $island):
                        ?>
                        <option <?= ($datanya->id_island == $island->id_island) ? 'selected="selected"' : '';?> value="<?= $island->id_island;?>"><?= $island->nama_island;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Island</label>
                      <select name="id_island" id="island" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT ISLAND --</option>
                        <?php
                          $island = $this->db->get('island');
                          foreach($island->result() as $no => $island):
                        ?>
                        <option <?= ($datanya->id_island == $island->id_island) ? 'selected="selected"' : '';?> value="<?= $island->id_island;?>"><?= $island->nama_island;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('id_province') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Province<b>&nbsp;<?= strip_tags(form_error('id_province'));?></b></label>
                      <select name="id_province" id="province" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT PROVINCE --</option>
                        <?php
                          $province = $this->db->get_where('province',array('id_island' => $datanya->id_island));
                          foreach($province->result() as $no => $province):
                        ?>
                        <option <?= ($datanya->id_province == $province->id_province) ? 'selected="selected"' : '';?> value="<?= $province->id_province;?>"><?= $province->nama_province;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Province</label>
                      <select name="id_province" id="province" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT PROVINCE --</option>
                        <?php
                          $province = $this->db->get_where('province',array('id_island' => $datanya->id_island));
                          foreach($province->result() as $no => $province):
                        ?>
                        <option <?= ($datanya->id_province == $province->id_province) ? 'selected="selected"' : '';?> value="<?= $province->id_province;?>"><?= $province->nama_province;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('id_district') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> District<b>&nbsp;<?= strip_tags(form_error('id_district'));?></b></label>
                      <select name="id_district" id="district" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT DISTRICT --</option>
                        <?php
                          $district = $this->db->get_where('district',array('id_province' => $datanya->id_province));
                          foreach($district->result() as $no => $district):
                        ?>
                        <option <?= ($datanya->id_district == $district->id_district) ? 'selected="selected"' : '';?> value="<?= $district->id_district;?>"><?= $district->nama_district;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Disctrict</label>
                      <select name="id_district" id="district" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT DISTRICT --</option>
                        <?php
                          $district = $this->db->get_where('district',array('id_province' => $datanya->id_province));
                          foreach($district->result() as $no => $district):
                        ?>
                        <option <?= ($datanya->id_district == $district->id_district) ? 'selected="selected"' : '';?> value="<?= $district->id_district;?>"><?= $district->nama_district;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('index_no') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Index No.<b><?= strip_tags(form_error('index_no'));?></b></label>
                      <input type="text" name="index_no" class="form-control is-warning" required="required" placeholder="Fill in the Index No..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Index No.</label>
                      <input type="text" name="index_no" class="form-control" required="required" placeholder="Fill in the Index No..." value="<?= $datanya->index_no;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('field_name') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Field Name<b><?= strip_tags(form_error('field_name'));?></b></label>
                      <input type="text" name="field_name" class="form-control is-warning" required="required" placeholder="Fill in the Field Name.." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Field Name</label>
                      <input type="text" name="field_name" class="form-control" required="required" placeholder="Fill in the Field Name.." value="<?= $datanya->field_name;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('status') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Status<b><?= strip_tags(form_error('status'));?></b></label>
                      <input type="text" name="status" class="form-control is-warning" required="required" placeholder="Fill in the Status.." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" name="status" class="form-control" required="required" placeholder="Fill in the Status.." value="<?= $datanya->status;?>">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalpotency/resources');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>