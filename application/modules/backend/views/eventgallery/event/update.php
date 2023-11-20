<?php
$mulaiberakhir = date('m/d/Y H:i:s',strtotime($datanya->mulai_event)).' - '.date('m/d/Y H:i:s',strtotime($datanya->berakhir_event)); 
?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Change Event Calendar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Event & Gallery</li>
            <li class="breadcrumb-item">Event Calendar</li>
            <li class="breadcrumb-item active">Change Event Calendar</li>
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
              <form action="<?= site_url('backend/eventgallery/event/update/down/'.$datanya->id_event);?>" method="post" enctype="multipart/form-data">
                <?php if($error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?= $error; ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama_event') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Name event<b><?= strip_tags(form_error('nama_event'));?></b></label>
                      <input type="text" name="nama_event" class="form-control is-warning" required="required" placeholder="Fill in the Name event..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name event</label>
                      <input type="text" name="nama_event" class="form-control" required="required" placeholder="Fill in the Name event..." value="<?= $datanya->nama_event;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('mulaiberakhir') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Mulai Event<b><?= strip_tags(form_error('mulaiberakhir'));?></b></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type="text" name="mulaiberakhir" class="form-control float-right is-warning">
                      </div>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Start event - End event</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type="text" name="mulaiberakhir" class="form-control float-right" id="reservationtime" value="<?= $mulaiberakhir;?>">
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('lokasi_event') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Location<b><?= strip_tags(form_error('lokasi_event'));?></b></label>
                      <input type="text" name="lokasi_event" class="form-control is-warning" required="required" placeholder="Fill in the Location..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Location</label>
                      <input type="text" name="lokasi_event" class="form-control" required="required" placeholder="Fill in the Location..." value="<?= $datanya->lokasi_event;?>">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('website') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Url website<b><?= strip_tags(form_error('website'));?></b></label>
                      <input type="url" name="website" class="form-control is-warning" required="required" placeholder="Fill in the Url website..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Url website</label>
                      <input type="url" name="website" class="form-control" required="required" placeholder="Fill in the Name event..." value="<?= $datanya->website_event;?>">
                    </div>
                  <?php endif; ?>
                  <?php if($error == TRUE OR form_error('foto_event') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code><b><?= strip_tags(form_error('foto_event'));?></b></label>
                      <input type="file" name="foto_event" class="form-control is-warning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 900 x 540</code></label>
                      <input type="file" name="foto_event" class="form-control">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('deskripsi_event') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Description<b><?= strip_tags(form_error('deskripsi_event'));?></b></label>
                      <textarea id="textarea" name="deskripsi_event" class="form-control is-warning" rows="10" cols="80" required="required" placeholder="Isi Description...."><?= set_value('deskripsi_event');?></textarea>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea id="textarea" name="deskripsi_event" rows="10" cols="80" required="required" placeholder="Isi Description...."><?= $datanya->deskripsi_event;?></textarea>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/eventgallery/event');?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>