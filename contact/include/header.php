<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SV.Olympia Cuijk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/aa5c5942fe.js" crossorigin="anonymous"></script>
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <header class="header-lesaanbod" id="myTopnav">
        <a href="../index.php"><img class="logo" src="../img/Schermafbeelding 2022-02-24 145035.png"></a>
            <nav>
                <ul class="nav-midden">
                    <li><a href="../index.php" class="home">Home</a></li>
                    <li><a href="../lesaanbod/weekoverzicht.php" class="lesaanbod">lesaanbod</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">lidmaatschap 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="../lidmaatschap/aanmelden.php">Aanmelden</a>
                            <a href="../lidmaatschap/afmelden.php">Afmelden</a>
                            <a href="../lidmaatschap/contributie.php">Contributie</a>
                            <a href="../lidmaatschap/lidmaatschapweiziging.php">lidmaatschapweiziging</a>
                        </div>
                    </div> 
                    <li><a href="contact.php" class="contact">contact</a></li>
                </ul>              
            </nav>
            <li><a href="../inlog/login.php" class="login"><i class="fa-solid fa-user"></i></i></i></a></li>
        </header>
                <!--end header navbar -->
                <!-- responsive navbar -->
                <script>
                    function myFunction() {
                        var x = document.getElementById("myTopnav");
                        if (x.className === "header-lesaanbod") {
                            x.className += " responsive";
                        } else {
                            x.className = "header-lesaanbod";
                        }
                    }
                </script>
        <section>
            <div class="sidenav-contact">
                <a href="contact.php" class="all">Bestuur en leiding</a>
                <br>
                <a href="bestuur.php" class="bestuur">Bestuur</a>
                <br>
                <a href="leiding.php" class="leiding">Leiding</a>
            </div>
        </section>