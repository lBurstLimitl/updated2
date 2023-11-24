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
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="style3.css">
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

        <div id="body"> 
  
<div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
            <i class="material-icons">speaker_phone</i>
    </div>
  
  <div class="chat-box">
    <div class="chat-box-header">
      ChatBot
      <span class="chat-box-toggle"><i class="material-icons">close</i></span>
    </div>
    <div class="chat-box-body">
      <div class="chat-box-overlay">   
      </div>
      <div class="chat-logs">
       
      </div><!--chat-log -->
    </div>
    <div class="chat-input">      
      <form>
        <input type="text" id="chat-input" placeholder="Send a message..."/>
      <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
      </form>      
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script><script  src="script.js"></script>
         <!-- scripts -->
    <script src="assets/js/main.js"></script>

<!-- ionicons --> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>