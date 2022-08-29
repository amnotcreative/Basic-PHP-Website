<?php
    $con = mysqli_connect('localhost', 'root');
    if($con){
    mysqli_select_db($con, 'test');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $des = $_POST['des'];

    if(empty($name))
        echo "Please enter a name to submit <br>";
    if(empty($email))
        echo "Please enter an email to submit <br>";
    if(empty($number))
        echo "Please enter a number to submit <br>";
    if(empty($des))
        echo "Please enter a description to submit <br>";
    else
    {
        $query = "INSERT INTO users (name, email, number, des) VALUES('$name', '$email', '$number', '$des')";
        mysqli_query($con, $query);
        echo "<p class=\"text-center text-successful\">Thank you for contacting us {$name}</p>";

    }
    echo '<a class=\"text-center\" href=index.php>Back to home Page</a>';
    //header('location:index.php');
    }
?>