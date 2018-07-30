<!DOCTYPE html>
<?php
    include_once '../models/User.php';
    session_start();
   
    $error = '';
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $user = new User();
        $user_data = $user->login($_POST['username'], $_POST['password']);
      	
        if( !empty($user_data) ) {
        
            if( $user_data['username'] == 'admin' ){
                $_SESSION['username']= $user_data['username'];
                $_SESSION['name']= $user_data['name'];
                $_SESSION['id_user'] = $user_data['id'];

                header("location: index.php");
            }else{
                $error = "No posee el rol suficiente";
            }
        }else{
            $error = "Nombre de usuario o Password inválido";
        }
        
    }
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <form method="POST">
                
                <div class="container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit">Login</button>
                </div>
                <hr>
                <p><?php echo $error; ?></p>
            </form> 
            
    </body>
</html>
