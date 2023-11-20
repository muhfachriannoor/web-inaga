<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Stakeholder Directory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item">Stakeholder Directory</li>
            <li class="breadcrumb-item active">Add Stakeholder Directory</li>
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
              <form action="<?= site_url('backend/geothermalbusiness/stakeholder/create/up');?>" method="post" enctype="multipart/form-data">
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
                      <input type="text" name="nama_stakeholder" class="form-control" required="required" placeholder="Fill in the Stakeholder name..." value="<?= set_value('nama_stakeholder');?>">
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
                        <option <?= (set_value('kategori') == 'State-owned Geothermal Dev') ? 'selected="selected"' : '';?> value="State-owned Geothermal Dev">State-owned Geothermal Dev</option>
                        <option <?= (set_value('kategori') == 'Private Developer') ? 'selected="selected"' : '';?> value="Private Developer">Private Developer</option>
                        <option <?= (set_value('kategori') == 'Utility/Offtaker') ? 'selected="selected"' : '';?> value="Utility/Offtaker">Utility/Offtaker</option>
                        <option <?= (set_value('kategori') == 'Nation Government') ? 'selected="selected"' : '';?> value="Nation Government">Nation Government</option>
                        <option <?= (set_value('kategori') == 'Financial Institution') ? 'selected="selected"' : '';?> value="Financial Institution">Financial Institution</option>
                        <option <?= (set_value('kategori') == 'University') ? 'selected="selected"' : '';?> value="University">University</option>
                        <option <?= (set_value('kategori') == 'Association') ? 'selected="selected"' : '';?> value="Association">Association</option>
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
                      <input type="text" name="link_website" class="form-control" required="required" placeholder="Fill in the Link Website..." value="<?= set_value('link_website');?>">
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
                      <textarea id="textarea" name="description" rows="10" cols="80" required="required" placeholder="Isi Text...."><?= set_value('description');?></textarea>
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 500 x 500</code><b><?= strip_tags(form_error('foto'));?></b></label>
                      <input type="file" name="foto" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 500 x 500</code></label>
                      <input type="file" name="foto" class="form-control" required="required">
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