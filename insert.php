<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Employees</title>
</head>
<body>
    <!-- Wrapper -->
    <div class="wrapper wrap">
   <!-- Search nav start-->
        <div class="nav-container">
            <div >
                <a href="index.php">
                    <img src="assets/all-user.svg" alt="all" title="All user">
                </a>
            </div>
            <div >
                <a href="remove.php">
                    <img src="assets/user-remove.svg" alt="Remove" title="Remove user">
                </a>
            </div>
            
        </div>
            <!-- END Search nav -->
        <div class="form-container">
        
        <form action="#" method="POST">
            <div class="input">
                <label for="em_fname" class="span-text">First name: </label>
                    <input type="text" name="em_fname" required>
             </div>
            <div class="input">
                <label for="em_lname" class="span-text">Last name: </label>
                    <input type="text" name="em_lname" required>
            </div>
            <div class="input">
                <label for="em_pos" class="span-text">Position: </label>
                    <input type="text" name="em_pos" required> 
            </div>
            <div class="input">
                <label for="em_tel" class="span-text">Tel: </label>
                    <input type="text" name="em_tel" required>
                </div>
            <div class="input">
                <label for="em_email" class="span-text">Email: </label>
                    <input type="email" name="em_email" required>
                </div>
            <div class="input">
                <label for="em_info" class="span-text">Info: </label>
                    <textarea type="text" name="em_info" required> </textarea> 
                </div>
            <div class="submit-form">
                <input type="submit" name="insert" value="SAVE">
             </div>
  


        </form>

        </div>


        <div class="message">
        <?php 
        include("inc/addEmployer.php");
        ?>

</div>

    </div>
 
</body>
</html>