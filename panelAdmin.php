<!DOCTYPE html>
<html>
    <head>
        <title>Panel Administratora</title>
        <link rel="stylesheet" href="./admin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald&amp;subset=latin-ext" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Panel Administratora</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu</p>
                <li>
                    <a href="add.php">Dodaj użytkownika</a>
                </li>
                <li>
                    <a href="delete.php">Usuń użytkownika</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="./landingPage.html" class="article">Wyloguj się</a>
                </li>
            </ul>
        </nav>

        
                <!-- Page Content  -->
    <div id="content">
        <?php
            error_reporting(0);
            include "connection.php";

            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)>0) {
                echo "<h3><center>Data Available</center></h3>";
                 while($row = mysqli_fetch_assoc($result)) {
                     echo "<h4>ID: </h4>".$row["id"]."<br>"."Name: ".$row["username"]."<br>"."Password: ".$row["password"]."<br><div class='line'></div>";
                 } 
            } else {
                echo "<h3><center>No Data Available</center></h3>";
            }
        ?>
    </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        </script>    
    </body>
</html>