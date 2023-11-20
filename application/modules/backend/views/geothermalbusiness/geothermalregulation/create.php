<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Geothermal Regulation</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item active">Geothermal Regulation</li>
            <li class="breadcrumb-item active">Add Geothermal Regulation</li>
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
                <h3 class="card-title">Form Add</h3>
              </div>
              <form action="<?= site_url('backend/geothermalbusiness/geothermalregulation/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($pdf_ind_error == TRUE OR $pdf_eng_error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?php
                    if($pdf_ind_error == TRUE) {
                      echo $pdf_ind_error;
                    }elseif($pdf_eng_error == TRUE) {
                      echo $pdf_eng_error;
                    }
                  ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('id_kategori_geothermal') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Category<b>&nbsp;<?= strip_tags(form_error('id_kategori_geothermal'));?></b></label>
                      <select name="id_kategori_geothermal" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT CATEGORY --</option>
                        <?php
                          $category = $this->db->get('category_geothermal_regulation');
                          foreach($category->result() as $no => $category):
                        ?>
                        <option value="<?= $category->id_kategori_geothermal;?>"><?= $category->nama_kategori;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Category</label>
                      <select name="id_kategori_geothermal" class="form-control select2" required="required">
                        <option value="none" hidden="hidden">-- SELECT CATEGORY --</option>
                        <?php
                          $category = $this->db->get('category_geothermal_regulation');
                          foreach($category->result() as $no => $category):
                        ?>
                        <option value="<?= $category->id_kategori_geothermal;?>"><?= $category->nama_kategori;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('nama_regulation_ind') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Regulation name IND<b><?= strip_tags(form_error('nama_regulation_ind'));?></b></label>
                      <input type="text" name="nama_regulation_ind" class="form-control is-warning" required="required" placeholder="Fill in the Regulation name..." id="inputWarning" value="<?= set_value('nama_regulation_ind');?>">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Regulation name IND</label>
                      <input type="text" name="nama_regulation_ind" class="form-control" required="required" placeholder="Fill in the Regulation name..." value="<?= set_value('nama_regulation_ind');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('nama_regulation_eng') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Regulation name ENG<b><?= strip_tags(form_error('nama_regulation_eng'));?></b></label>
                      <input type="text" name="nama_regulation_eng" class="form-control is-warning" required="required" placeholder="Fill in the Regulation name..." id="inputWarning" value="<?= set_value('nama_regulation_eng');?>">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Regulation name ENG</label>
                      <input type="text" name="nama_regulation_eng" class="form-control" required="required" placeholder="Fill in the Regulation name..." value="<?= set_value('nama_regulation_eng');?>">
                    </div>
                  <?php endif; ?>
                  <?php if($pdf_ind_error == TRUE OR form_error('pdf_ind') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> File PDF IND<b><?= strip_tags(form_error('pdf_ind'));?></b></label>
                      <input type="file" name="pdf_ind" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>File PDF IND</label>
                      <input type="file" name="pdf_ind" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                  <?php if($pdf_eng_error == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> File PDF ENG<b><?= strip_tags(form_error('pdf_eng'));?></b></label>
                      <input type="file" name="pdf_eng" class="form-control is-warning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>File PDF ENG</label>
                      <input type="file" name="pdf_eng" class="form-control">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalbusiness/geothermalregulation');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>