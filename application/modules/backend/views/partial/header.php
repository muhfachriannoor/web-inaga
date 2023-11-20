<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>INAGA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/summernote/summernote-bs4.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('asset/backend/');?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if($this->session->userdata('foto') != ''): ?>
                <img src="<?= base_url('asset/backend/upload/user/'.$this->session->userdata('foto'));?>" class="user-image" alt="User Image">
              <?php else: ?>
                <img src="<?= base_url('asset/backend/upload/default-user.png');?>" class="user-image" alt="User Image">
              <?php endif; ?>
              <span class="hidden-xs"><?= $this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if($this->session->userdata('foto') != ''): ?>
                  <img src="<?= base_url('asset/backend/upload/user/'.$this->session->userdata('foto'));?>" class="img-circle" alt="User Image">
                <?php else: ?>
                  <img src="<?= base_url('asset/backend/upload/default-user.png');?>" class="img-circle" alt="User Image">
                <?php endif; ?>
                <p>
                  <?= $this->session->userdata('nama');?>
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
                  <a href="<?= site_url('backend/user/update/'.$this->session->userdata('idUser'));?>" class="btn btn-default btn-flat">Ubah Data Akun</a>
                  <a href="<?= site_url('backend/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
    </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('backend/')?>" class="brand-link">
      <img src="<?= base_url('asset/frontend/img/INAGA.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Inaga Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if($this->session->userdata('foto') != ''): ?>
          <img src="<?= base_url('asset/backend/upload/user/'.$this->session->userdata('foto'));?>" class="img-circle elevation-2" alt="User Image">
          <?php else: ?>
          <img src="<?= base_url('asset/backend/upload/default-user.png');?>" class="img-circle elevation-2" alt="User Image">
          <?php endif; ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama');?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview <?= ($menunya == 'Beranda') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'Beranda') ? 'active' : '';?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('backend/backend/');?>" class="nav-link <?= ($sub_menunya == 'Dashboard') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inaga Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/beranda/banner');?>" class="nav-link <?= ($sub_menunya == 'Banner') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/beranda/adsspace');?>" class="nav-link <?= ($sub_menunya == 'Ads Space') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ads Space</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/beranda/infographics');?>" class="nav-link <?= ($sub_menunya == 'Info Graphics') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Info Graphics</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?= ($menunya == 'Association') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'Association') ? 'active' : '';?>">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>Association<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview <?= ($sub_menunya == 'About Us') ? 'menu-open' : '';?>">
                <a href="#" class="nav-link <?= ($sub_menunya == 'About Us') ? 'active' : '';?>">
                  <i class="nav-icon far fa-comment-alt"></i>
                  <p>About Us<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview" style="display: none!important">
                  <li class="nav-item">
                    <a href="<?= site_url('backend/association/aboutus/history');?>" class="nav-link <?= ($sub_menunya2 == 'History') ? 'active' : '';?>">
                      <i class="far fa-square nav-icon"></i>
                      <p>History</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('backend/association/aboutus/visionmission');?>" class="nav-link <?= ($sub_menunya2 == 'Vision & Mission') ? 'active' : '';?>">
                      <i class="far fa-square nav-icon"></i>
                      <p>Vision & Mission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('backend/association/aboutus/currentprogram');?>" class="nav-link <?= ($sub_menunya2 == 'Current Program') ? 'active' : '';?>">
                      <i class="far fa-square nav-icon"></i>
                      <p>Current Program</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('backend/association/aboutus/presidentmessage');?>" class="nav-link <?= ($sub_menunya2 == 'President Message') ? 'active' : '';?>">
                      <i class="far fa-square nav-icon"></i>
                      <p>President Message</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/association/theboard');?>" class="nav-link <?= ($sub_menunya == 'The Board') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>The Board</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/association/member');?>" class="nav-link <?= ($sub_menunya == 'Member') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/association/studentchapter');?>" class="nav-link <?= ($sub_menunya == 'Student Chapter') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Chapter</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?= ($menunya == 'Geothermal Potency') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'Geothermal Potency') ? 'active' : '';?>">
              <i class="nav-icon fas fa-globe"></i>
              <p>Geothermal Potency<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalpotency/main');?>" class="nav-link <?= ($sub_menunya == 'Main Page') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalpotency/island');?>" class="nav-link <?= ($sub_menunya == 'Island, Province, District') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Island, Province, District</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalpotency/resources');?>" class="nav-link <?= ($sub_menunya == 'Geothermal Resources') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Geothermal Resources</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalpotency/workingarea');?>" class="nav-link <?= ($sub_menunya == 'Geothermal Working Area') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Geothermal Working Area</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?= ($menunya == 'Geothermal Business') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'Geothermal Business') ? 'active' : '';?>">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Geothermal Business<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalbusiness/main');?>" class="nav-link <?= ($sub_menunya == 'Main Page') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalbusiness/geothermalregulation');?>" class="nav-link <?= ($sub_menunya == 'Geothermal Regulation') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Geothermal Regulation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalbusiness/relatedregulation');?>" class="nav-link <?= ($sub_menunya == 'Related Regulation') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Related Regulation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalbusiness/stakeholder-overview');?>" class="nav-link <?= ($sub_menunya == 'Stakeholder Overview') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stakeholder Overview</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/geothermalbusiness/stakeholder');?>" class="nav-link <?= ($sub_menunya == 'Stakeholder Directory') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stakeholder Directory</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?= ($menunya == 'NZTE') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'NZTE') ? 'active' : '';?>">
              <i class="nav-icon fas fas fa-book"></i>
              <p>NZTE<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('backend/nzte/story');?>" class="nav-link <?= ($sub_menunya == 'New Zealand Indonesia Geothermal Story') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NZTE Story</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/nzte/directory');?>" class="nav-link <?= ($sub_menunya == 'New Zealand Geothermal Business Directory') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NZTE Directory</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('backend/news');?>" class="nav-link <?= ($menunya == 'News') ? 'active' : '';?>">
              <i class="nav-icon far fa-newspaper"></i>
              <p>News</p>
            </a>
          </li>
          <li class="nav-item has-treeview <?= ($menunya == 'Library') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'Library') ? 'active' : '';?>">
              <i class="nav-icon fas fa-book-open"></i>
              <p>Library<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('backend/library/IIGCE');?>" class="nav-link <?= ($sub_menunya == 'IIGCE') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>IIGCE Technical Paper</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/library/General');?>" class="nav-link <?= ($sub_menunya == 'General') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Paper & Presentation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/library/References');?>" class="nav-link <?= ($sub_menunya == 'References') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>References</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/library/API');?>" class="nav-link <?= ($sub_menunya == 'API') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>API News Magazine</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?= ($menunya == 'Event & Gallery') ? 'menu-open' : '';?>">
            <a href="#" class="nav-link <?= ($menunya == 'Event & Gallery') ? 'active' : '';?>">
              <i class="nav-icon fas fa-calendar-week"></i>
              <p>Event & Gallery<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('backend/eventgallery/event');?>" class="nav-link <?= ($sub_menunya == 'Event') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Calendar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('backend/eventgallery/gallery');?>" class="nav-link <?= ($sub_menunya == 'Gallery') ? 'active' : '';?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('backend/user');?>" class="nav-link <?= ($menunya == 'User') ? 'active' : '';?>">
              <i class="nav-icon fas fa-users"></i>
              <p>User</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>