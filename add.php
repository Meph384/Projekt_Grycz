<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            session_start();
            
            // initializing variables
            $username = "";
            $password    = "";
            $errors = array(); 
            
            // connect to the database
            $db = mysqli_connect('localhost', 'root', '', 'projekt');
            
            // REGISTER USER
            if (isset($_POST['reg_user'])) {
              // receive all input values from the form
              $username = mysqli_real_escape_string($db, $_POST['uname']);
              $password_1 = mysqli_real_escape_string($db, $_POST['psw_1']);
              $password_2 = mysqli_real_escape_string($db, $_POST['psw_2']);
            
              // form validation: ensure that the form is correctly filled ...
              // by adding (array_push()) corresponding error unto $errors array
              if (empty($username)) { array_push($errors, "Username is required"); }
              if (empty($password_1)) { array_push($errors, "Password is required"); }
              if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
              }
            
              // first check the database to make sure 
              // a user does not already exist with the same username
              $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
              $result = mysqli_query($db, $user_check_query);
              $user = mysqli_fetch_assoc($result);
              
              if ($user) { // if user exists
                if ($user['username'] === $username) {
                  array_push($errors, "Username already exists");
                }
              }
            
              // Finally, register user if there are no errors in the form
              if (count($errors) == 0) {
                  $password = md5($password_1);//encrypt the password before saving in the database
            
                  $query = "INSERT INTO users (username, password) 
                            VALUES('$username', '$password')";
                  mysqli_query($db, $query);
                  $_SESSION['username'] = $username;
                  $_SESSION['success'] = "You are now logged in";
                  header('location: panelAdmin.php');
              }
            }
        ?>

        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald&amp;subset=latin-ext" rel="stylesheet">

        <title>Strona powitalna sklepu</title>
    </head>
    <body>
    <form class="modal-content animate" action="./add.php" method="post">
            <?php include('errors.php'); ?>
                <div class="container"> 
                    <label><b>Nazwa Użytkownika</b></label>
                    <input type="text" placeholder="Podaj nazwe użytkownika" name="uname" value="<?php echo $username ?>" required>

                    <label><b>Hasło</b></label>
                    <input type="password" placeholder="Podaj hasło" name="psw_1" required>

                    <label><b>Potwierdź hasło</b></label>
                    <input type="password" placeholder="Potwierdź hasło" name="psw_2" required>

                    <button type="submit" name="reg_user">Dodaj do bazy danych</button>

                </div>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>