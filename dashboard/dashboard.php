<?php 

session_start();

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
                    <a href="dashboard.php">
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
                    <a href="messages.php">
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
         <!-- scripts -->
    <script src="assets/js/main.js"></script>

<!-- ionicons --> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>