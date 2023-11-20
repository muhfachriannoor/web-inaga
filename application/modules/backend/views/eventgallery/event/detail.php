<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info Event Calendar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Event & Gallery</li>
            <li class="breadcrumb-item">Event Calendar</li>
            <li class="breadcrumb-item active">Info Event Calendar</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                    <img src="<?= base_url('asset/backend/upload/event/'.$datanya->foto_event);?>" alt="" class="img-rounded" style="width: 100%; height: 500px; object-fit: cover;">
                  </div>
                  <div class="col-md-7">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Name event</td>
                            <td><b><?= $datanya->nama_event;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Start Event - End Event</td>
                            <td><b><?= date('d F Y, H:i A',strtotime($datanya->mulai_event));?> - <?= date('d F Y, H:i A',strtotime($datanya->berakhir_event));?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Location</td>
                            <td><b><?= $datanya->lokasi_event;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Website</td>
                            <td><b><a href="<?= $datanya->website_event;?>" target="_blank"><?= $datanya->website_event;?></a></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Description</td>
                            <td><b><?= $datanya->deskripsi_event;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/eventgallery/event');?>';return false;">Kembali</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
</div>