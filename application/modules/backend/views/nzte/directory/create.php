<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add NZTE Directory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">NZTE</li>
            <li class="breadcrumb-item">NZTE Directory</li>
            <li class="breadcrumb-item active">Add NZTE Directory</li>
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
              <form action="<?= site_url('backend/nzte/directory/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($foto_error == TRUE OR $logo_error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?php
                    if($foto_error == TRUE) {
                      echo $foto_error;
                    }elseif($logo_error == TRUE) {
                      echo $logo_error;
                    }
                  ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('company_name') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Company name<b><?= strip_tags(form_error('company_name'));?></b></label>
                      <input type="text" name="company_name" class="form-control is-warning" required="required" placeholder="Fill in the Company name..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company name</label>
                      <input type="text" name="company_name" class="form-control" required="required" placeholder="Fill in the Company name..." value="<?= set_value('company_name');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('website') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Link Website<b><?= strip_tags(form_error('website'));?></b></label>
                      <input type="text" name="website" class="form-control is-warning" required="required" placeholder="Fill in the Link Website..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Link Website</label>
                      <input type="text" name="website" class="form-control" required="required" placeholder="Fill in the Link Website..." value="<?= set_value('website');?>">
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
                  <?php if(form_error('contact_name') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Contact name<b><?= strip_tags(form_error('contact_name'));?></b></label>
                      <input type="text" name="contact_name" class="form-control is-warning" required="required" placeholder="Fill in the Contact name..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact name</label>
                      <input type="text" name="contact_name" class="form-control" required="required" placeholder="Fill in the Contact name..." value="<?= set_value('contact_name');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('contact_position') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Contact Position<b><?= strip_tags(form_error('contact_position'));?></b></label>
                      <input type="text" name="contact_position" class="form-control is-warning" placeholder="Fill in the Contact Position..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Position</label>
                      <input type="text" name="contact_position" class="form-control" placeholder="Fill in the Contact Position..." value="<?= set_value('contact_position');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('contact_number') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Contact number<b><?= strip_tags(form_error('contact_number'));?></b></label>
                      <input type="number" name="contact_number" class="form-control is-warning" required="required" placeholder="Fill in the Contact number..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact number</label>
                      <input type="number" name="contact_number" class="form-control" required="required" placeholder="Fill in the Contact number..." value="<?= set_value('contact_number');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('contact_email') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Contact email<b><?= strip_tags(form_error('contact_email'));?></b></label>
                      <input type="email" name="contact_email" class="form-control is-warning" required="required" placeholder="your@email.com" id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact email</label>
                      <input type="email" name="contact_email" class="form-control" required="required" placeholder="your@email.com" value="<?= set_value('contact_email');?>">
                    </div>
                  <?php endif; ?>
                  <?php if($foto_error == TRUE OR form_error('foto') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code><b><?= strip_tags(form_error('foto'));?></b></label>
                      <input type="file" name="foto" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code></label>
                      <input type="file" name="foto" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                  <?php if($logo_error == TRUE OR form_error('logo') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Logo&nbsp;&nbsp;<code>Minimum 400 x 400</code><b><?= strip_tags(form_error('logo'));?></b></label>
                      <input type="file" name="logo" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Logo&nbsp;&nbsp;<code>Minimum 400 x 400</code></label>
                      <input type="file" name="logo" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/nzte/directory');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>