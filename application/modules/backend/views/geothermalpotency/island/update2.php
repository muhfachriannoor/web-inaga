<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Province</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Potency</li>
            <li class="breadcrumb-item active">Island, Province, District</li>
            <li class="breadcrumb-item active">Change Province</li>
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
              <form action="<?= site_url('backend/geothermalpotency/province/update/down/'.$datanya->id_province);?>" method="post" enctype="multipart/form-data">
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
                      <select name="id_island" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT ISLAND --</option>
                        <?php
                          $island = $this->db->get('island');
                          foreach($island->result() as $no => $island):
                        ?>
                        <option value="<?= $island->id_island;?>"><?= $island->nama_island;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Island</label>
                      <select name="id_island" class="form-control select2" required="required">
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
                  <?php if(form_error('nama_province') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Provice name<b>&nbsp;<?= strip_tags(form_error('nama_province'));?></b></label>
                      <input type="text" name="nama_province" class="form-control is-warning" required="required" placeholder="Fill in the name of the provice..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Provice name</label>
                      <input type="text" name="nama_province" class="form-control" required="required" placeholder="Fill in the name of the province..." value="<?= $datanya->nama_province;?>">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalpotency/island');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>