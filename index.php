<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Employees</title>
</head>
<body>
    <!-- Wrapper -->
    <div class="wrapper wrap">
       

        <!-- Search nav start-->
        <div class="nav-container">
            <div>
                <a href="insert.php">
                    <img src="assets/user-add.svg" alt="ADD" title="Add user">
                </a>
            </div>
            <div>
                <a href="remove.php">
                    <img src="assets/user-remove.svg" alt="Remove" title="Remove user">
                </a>
            </div>
            
        </div>
            <!-- END Search nav -->

            <!-- Form start -->
        <div class="form-container">
            <form action="#" method="GET">
                <h2>Search using one condition</h2>
                <div class="input">
                    <label for="search_employer" class="span-text">Enter Employer name or lass name here :</label>
                        <input type="text" placeholder="Enter Employer name or lass name here" name="search_employer"></div>
                <div class="input">
                    <label for="search_occupation" class="span-text">Enter Employer occupation here :</label>
                        <input type="text" placeholder="Enter Employer occupation here" name="search_occupation"></div>
                <div class="submit-form">
                    <input type="submit" value="Search">
                </div>
          
      
        </form>

        
</div>
 <!-- Form end -->



    </div>
    <?php 
	
	include("inc/getEmployer.php");
	
	?>
</body>
</html>