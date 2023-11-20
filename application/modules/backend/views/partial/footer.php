<footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="<?= site_url('home/')?>" target="_blank">INAGA</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.0.0-rc.3 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('asset/backend/');?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('asset/backend/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/backend/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('asset/backend/');?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/backend/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/backend/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('asset/backend/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('asset/backend/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/backend/');?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('asset/backend/');?>dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('asset/backend/');?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('asset/backend/');?>plugins/toastr/toastr.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('asset/backend/');?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('asset/backend/');?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/backend/');?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('asset/backend/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/backend/');?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('asset/backend/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Summernote -->
<script src="<?= base_url('asset/backend/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url('asset/backend/');?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('asset/backend/');?>plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
  $(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

     // Setup - add a text input to each footer cell
 
    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );

    // SUB MENU ISLAND PROVINCE DISTRICT
    $('#island').change(function(){
      var island_id = $('#island').val();
      if(island_id){
        $.ajax({
          url:"<?php echo base_url(); ?>backend/geothermalpotency/island/getprovince",
          method:"POST",
          data:{island_id:island_id},
          success:function(data)
          {
            $('#province').html(data);
            $('#district').html('<option value="none" hidden="hidden">-- SELECT DISTRICT --</option>');
          }
        });
      }else{
        $('#province').html('<option value="none" hidden="hidden">-- SELECT PROVINCE --</option>');
        $('#district').html('<option value="none" hidden="hidden">-- SELECT DISTRICT --</option>');
      }
    });

    $('#province').change(function(){
      var province_id = $('#province').val();
      if(province_id){
        $.ajax({
          url:"<?php echo base_url(); ?>backend/geothermalpotency/island/getdistrict",
          method:"POST",
          data:{province_id:province_id},
          success:function(data)
          {
            $('#district').html(data);
          }
        });
      }else{
        $('#district').html('<option value="none" hidden="hidden">-- SELECT DISTRICT --</option>');
      }
    });
    // SUB MENU ISLAND PROVINCE DISTRICT

    // SUB MENU GEOTHERMAL WORKING AREA (PROJECT & ACTIVITIES)
    $('#province_project').change(function(){
      var province_id = $('#province_project').val();
      if(province_id){
        $.ajax({
          url:"<?php echo base_url(); ?>backend/geothermalpotency/project/getgwaname",
          method:"POST",
          data:{province_id:province_id},
          success:function(data)
          {
            $('#gwa_name_project').html(data);
            $('#developer_project').html('<input type="text" name="developer" id="developer_project" class="form-control" required="required" placeholder="Fill in the Developer.." value="" readonly="readonly">');
          }
        });
      }else{
        $('#gwa_name_project').html('<option value="none" hidden="hidden">-- SELECT GWA NAME --</option>');
        $('#developer_project').html('<input type="text" name="developer" id="developer_project" class="form-control" required="required" placeholder="Fill in the Developer.." value="" readonly="readonly">');
      }
    });

    $('#gwa_name_project').change(function(){
      var gwa_name_id = $('#gwa_name_project').val();
      if(gwa_name_id){
        $.ajax({
          url:"<?php echo base_url(); ?>backend/geothermalpotency/project/getdeveloper",
          method:"POST",
          data:{gwa_name_id:gwa_name_id},
          success:function(data)
          {
            $('#developer_project').html(data);
          }
        });
      }else{
        $('#developer_project').html('<input type="text" name="developer" id="developer_project" class="form-control" required="required" placeholder="Fill in the Developer.." value="" readonly="readonly">');
      }
    });
    // SUB MENU GEOTHERMAL WORKING AREA (PROJECT & ACTIVITIES)
    $("#example1").DataTable();
    $("#example2").DataTable();
    $("#example3").DataTable();
    $('#datemask').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    $('[data-mask]').inputmask()
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    $('#textarea').summernote();
    $('#textarea2').summernote();
    $('.select2').select2();
  });

</script>
</body>
</html>