

<?php 
require('connect.php');

    $query = "SELECT * FROM employer";
    $result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

        ?>
    <div class="data-conainer wrap">

        <p> <span class="span-text">ID:</span> <?php echo $row['em_id']; ?></p>
        <p><span class="span-text">Name:</span> <?php echo $row['em_fname'] . " " . $row['em_lname']; ?></p>
        <p><span class="span-text">Position:</span> <?php echo $row['em_pos']; ?></p>
        <p><span class="span-text">Tel:</span><?php echo $row['em_tel'] ; ?> </p>
        <p> <span class="span-text">Email:</span> <?php echo $row['em_email'] ; ?> </p>
        <p> <span class="span-text">Info:</span> <?php echo $row['em_info'] ; ?> </p>
        <div class="remove-btn-conatiner">
        <a class="remove" href="inc/removeEMP.php?id=<?php echo $row['em_id']; ?>" > <img src="assets/user-remove.svg" alt="Remove"> </a>
        </div>


        </div>


    <?php
    }
    }else{
        echo "NO Employers";
    }
    ?>