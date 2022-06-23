    <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <div class="loader d-none">
    <img src="<?php echo base_url('./upload/loader.gif')  ?>" width="20%">
  </div>
<script src="<?php echo base_url('public/vendors/js/vendor.bundle.base.js')?>"></script>
  <script src="<?php echo base_url('public/vendors/js/vendor.bundle.addons.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('public/js/off-canvas.js')?>"></script>
  <script src="<?php echo base_url('public/js/hoverable-collapse.js')?>"></script>
  <script src="<?php echo base_url('public/js/misc.js')?>"></script>
  <script src="<?php echo base_url('public/js/settings.js')?>"></script>
  <script src="<?php echo base_url('public/js/todolist.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('public/js/dashboard.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<style type="text/css">
  .loader{
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(255,255,255,0.8);
    z-index: 99999999;
  }
</style>
</body>