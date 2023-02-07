<?php 
    include_once 'includes/header.php';
?>
<aside>
    <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields.</p>";
            }elseif($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login</p>";
            }
        }
    ?>
    <div class="index-login">
        <h4>Login</h4>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="enter username" required>
            <br>
            <input type="password" name="pwd" placeholder="enter password" required>
            <br>
            <button type="submit" name="submit">submit</button>
            <button><a href="signup.php">Maak een account aan</a></button>
        </form>
    </div>
</aside>
<?php
    include_once 'includes/footer.php';
?>