<?php 

if(isset($_POST['insert'])){
    if(isset($_POST['em_fname']) && isset($_POST['em_lname']) && isset($_POST['em_pos']) && isset($_POST['em_tel']) && isset($_POST['em_email']) && isset($_POST['em_info'])){
        if(!empty($_POST['em_fname']) && !empty($_POST['em_lname']) && !empty($_POST['em_pos']) && !empty($_POST['em_tel']) && !empty($_POST['em_email']) && !empty($_POST['em_info'])){
            
            $em_fname = trim($_POST['em_fname']);
            $em_lname = trim($_POST['em_lname']);
            $em_pos = trim($_POST['em_pos']);
            $em_tel = trim($_POST['em_tel']);
            $em_email = trim($_POST['em_email']);
            $em_info = trim($_POST['em_info']);
            
    require ('connect.php');

            $em_fname = mysqli_real_escape_string($conn,$em_fname);
            $em_lname = mysqli_real_escape_string($conn,$em_lname);
            $em_pos = mysqli_real_escape_string($conn,$em_pos);
            $em_tel = mysqli_real_escape_string($conn,$em_tel);
            $em_email = mysqli_real_escape_string($conn,$em_email);
            $em_info = mysqli_real_escape_string($conn,$em_info);

$query = "INSERT INTO employer(em_fname,em_lname,em_pos,em_tel,em_email,em_info) VALUES ('{$em_fname}','{$em_lname}','{$em_pos}','{$em_tel}','{$em_email}','{$em_info}')";
    if(mysqli_query($conn,$query) === true){
        echo "New record succesfully created";

    }else{
        echo "Error!";
    }


        }else{
            echo "All fields must be filled in.";
        }
    }else {
       echo " All parametars must be send." ;
    }
}

?>