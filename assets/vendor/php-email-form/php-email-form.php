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

   /*
    // Set up email parameters
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }*/
    $conn->close();
}
?>