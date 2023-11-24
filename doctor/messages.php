<?php 

session_start();
require_once('config.php');
$user=$_SESSION['login'];
    if(empty($_SESSION['login'])){
        header("Location: ../index.php");
    }

    if(isset($_GET['#logout'])){
        session_destroy();
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--styles-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!--navigation menu-->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-octocat"></ion-icon>
                        </span>
                        <span class="title">Pet Hive Clinic</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="registerpet.php">
                        <span class="icon">
                            <ion-icon name="fish-outline"></ion-icon>
                        </span>
                        <span class="title">Register My Pet</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="mypets.php">
                        <span class="icon">
                            <ion-icon name="paw-outline"></ion-icon>
                        </span>
                        <span class="title">My Pets</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>     
                
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li> 

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li> 
            </ul>
        </div>
    
    <!--main-->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="assets/imgs/bea.jpg" alt="">
            </div>
        </div>

        <!-- cards -->
        


        <!--order details list-->
        <div class="details">
              <div class="recentOrders">
                 <div class="cardHeader">
                    <h2>My Pets</h2>
                    <a href="#" class="btn">View All</a>
                 </div>

                 <table>
                    <thead>
                        <tr>
                            <td>Message from</td>
                            <td>Message:</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $sql="SELECT * FROM messages INNER JOIN users ON users.id=messages.ownerid where ownerid = $user";
$stmt = $db ->prepare($sql);

if ($stmt->execute()) {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
              echo '<tr>';
                            // echo '<td>'. $row['messid'].'</td>';    
                            echo '<td>'. $row['firstname'].'</td>';
                            echo '<td>'. $row['message'].'</td>';
                            echo '<td>' . ($row['status'] == 0 ? 'New' : 'Read') . '</td>';
            echo '<td><button onclick="changeStatus(' . $row['messid'] . ')">Mark as read</button></td>';
            echo '</tr>';
                }
          }  


?>
                    </tbody>
                 </table>
            </div>

           
                </table>
            </div>
        </div>
    </div>
 </div>
 <script>
    function changeStatus(messid) {
        // Assuming you have jQuery for simplicity
        $.ajax({
            type: "POST",
            url: "change_status.php", // Create a new PHP file for handling the status change
            data: { messid: messid },
            success: function (response) {
                // Update the UI or handle the response as needed
                console.log(response);

                location.reload();
            }
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- scripts -->
    <script src="assets/js/main.js"></script>

<!-- ionicons --> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>