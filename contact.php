<?php
include 'topbar.php';
include 'head.php';
include 'header.php';

?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Get in Touch</h2>
            <p>

            </p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>K-Unity Building, Kiambu Town</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>info@brodenminds.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+12547000000000</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Open Hours:</h4>
                            <p>Mon-Fri: 8:00AM - 5:00PM</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>
            </div>


            <div class="col-lg-8">
                <form action="" method="POST" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="txtname" class="form-control" id="txtname" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="txtsubject" id="txtsubject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="txtmessage" rows="7" placeholder="Message" required></textarea>
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message"><?php if (isset($email)) {
                                                        echo 'Success! Thanks for submitting';
                                                    } ?></div>
                    </div>

                    <div class="text-center"><input type="submit" name="submit" value="Send Message">
                        <style>
                            input[type='submit'] {
                                background: #009282;
                                color: #fff;
                                border: none;
                                border-radius: 16px;
                                display: inline-block;
                                margin: 4px 2px;
                                padding: 10px 20px;
                                cursor: pointer;
                            }
                        </style>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section><!-- End Contact Section -->

<?php
include 'footer.php';
//include 'config.php';
?>

<?php
//Make database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "broadmind";


//You can now insert the data of your users who fill out the form into the database.
if (isset($_POST['submit'])) {

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

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
    }
    if (isset($email)) {
        echo 'Success!';
    }
}
