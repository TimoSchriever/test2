<?php 
    if(isset($_POST["submit"])) {

        $name = $_POST["name"];
        $username = $_POST["uid"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdrepeat"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if(invalidUid($username) !== false) {
            header("location: ../signup.php?error=invaliduid");
            exit();
        }
        if(invalidEmail($email) !== false) {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if(invalidpwd($pwd, $pwdRepeat) !== false) {
            header("location: ../signup.php?error=passwordsdontmatch");
            exit();
        }
        if(uidExists($conn, $username) !== false) {
            header("location: ../signup.php?error=usernametaken");
            exit();
        }

        createUser($conn, $name, $email, $username, $pwd);
    }else {
        header("location: ../signup.php");
        exit();
    }

?>