<?php
//Make database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "broadmind";


  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check the connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

//You can now insert the data of your users who fill out the form into the database.
if (isset($_POST['submit'])) {

    //Get form data
    // get the post records
    $txtname = $conn->real_escape_string($_POST['txtname']);
    $txtemail = $conn->real_escape_string($_POST['txtemail']);
    $txtsubject = $conn->real_escape_string($_POST['txtsubject']);
    $txtmessage = $conn->real_escape_string($_POST['txtmessage']);

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $txtemail)) {
        echo '<br><span style="color:red;">The Email address you entered is not valid.</span>';
        exit;
    }

    //db insert query '".$Name."','".$Email."', '".$Phone."', '".$comments."'
    $sql = "INSERT INTO contacts (name, email, subject ,message) VALUES ('" . $txtname . "', '" . $txtemail . "','" . $txtsubject . "', '" . $txtmessage . "')";

    //insert into database
    if (!$result = $conn->query($sql)) {
        die('Error occured [' . $conn->error . ']');
    } else {
        echo "Thank you! We will get in touch with you soon";
    }
    
}