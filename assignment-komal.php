<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $status = $_POST['status'];

    if ($status == "selected") {
        $subject = "Selection Confirmation - $position";
        $message = "Dear $name,\n\n".
                   "Congratulations! You have been selected for the position of $position.\n".
                   "Our HR team will contact you soon.\n\n".
                   "Best Regards,\nHR Team";
    } else {
        $subject = "Application Update - $position";
        $message = "Dear $name,\n\n".
                   "Thank you for applying for the position of $position.\n".
                   "We regret to inform you that you were not selected.\n\n".
                   "Best Regards,\nHR Team";
    }

    $headers = "From: hr@company.com";

    if (mail($email, $subject, $message, $headers)) {
        echo "<h3>Email sent successfully!</h3>";
    } else {
        echo "<h3>Error sending email.</h3>";
    }
}
?>