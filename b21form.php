<?php
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

$errors = [];

// Name validation
if (empty($name)) {
    $errors[] = "Name is required.";
} elseif (!preg_match("/^[a-zA-Z]+$/", $name)) {
    $errors[] = "Name must contain only letters.";
}

// Email validation
if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

// Age validation
if (empty($age)) {
    $errors[] = "Age is required.";
} elseif (!ctype_digit($age)) {
    $errors[] = "Age must contain only digits.";
}

// Display errors
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    echo "<p>Validation Successful!</p>";
}
?>
