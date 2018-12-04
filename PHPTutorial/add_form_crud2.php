 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO guests (firstname, lastname, age, test) VALUES ('Jooohn', 'Doooe', '13', 't')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " ."<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
