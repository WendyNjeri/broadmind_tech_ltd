<?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subjects"];
    $message = $_POST["message"];

    // Database connection
    $servername = "localhost"; // Replace with your database server name
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "broadmind"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email','$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    if ($conn->query($sql) === TRUE) {
        // Data stored successfully, now send an email confirmation to the user
        $to = $email;
        $subject = "Thank you for your submission";
        $message = "Dear $name,\n\nThank you for your submission. We will get back to you soon.";

        mail($to, $subject, $message);

        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();
}
?>