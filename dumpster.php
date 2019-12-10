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