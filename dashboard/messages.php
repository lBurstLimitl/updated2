<?php
session_start();
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message us</title>
    <link rel="stylesheet" href="style1.css">
    
</head>


<body>
    

    <div class="center">
        <h1>Message us</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" id="message" name="message" required>
                <span></span>
                <label>Leave us a message</label>
            </div>

            

            <input type="submit" name="create" id="send"value="send">
            <div class="signup_link">
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function(){
        $('#send').click(function(e){

            var valid = this.form.checkValidity();

            if(valid){
        
            var message     = $('#message').val();
                
                e.preventDefault(); 

             $.ajax({
                type: 'POST',
                url: 'process1.php',
                data: {message: message},
                success: function(data){
                    Swal.fire({
                        'title': 'Successful',
                        'text': data,
                        'type': 'success',
                    });

                    // Redirect to index.php after a short delay (e.g., 1000 milliseconds)
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 1000);
                },
                error: function(data){
                    Swal.fire({
                        'title':'Errors',
                        'text' : 'There were errors while saving the data.',
                        'type' : 'error'
                    });
                }
            });
        } else {
            // Handle validation errors or other cases if needed
        }
    });
});
    
</script>
</body>
</html>