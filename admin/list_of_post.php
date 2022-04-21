<?php include 'header.php';
include 'sidebar.php';
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Posting Table</h1>
            <a href="add_post.php"  class="btn btn-success "><i class="fas fa-plus fa-sm text-white-50"></i> Add Post</a>
          </div>        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>Post ID</th>
                      <th>Category Name</th>
                      <th>Post Title</th>
                      <th>Post Description</th>
                      <th>Post Link</th>
                      <th>Post Image</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Post ID</th>
                      <th>Category Name</th>
                      <th>Post Title</th>
                      <th>Post Description</th>
                      <th>Post Link</th>
                      <th>Post Image</th>
                      <th>Created Date</th>
                      <th>Action</th>
                  </tfoot>
                  <?php

                                            $SelectPostData="SELECT * FROM pc_posts WHERE `disable_flag`= '0'";
                                            $result = mysqli_query($conn,$SelectPostData);
                                                    while($row = mysqli_fetch_assoc($result)) { 


                                                $category_id=$row['category_id'];
                                                 $post_id=$row['post_id'];
                                  
                                $SelectCategory="SELECT * FROM pc_category WHERE `category_id`='$category_id' AND 
                                                 `disable_flag`= '0' ";
                                $resultCategory = mysqli_query($conn,$SelectCategory);
                                                    while($rowcat = mysqli_fetch_assoc($resultCategory)) { 
                                                    
                                                    $category_name=$rowcat['category_name'];

                                                    ?>
                  <tbody>
                    <tr>
                                                       <td><?php echo $row["post_id"];?></td>
                                                        <td><?php echo $rowcat["category_name"];?></td>
                                                        <td><?php echo $row["post_title"];?></td>
                                                        <td 
                                                        style="  max-width: 500px;
                                                            overflow: overlay;
/*                                                                text-overflow: ellipsis;
*/                                                                    white-space: nowrap;

                                                        ">
                                                        <?php echo $row["post_description"];?></td>
                                                        <td><?php echo $row["post_link"];?></td>
                                                        <td>
                                                         <img src=" <?php echo $row["post_image"];?>" alt="Italian Trulli"
                                                           width="100" height="100">
                                                         </td>
                                                        <td><?php echo $row["created_at"];?></td>
                                                        <td>  


                                                          <a href="delete_post.php?post_id=<?php echo $post_id; ?>" style="margin: 10px;" class="btn btn-danger btn-circle btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                          </a>
                                                          <br>
                                                         <a href="edit_post.php?post_id=<?php echo $post_id; ?>" style="margin: 10px;" class="btn btn-primary btn-circle btn-sm">
                                                         <i class="fas fa-edit "></i>
                                                          </a>
                                                          <i class=""></i>
                                                        </td> 
                      </tr>
                                                           <?php } } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</php>
