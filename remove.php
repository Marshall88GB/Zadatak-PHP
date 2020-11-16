<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Remove Employees</title>
</head>
<body>
    <!-- Wrapper -->
    <div class="wrapper wrap">
    <!-- Search nav start-->
    <div class="nav-container">
            <div>
                <a href="index.php">
                    <img src="assets/all-user.svg" alt="all" title="All user">
                </a>
            </div>
            <div>
                <a href="insert.php"> 
                    <img src="assets/user-add.svg" alt="ADD" title="Add user">
                </a>
            </div>
            
            </div>
            <!-- END Search nav -->



    <?php
    include('inc/removeEmployer.php');
    ?>

    </div>
 
</body>
</html>