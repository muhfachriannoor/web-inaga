<?php ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Info Related Regulation</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Geothermal Business</li>
            <li class="breadcrumb-item active">Related Regulation</li>
            <li class="breadcrumb-item active">Info Related Regulation</li>
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
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td width="20%">Category</td>
                            <td><b><?= $datanya->nama_kategori;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Regulation name IND</td>
                            <td><b><?= $datanya->nama_regulation_ind;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">Regulation name ENG</td>
                            <td><b><?= $datanya->nama_regulation_eng;?></b></td>
                          </tr>
                          <tr>
                            <td width="20%">PDF IND</td>
                            <td>
                              <?php if($datanya->pdf_ind != ''):?>
                                <a href="<?= base_url('asset/backend/upload/regulation/relatedregulation/ENG/'.$datanya->pdf_ind);?>" target="_blank">
                                  <button type="button" class="btn btn-success btn-sm" title="PDF ENG">
                                    <span class="fas fa-file-pdf"></span>
                                  </button>
                                </a>
                              <?php else: ?>
                              <?php endif; ?>
                            </td>
                          </tr>
                          <tr>
                            <td width="20%">PDF ENG</td>
                            <td>
                              <?php if($datanya->pdf_eng != ''):?>
                                <a href="<?= base_url('asset/backend/upload/regulation/relatedregulation/ENG/'.$datanya->pdf_eng);?>" target="_blank">
                                  <button type="button" class="btn btn-success btn-sm" title="PDF ENG">
                                    <span class="fas fa-file-pdf"></span>
                                  </button>
                                </a>
                              <?php else: ?>
                              <?php endif; ?>
                            </td>
                          </tr>
                          <tr>
                            <td width="20%">
                              <button type="cancel" class="btn btn-danger" onclick="window.location='<?= site_url('backend/geothermalbusiness/relatedregulation');?>';return false;">Kembali</button>
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