<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>
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
              <form action="<?= site_url('backend/user/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama_user') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Full Name<b><?= strip_tags(form_error('nama_user'));?></b></label>
                      <input type="text" name="nama_user" class="form-control is-warning" required="required" placeholder="Fill in the Full Name..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Full Name</label>
                      <input type="text" name="nama_user" class="form-control" required="required" placeholder="Fill in the Full Name..." value="<?= set_value('nama_user');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('username') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Username<b><?= strip_tags(form_error('username'));?></b></label>
                      <input type="text" name="username" class="form-control is-warning" required="required" placeholder="Fill in the Username..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" name="username" class="form-control" required="required" placeholder="Fill in the Username..." value="<?= set_value('username');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('password') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Password<b><?= strip_tags(form_error('password'));?></b></label>
                      <input type="text" name="password" class="form-control is-warning" required="required" placeholder="*****" id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="text" name="password" class="form-control" required="required" placeholder="*****" value="<?= set_value('password');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('email') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Email<b><?= strip_tags(form_error('email'));?></b></label>
                      <input type="email" name="email" class="form-control is-warning" required="required" placeholder="example@mail.com" id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" class="form-control" required="required" placeholder="example@mail.com" value="<?= set_value('email');?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('akses') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Level<b>&nbsp;<?= strip_tags(form_error('akses'));?></b></label>
                      <select name="akses" class="form-control" required="required">
                        <option value="none" hidden="hidden">-- SELECT LEVEL --</option>
                        <option value="1">Administrator</option>
                      </select>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Level</label>
                      <select name="akses" class="form-control" required="required">
                        <option value="none" hidden="hidden">-- SELECT LEVEL --</option>
                        <option value="1">Administrator</option>
                      </select>
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto_user') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Profile photo <code>Minimum 300 x 300</code>&nbsp;&nbsp;<b><?= strip_tags(form_error('foto_user'));?></b></label>
                      <input type="file" name="foto_user" class="form-control is-warning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Profile photo <code>Minimum 300 x 300</code>&nbsp;&nbsp;</label>
                      <input type="file" name="foto_user" class="form-control">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/user');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>