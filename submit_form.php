<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "camping_hub"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $comments = $conn->real_escape_string($_POST['comments']);

    $sql = "INSERT INTO contact_form (first_name, last_name, email, subject, comments) VALUES ('$first_name', '$last_name', '$email', '$subject', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
        echo "<script>window.location.href = 'contact.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
