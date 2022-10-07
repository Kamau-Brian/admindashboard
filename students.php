<!DOCTYPE html>
<html>
    
<!-- links/head here -->
<?php
        require_once('includes/links.php');
    ?>


<body >
    <!-- All our code. write here   -->

    <!-- header here -->
    <?php
        require_once('includes/header.php');
    ?>

    <!-- sidebar here -->
    <?php
        require_once('includes/sidebar.php');

        //fetch all user records
        //1.database connection
        require_once('dbconnection.php');
        $fetchEnrolledStudents=mysqli_query($Conn,"SELECT *FROM enrollments");
    ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Enrolled Students</span>
                            <span class="float-right">
                                <a href="addstudents.php" class="btn btn-secondary btn -sm">add student</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped table-hover  ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Reg Number</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>course</th>
                                        <th>Enrolled On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php while($row=mysqli_fetch_array($fetchEnrolledStudents)) {?>

                                        <tr>
                                        <td><?php echo $row['id']?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['reg_number']?></td>
                                        <td><?php echo $row['phone']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['course']?></td>
                                        <td><?php echo $row['Created_at']?></td>
                                        <td>
                                            <a href="editStudents.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="viewStudents.php?id=<?php echo $row['id']?>" class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="deleteStudent.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>


                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            


        


        </div>
        

            
    </div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>