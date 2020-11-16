<?php 

function getEmp (){
    require("connect.php");


if(isset($_GET['search_employer']) || isset($_GET['search_occupation'])){
    if(isset($_GET['search_employer']) &&  !empty($_GET['search_employer'])){
        $condition = $_GET['search_employer'];
        $check="name";
        
    }else{
       $condition = $_GET['search_occupation'];
       $check="position";
        
    }


if(!empty($condition)){
    
        $criteria = trim($condition);
      
        $criteria =mysqli_real_escape_string($conn,$criteria);

    if($check==="name"){
        $query = "SELECT * FROM employer WHERE em_fname LIKE '{$criteria}%' OR em_lname LIKE '{$criteria}%'";
    }else{
        $query = "SELECT * FROM employer WHERE em_pos LIKE '{$criteria}%'";
    }
 
      
    $result = mysqli_query($conn,$query) ;

    if(mysqli_num_rows($result) > 0 ){

        while($row = mysqli_fetch_assoc($result)){

        ?>
        <div class="data-conainer wrap">
            <img src="assets/user.svg" alt="">
        <p> <span class="span-text">ID:</span>  <?php echo $row['em_id']; ?></p>
        <p> <span class="span-text">Name:</span>  <?php echo $row['em_fname'] . " " . $row['em_lname']; ?></p>
        <p> <span class="span-text">Position:</span> <?php echo $row['em_pos']; ?></p>
        <p> <span class="span-text">Tel:</span> <?php echo $row['em_tel'] ; ?> </p>
        <p> <span class="span-text">Email:</span> <?php echo $row['em_email'] ; ?> </p>
        <p> <span class="span-text">Info:</span> <?php echo $row['em_info'] ; ?> </p>

        </div>



        <?php
    }
    echo "Number of results: " . mysqli_num_rows($result);
    }else{
        echo "No results";
    };

    }else{
    echo "Search Feald is EMPTY";
    }



}};
getEmp ();

?>