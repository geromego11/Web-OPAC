<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    # Database Connection File
    include "dbconn.php";

    # Validation helper function
    include "func-validation.php";

    /** Get data from POST request
     * and store them in variables
     **/
    $email = $_POST['email'];
    $password = $_POST['password'];

    # Simple form validation

    $text = "Email";
    $location = "login.php";
    $ms = "error";
    is_empty($email, $text, $location, $ms, "");

    $text = "Password";
    $location = "login.php";
    $ms = "error";
    is_empty($password, $text, $location, $ms, "");

    # Search for the email in the 'users' table
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    # If the email exists in the 'users' table
    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();

        $user_id = $user['id'];
        $user_email = $user['email'];
        $user_password = $user['password'];
        $user_type = $user['user_type']; // Get the user type from the database

        if ($email == $user_email) {
            if (password_verify($password, $user_password)) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_email'] = $user_email;

                if ($user_type === 'admin') {
                    header("Location: admin.php");
                } elseif ($user_type === 'student') {
                    header("Location: student.php");
                } else {
                    // Handle unknown user types
                    $em = "Unknown user type";
                    header("Location: login.php?error=$em");
                }
            } else {
                $em = "Incorrect email or password";
                header("Location: login.php?error=$em");
            }
        } else {
            $em = "Incorrect email or password";
            header("Location: login.php?error=$em");
        }
    } else {
        $em = "Incorrect email or password";
        header("Location: login.php?error=$em");
    }
} else {
    # Redirect to "login.php"
    header("Location: login.php");
}


?>