<?php include('reglog.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald&amp;subset=latin-ext" rel="stylesheet">

        <title>Strona powitalna sklepu</title>
    </head>
    <body>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
    <div id="id01" class="modal">
        <form class="modal-content animate" action="./panelAdmin.php" method="post">
        <?php include('errors.php'); ?>
            <div class="container">
                <label for="uname"><b>Nazwa Użytkownika</b></label>
                <input type="text" placeholder="Podaj nazwe użytkownika" name="uname" required>

                <label for="psw"><b>Hasło</b></label>
                <input type="password" placeholder="Podaj hasło" name="psw" required>
                    
                <button type="submit" name="login_user">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Zapamiętaj mnie
                </label>
            </div>
            <div class="container">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <div id="id02" class="modal">
        <form class="modal-content animate" action="./panelAdmin.php" method="post">
            <?php include('errors.php'); ?>
                <div class="container"> 
                    <label><b>Nazwa Użytkownika</b></label>
                    <input type="text" placeholder="Podaj nazwe użytkownika" name="uname" value="<?php echo $username ?>" required>

                    <label><b>Hasło</b></label>
                    <input type="password" placeholder="Podaj hasło" name="psw_1" required>

                    <label><b>Potwierdź hasło</b></label>
                    <input type="password" placeholder="Potwierdź hasło" name="psw_2" required>

                    <button type="submit" name="reg_user">Zarejestruj się</button>

                </div>
                <div class="container">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
        </form>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>