<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Stakeholder Directory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item">Stakeholder Directory</li>
            <li class="breadcrumb-item active">Change Stakeholder Directory</li>
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
              <form action="<?= site_url('backend/geothermalbusiness/stakeholder/update/down/'.$datanya->id_stakeholder);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama_stakeholder') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Stakeholder name<b><?= strip_tags(form_error('nama_stakeholder'));?></b></label>
                      <input type="text" name="nama_stakeholder" class="form-control is-warning" required="required" placeholder="Fill in the Stakeholder name..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Stakeholder name</label>
                      <input type="text" name="nama_stakeholder" class="form-control" required="required" placeholder="Fill in the Stakeholder name..." value="<?= $datanya->nama_stakeholder;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('kategori') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Category<b><?= strip_tags(form_error('kategori'));?></b></label>
                      <select name="kategori" class="form-control is-warning" required="required" id="inputWarning">
                        <option value="none">-- SELECT CATEGORY --</option>
                        <option value="State-owned Geothermal Dev">State-owned Geothermal Dev</option>
                        <option value="Private Developer">Private Developer</option>
                        <option value="Utility/Offtaker">Utility/Offtaker</option>
                        <option value="Nation Government">Nation Government</option>
                        <option value="Financial Institution">Financial Institution</option>
                        <option value="University">University</option>
                        <option value="Association">Association</option>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <select name="kategori" class="form-control" required="required">
                        <option value="none">-- SELECT CATEGORY --</option>
                        <option <?= ($datanya->kategori == 'State-owned Geothermal Dev') ? 'selected="selected"' : '';?> value="State-owned Geothermal Dev">State-owned Geothermal Dev</option>
                        <option <?= ($datanya->kategori == 'Private Developer') ? 'selected="selected"' : '';?> value="Private Developer">Private Developer</option>
                        <option <?= ($datanya->kategori == 'Utility/Offtaker') ? 'selected="selected"' : '';?> value="Utility/Offtaker">Utility/Offtaker</option>
                        <option <?= ($datanya->kategori == 'Nation Government') ? 'selected="selected"' : '';?> value="Nation Government">Nation Government</option>
                        <option <?= ($datanya->kategori == 'Financial Institution') ? 'selected="selected"' : '';?> value="Financial Institution">Financial Institution</option>
                        <option <?= ($datanya->kategori == 'University') ? 'selected="selected"' : '';?> value="University">University</option>
                        <option <?= ($datanya->kategori == 'Association') ? 'selected="selected"' : '';?> value="Association">Association</option>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('link_website') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Link Website<b><?= strip_tags(form_error('link_website'));?></b></label>
                      <input type="text" name="link_website" class="form-control is-warning" required="required" placeholder="Fill in the Link Website..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Link Website</label>
                      <input type="text" name="link_website" class="form-control" required="required" placeholder="Fill in the Link Website..." value="<?= $datanya->link_website;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('description') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Description<b><?= strip_tags(form_error('description'));?></b></label>
                      <textarea id="textarea" name="description" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('description');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea id="textarea" name="description" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= $datanya->description;?></textarea>
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 500 x 500</code><b><?= strip_tags(form_error('foto'));?></b></label>
                      <input type="file" name="foto" class="form-control is-warning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 500 x 500</code></label>
                      <input type="file" name="foto" class="form-control">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalbusiness/stakeholder');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>