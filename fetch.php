<?php
include 'db.php';

$sql = "SELECT first_name, last_name, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"] . "<br>";
        echo "Last Name: " . $row["last_name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Password: " . $row["password"] . "<br><br>";
    }
} else {
    echo "No records found";
}
?>
