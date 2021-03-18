<?php
    session_start();
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <nav>
            <div clas="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                        if(isset($_SESSION["useruid"])){
                            echo "<li><a href='kamer.php'>kamer</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>logout</a></li>";
                        }else{
                            echo "<li><a href='login.php'>login</a></li>";
                            echo "<li><a href='reserveer.php'>reserveren</a></li>";
                            echo "<li><a href='contact.php'>contact</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

        <div class="wrapper">