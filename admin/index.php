<?php include 'header.php';
include 'sidebar.php';



?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
            <form class="form-inline" method="post" action="generate_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate PDF</button>
</form>

            <form class="form-inline" method="post" action="export_excel_file.php">
<button type="submit" id="excel" name="" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate Excel</button>
</form>

          </div>


<?php
$sql = $conn->query("SELECT COUNT(*) FROM pc_posts WHERE disable_flag='0'");
$row = $sql->fetch_row();
$count = $row[0];
//echo "$row[0]";
?>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="list_of_post.php">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">No. of Posts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row[0]?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <?php
$sql = $conn->query("SELECT COUNT(*) FROM pc_category WHERE disable_flag='0'");
$row = $sql->fetch_row();
$count_cat = $row[0];
//echo "$row[0]";
?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="list_of_category.php">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">No Of Categories</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row[0]?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sitemap  fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>



</div>

<div class="row">
            <div class="col-lg-6 mb-4">

      <div class="card shadow mb-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
                </div>
                <div class="card-body">
                  
                  <h4 class="small font-weight-bold">Name: <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'];?></h4>
                
                  <h4 class="small font-weight-bold"> Email: <?php echo $_SESSION['email'];?></h4>
                  
                  <h4 class="small font-weight-bold">Phone No.: <?php echo $_SESSION['phone'];?> </h4>
                  
                  <h4 class="small font-weight-bold">Personal Details: <?php echo $_SESSION['detail'];?></h4>
                
                  <h4 class="small font-weight-bold">Password: <input type="password" value="FakePSW" id="myInput"><br><br>
                      <input type="checkbox" onclick="showPassword()">Show Password </h4>
                  
                </div>
              </div>
              </div></div>
</div>
 </div>
 <!-- Here is table row is end  -->

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
          <a class="btn btn-primary" href="logout_code.php">Logout</a>
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

  <!-- Page level plugins -->
   <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
<script>
function showPassword() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>

</php>
