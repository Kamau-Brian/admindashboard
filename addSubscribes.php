<!DOCTYPE html>
<html>

<body>
    <!-- All our code. write here   -->
    
    <!-- sidebar here -->
    <?php
    require_once('includes/links.php');
    require_once('includes/header.php');
    require_once('includes/sidebar.php');

    // submit user data to database
    // 1 db connection
    require_once('dbconnection.php');
    
    if(isset($_POST['submitSubscribers'])){
    // 2 fetch from data
    $email=$_POST["email"];
   
    //3. SQL Query to insert data to database
    $queryData = mysqli_query( $Conn, "INSERT INTO subscribers(email)
     VALUES('$email') ");
    //4.check if data inserted
    if($queryData){
        echo "Data submitted successfully";
    }
    else{
        echo "Error";
    }
    }
    ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Subscribers</span>
                        </div>
                        <div class="card-body">
                            <form action="addSubscribes.php" method="post">
                                
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row col-lg-3">
                                    <button type="submit" class="btn btn-success" name="submitSubscribers">subscribe</button>
                                </div>
                            </form>  
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
