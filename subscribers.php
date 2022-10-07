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
        $fetchEnrolledStudents=mysqli_query($Conn,"SELECT *FROM subscribers");
    ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Enrolled Students</span>
                            <span class="float-right">
                                <a href="addSubscribes.php" class="btn btn-secondary btn -sm">add subscriber</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped table-hover  ">
                                <thead>
                                    <tr>
                                        <th>No</th>                                     
                                        <th>Email</th>  
                                        <th>Subcribed At</th>                                   
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php while($row=mysqli_fetch_array($fetchEnrolledStudents)) {?>

                                        <tr>
                                        <td><?php echo $row['id']?></td>
                                        
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['created_at']?></td>
                                        
                                        <td>
                                            <a href="addsubscriber.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
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
