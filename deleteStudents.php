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
        $sql=mysqli_query($Conn,"DELETE FROM enrollments  WHERE id='".$_GET['id']."' ");

        if($sql)
        {
            echo "student deleted successfully";
            header('location:students.php');
        }
        else
        {
            echo "Error Occured. Please Try Again";
        }

    ?>










<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
