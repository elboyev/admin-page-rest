<?php include 'header.php';
  include 'sidebar.php' ;?>
<!-- main content  -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
             <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Post</h6>
                 

                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">

                <form class="user" action="add_post_code.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" autocomplete="off" class="form-control form-control-user" name="post_title" placeholder="Post Title">
                  </div>

                  <div class="col-sm-6">
                    <select name="post_category" id="search" class="form-select form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <!-- <input type="text" class="form-control form-control-user" id="search"  name="post_category" placeholder="Post Category" autocomplete="off">  -->
                    <input type='hidden' id='category_id' name="category_id">
                      <div style="display: inline-flex; position: absolute;z-index: 999;background: whitesmoke; width: 200px;
                      " id="display" class="form-group"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control form-control-user" name="post_description" placeholder="Post Description">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" autocomplete="off" class="form-control form-control-user" name="post_link" placeholder="Post Link">
                  </div>
                  <div class="col-sm-6">
                    <input type="file"  class="form-control d-flex flex-row" name="post_image" placeholder="">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button> 
                  
                <hr>
               
              </form>                    
                  </div>
                </div>
              </div>
            </div>  
        <!-- /.container-fluid -->
</div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
         <?php include 'footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
    <script src="post_script.js"></script>


</body>

</php>


