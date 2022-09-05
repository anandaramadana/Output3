<?php
    $first = $_POST['namadepan'];
    echo "First Name : ",$first;
    echo "<br>";

    $last = $_POST['namabelakang'];
    echo "Last Name : ",$last;
    echo "<br>";

    $gender = $_POST['gender'];
    if ($gender == "Male") 
    {
        echo "Jenis Kelamin : Male";
    }else {
        echo "Jenis Kelamin : Female";
    }
    echo "<br>";

    $address = $_POST['alamat'];
    echo "Address : ",$address;
    echo "<br>";

    $email = $_POST['email'];
    echo "Email : ", $email;
    echo "<br>";

    $phone = $_POST['notelp'];
    echo "Phone : ",$phone;
    echo "<br>";

    session_start();
    $_SESSION['tampilfirst']=$first; 
    $_SESSION['tampillast']=$last;
    $_SESSION['tampilgender']=$gender;
    $_SESSION['tampiladdress']=$address;
    $_SESSION['tampilemail']=$email;
    $_SESSION['tampilphone']=$phone;
?>