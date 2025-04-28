<?php
require '../../includes/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <?php require '../../includes/links.php'; ?>

    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <?php require '../../includes/navbar.php'; ?>

        <!-- Sidebar -->
        <?php require '../../includes/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Users</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Users Table</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="searchonly" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Gender</th>
                                                <th>Role</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $items = mysqli_query($conn, "SELECT * FROM tbl_user LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_user.gender_id
                                           LEFT JOIN tbl_roles ON tbl_roles.role_id = tbl_user.role_id");
                                            while ($row = mysqli_fetch_array($items)) {
                                                echo '<tr>';
                                                echo '<td>', $row['user_id'], '</td>';
                                                echo '<td>', $row['firstname'], ' ', $row['middlename'], ' ', $row['lastname'], '</td>';
                                                echo '<td>', $row['email'], '</td>';
                                                echo '<td>', $row['username'], '</td>';
                                                echo '<td>', $row['password'], '</td>';
                                                echo '<td>', $row['gender'], '</td>';
                                                echo '<td>', $row['role'], '</td>';
                                               
                                                ?>

                                                <td>
                                                <a href="update.users.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-primary">Update</a>
                                                <a href="userData/ctrl.delete.users.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-danger"Delete>Delete</a>
                                            </td>
                                            <?php
                                            echo '</tr>';

                                                
                            
                                                

                                                
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Gender</th>
                                                <th>Role</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php require '../../includes/footer.php'; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php require '../../includes/data.tables.php'; ?>
</body>

</html>