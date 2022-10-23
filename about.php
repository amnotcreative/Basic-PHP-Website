<?php
    $con = mysqli_connect('localhost', 'root');
    if($con){
    mysqli_select_db($con, 'test');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $des = $_POST['des'];

    // if(empty($name))
    //     echo '<script>alert("Please enter a name to submit")</script>';
    // else if(empty($email))
    //     echo "Please enter an email to submit <br>";
    // else if(empty($number))
    //     echo "Please enter a number to submit <br>";
    // else if(empty($des))
    //     echo "Please enter a description to submit <br>";
    // else
    //{
        $query = "INSERT INTO users (name, email, number, des) VALUES('$name', '$email', '$number', '$des')";
        if ($con->query($query) === TRUE) 
        {
            echo '<script>alert("Thank you for contacting us")</script>';
        } 
        else 
        {
            echo "Error: " . $query . "<br>" . $con->error;
        }
        //mysqli_query($con, query($query));
        

    //}
    echo '<a class=\"text-center\" href=index.php>Back to home Page</a>';
    //header('location:index.php');
    }
?>