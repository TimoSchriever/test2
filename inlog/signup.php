<?php 
    include_once 'includes/header.php';
?>
<?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields.</p>";
        }elseif($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username.</p>";
        }elseif($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email.</p>";
        }elseif($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Password doesn't match.</p>";
        }elseif($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again.</p>";
        }elseif($_GET["error"] == "usernametaken") {
            echo "<p>Username already in use, try another username</p>";
        }elseif($_GET["error"] == "none") {
            echo "<p>Account created</p>";
        }
    }
?>
<div class="index-signup">
    <h4>Sign up</h4>
    <p>Don't have a account jet sign up here.</p>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="enter sir name">
        <br>
        <input type="text" name="uid" placeholder="enter username">
        <br>
        <input type="text" name="email" placeholder="enter email">
        <br>
        <input type="password" name="pwd" placeholder="enter password">
        <br>
        <input type="password" name="pwdrepeat" placeholder="repeat password">
        <br>
        <button type="submit" name="submit">submit</button>
        <button><a href="login.php">Inloggen</a></button>
    </form>
</div>
<?php
    include_once 'includes/footer.php';
?>