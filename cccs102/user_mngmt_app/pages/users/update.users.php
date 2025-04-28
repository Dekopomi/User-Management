<?php
require '../../includes/conn.php';
$id= $_GET["user_id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php require '../../includes/links.php' ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->

    <?php require '../../includes/navbar.php' ?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <?php require '../../includes/sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Update Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Users</h3>
                </div>
                <?php
                $select_user = mysqli_query($conn ,"SELECT * FROM tbl_user WHERE user_id = '$id'");
                while ($row = mysqli_fetch_array($select_user)) {

                ?>
                <form action="userData/ctrl.update.users.php?user_id=<?php echo $row ['user_id'] ?>" method="POST">
                  <div class="card-body">
                    <div class="row">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" values="<?php echo $row['firstname'] ?><" placeholder="First Name">
                      </div>

                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="middlename" values="<?php echo $row['middlename'] ?> < "placeholder= "Middle Name">
                      </div>

                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" values="<?php echo $row['lastname'] ?> <" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" <?php echo $row['username'] ?>>
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" <?php echo $row['email'] ?>>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" <?php echo $row['password'] ?>>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label="">Gender</label> <br>
                            <div class="form-check form-check-inline">
                              <input type="radio" name="gender" id="male_id" value="1">
                              <label for="male_id">Male</label>
                            </div>
                            </div>
                            <div class="col-md-6 form-group">
                              <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="female_id" value="2">
                                <label for="female_id">Female</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 form-group">
                                <label="">Role</label>
                                  <div class="form-check form-check-inline">
                                    <input type="radio" name="role" id="knight_id" value="1">
                                    <label for="knight_id">Knight</label>
                                  </div>
                                  

                                  <div class="col-md-6 form-group">
                                    <div class="form-check form-check-inline">
                                      <input type="radio" name="role" id="mage_id" value="2">
                                      <label for="mage_id">Mage</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                      <div class="form-check form-check-inline">
                                        <input type="radio" name="role" id="assassin_id" value="3">
                                        <label for="assassin_id">Assassin</label>
                                      </div>

                                      <div class="col-md-6 form-group">
                                        <div class="form-check form-check-inline">
                                          <input type="radio" name="role" id="bishop_id" value="4">
                                          <label for="bishop_id">Bishop</label>
                                        </div>

                                        <div class="col-md-6 form-group">
                                          <div class="form-check form-check-inline">
                                            <input type="radio" name="role" id="ewan_id" value="5">
                                            <label for="ewan_id">Ewan</label>
                                          </div>
                                        </div>
                                        <div class="card-footer">
                                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </div>
                                        </form>
                                        <?php
                                        }
                                        ?>
                                        </div>









              
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->

              <!-- /.card -->

              <!-- DIRECT CHAT -->

              <!--/.direct-chat -->

              <!-- TO DO List -->

              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- Map card -->

              <!-- /.card -->

              <!-- solid sales graph -->

              <!-- /.card -->

              <!-- Calendar -->

              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php require '../../includes/footer.php' ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php require '../../includes/scripts.php' ?>

</body>

</html>