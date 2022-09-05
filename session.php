<?php
    session_start();
    echo "First Name : ";
    echo $_SESSION['tampilfirst'];
    echo "<br>";

    echo "Last Name : ";
    echo $_SESSION['tampillast'];
    echo "<br>";

    echo "Gender : ";
    echo $_SESSION['tampilgender'];
    echo "<br>";

    echo "Address : ";
    echo $_SESSION['tampiladdress'];
    echo "<br>";

    echo "Email : ";
    echo $_SESSION['tampilemail'];
    echo "<br>";

    echo "Phone : ";
    echo $_SESSION['tampilphone'];
    echo "<br>";
?>