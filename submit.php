<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $future = htmlspecialchars($_POST["future"]);
    $comments = htmlspecialchars($_POST["comments"]);
    $date = htmlspecialchars($_POST["date"]); // Capture the date input
    $consent = isset($_POST["consent"]) ? "Yes" : "No";  // Checks if consent is given

    // Define the data format for storing in the file
    $data = "Name: $name, Age: $age, Address: $address, Email: $email, Phone: $phone, Future Goal: $future, Comments: $comments, Date: $date, Consent Given: $consent" . PHP_EOL;

    // Append the data to data.txt file
    $file = 'data.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "<p>Data submitted successfully!</p>";
    echo "<button onclick=\"window.location.href='index.php'\">Go Back</button>";
} else {
    echo "Invalid request.";
}
?>