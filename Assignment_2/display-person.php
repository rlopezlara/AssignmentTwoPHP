
<!--Display information block once you sign in -->
<?php
require './content/header.php';

    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location:signin.php');
        exit();
    }else{
        require './content/database.php';

        $sql = "SELECT * FROM informationtoshow";
      
        $result = $conn->query($sql);

        echo'<section class = "person-row text-center">';
        echo '<div class="col-sm-12 col-md-6 col-lg-6 mx-auto" >';
        echo '<table class ="table table-striped">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone Number</th>      
            </tr>';
        foreach ($result as $row) {
            echo '<tr>
                <td>' .$row['fname'] . '</td>
                <td>' .$row['lname'] . '</td>
                <td>' .$row['position'] . '</td>
                <td>' .$row['email'] . '</td>
                <td>' .$row['telNumber'] . '</td> 
               </tr> ';
        }
        echo '</table>';
        echo '<a class = "btn btn-outline-success" href = "logout.php">Logout</a>';
        echo '</div>';
        echo '</section>';

        $conn = null;
    }
    require './content/footer.php';	

?>
