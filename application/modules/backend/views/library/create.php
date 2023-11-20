<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Library</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Library</li>
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
              <form action="<?= site_url('backend/library/'.$sub_menunya.'/create/up');?>" method="post" enctype="multipart/form-data">
                <?php if($foto_error == TRUE OR $pdf_error == TRUE): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="fas fa-exclamation-triangle"></i> Failed!</h4>
                  <?php
                    if($foto_error == TRUE) {
                      echo $foto_error;
                    }elseif($pdf_error == TRUE) {
                      echo $pdf_error;
                    }
                  ?>
                </div>
                <?php endif; ?>
                <div class="card-body">
                  <?php if(form_error('nama_library') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Name library<b><?= strip_tags(form_error('nama_library'));?></b></label>
                      <input type="text" name="nama_library" class="form-control is-warning" required="required" placeholder="Fill in the Name library..." id="inputWarning">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name library</label>
                      <input type="text" name="nama_library" class="form-control" required="required" placeholder="Fill in the Name library..." value="<?= set_value('nama_library');?>">
                    </div>
                  <?php endif; ?>
                  <?php
                      if ($sub_menunya == 'IIGCE') {
                        $kategori = 'IIGCE Techninal Paper';
                      } else if ($sub_menunya == 'General') {
                        $kategori = 'General Paper & Presentation';
                      } else if ($sub_menunya == 'References') {
                        $kategori = 'References';
                      } else if ($sub_menunya == 'API') {
                        $kategori = 'API News Magazine';
                      }
                    ?>
                  <?php if(form_error('kategori_library') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Category<b><?= strip_tags(form_error('kategori_library'));?></b></label>
                      <input type="text" name="kategori_library" class="form-control is-warning" required="required" placeholder="Fill in the Category..." id="inputWarning" value="<?= $kategori;?>" readonly="readonly" style="background-color: #cccaca;">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <input type="text" name="kategori_library" class="form-control" required="required" placeholder="Fill in the Category..." value="<?= $kategori;?>" readonly="readonly" style="background-color: #cccaca;">
                    </div>
                  <?php endif; ?>
                  <?php if(form_error('tanggal_library') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Date<b><?= strip_tags(form_error('tanggal_library'));?></b></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" name="tanggal_library" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                      </div>
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" name="tanggal_library" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask value="<?= set_value('tanggal_library');?>">
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if($foto_error == TRUE OR form_error('foto_library') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> Picture&nbsp;&nbsp;<code>Minimum 200 x 250</code><b><?= strip_tags(form_error('foto_library'));?></b></label>
                      <input type="file" name="foto_library" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>Picture&nbsp;&nbsp;<code>Minimum 200 x 250</code></label>
                      <input type="file" name="foto_library" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                  <?php if($pdf_error == TRUE OR form_error('pdf_library') == TRUE): ?>
                    <div class="form-group">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell"></i> File&nbsp;&nbsp;<code>*pdf</code><b><?= strip_tags(form_error('pdf_library'));?></b></label>
                      <input type="file" name="pdf_library" class="form-control is-warning" required="required">
                    </div>
                  <?php else: ?>
                    <div class="form-group">
                      <label>File&nbsp;&nbsp;<code>*pdf</code></label>
                      <input type="file" name="pdf_library" class="form-control" required="required">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning" value="reset">Reset</button>
                  <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/library/'.$sub_menunya);?>';return false;">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>