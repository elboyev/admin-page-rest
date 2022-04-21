<?php include 'header.php';
include 'sidebar.php';

?>
         <div class="container-fluid">
             <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
                 

                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                     <?php 
                                
                                          $passed_card_id=$_REQUEST['category_id'];
                                          $SelectCarData="Select * from `pc_category` WHERE  `disable_flag`='0' AND `category_id`='$passed_card_id'";
                                          $result = mysqli_query($conn,$SelectCarData);
                                                    while($row = mysqli_fetch_assoc($result)) 
                                                    
                                                    { 
                                                    
                                                             
                                                             $category_id=$row["category_id"];
                                                             $category_name=$row["category_name"];
                                                             

                        

                                                    }
                                                     ?>
<!-- ============================================================================================================================== -->
                <form class="user" method="post" action="edit_category_code.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                    <input type="text" class="form-control form-control-user" value="<?php echo($category_name) ?>" name="category_name" id="category_name" placeholder="Category Name">
                  </div>
                </div>
                  <hr>
                                <button style="width: 300px;" type="submit" class="btn btn-primary form-control-user btn-user btn-block ">Submit</button> 

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

</body>

</php>
