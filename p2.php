author: Akash
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST["name"];
    $phonenumber = $_POST["phonenumber"];
    $emailid = $_POST["emailid"];
    $carmake = $_POST["carmake"];
    $carmodel = $_POST["carmodel"];
    $horsepower = $_POST["horsepower"];
    $licenseplate = $_POST["licenseplate"];
    $city = $_POST["city"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO dlist2 (name, phonenumber, emailid, carmake, carmodel, horsepower, licenseplate, city)
    VALUES ('$name', '$phonenumber', '$emailid', '$carmake', '$carmodel', '$horsepower', '$licenseplate', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "Event information inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content remains the same -->
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <!-- Your existing HTML content for the form -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">join the list</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index2.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about2.html">About Us</a>
               
              
                
            </ul>
        </div>
    </nav>
    
    <!-- Plantation Drive Event Form -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Your form fields remain the same -->
        <form id="join the list">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phonenumber">phonenumber</label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
            </div>
            <div class="form-group">
                <label for="emailid">emailid</label>
                <input type="text" class="form-control" id="emailid" name="emailid" required>
            </div>
            <div class="form-group">
                <label for="carmake">carmake</label>
                <input type="text" class="form-control" id="carmake" name="carmake" required>
            </div>
            <div class="form-group">
                <label for="carmodel">carmodel</label>
                <input type="text" class="form-control" id="carmodel" name="carmodel" required>
            </div>
            <div class="form-group">
                <label for="horsepower">horsepower</label>
                <input type="text" class="form-control" id="horsepower" name="horsepower" required>
            </div>
            <div class="form-group">
                <label for="licenseplate">licenseplate</label>
                <input type="text" class="form-control" id="licenseplate" name="licenseplate" required>
            </div>
            <div class="form-group">
                <label for="city">city</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <footer class="bg-dark text-white mt-5 py-3">

<div class="container text-center">
    <p>&copy; get ready to change your life.</p>
    
</div>

</footer>
    <!-- Your existing HTML content for the footer -->
</body>
</html>
