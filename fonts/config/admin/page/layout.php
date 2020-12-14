<!DOCTYPE html>
<html lang="en">

<?php require "layout/head.php"; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php require "layout/sidebar.php"; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

  <?php require "layout/topbar.php"; ?>    

        <!-- Begin Page Content -->
        <div class="container-fluid">

   <?php require  "page/" . $template . "/base.php"; ?>       

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php require "layout/footer.php"; ?> 

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


<?php require "layout/script.php"; ?> 

</body>

</html>