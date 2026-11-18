<?php
// Only accept submissions from the form.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Read submitted values safely and remove extra whitespace.
$firstName = trim($_POST['first_name'] ?? '');
$lastName = trim($_POST['last_name'] ?? '');
$dateOfBirth = trim($_POST['date_of_birth'] ?? '');
$gender = trim($_POST['gender'] ?? '');

// Check every required field before displaying the result.
$errors = [];
if ($firstName === '') {
    $errors[] = 'First name is required.';
}
if ($lastName === '') {
    $errors[] = 'Last name is required.';
}
if ($dateOfBirth === '') {
    $errors[] = 'Date of birth is required.';
} elseif ($dateOfBirth > date('Y-m-d')) {
    $errors[] = 'Date of birth cannot be a future date.';
}
if ($gender === '') {
    $errors[] = 'Gender is required.';
}

// Escape values before placing them into HTML.
$safeFirstName = htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8');
$safeLastName = htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8');
$safeDateOfBirth = htmlspecialchars($dateOfBirth, ENT_QUOTES, 'UTF-8');
$safeGender = htmlspecialchars($gender, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo empty($errors) ? 'Submission Successful' : 'Form Error'; ?></title>
</head>
<body>
    <main class="container">
        <?php if (!empty($errors)): ?>
            <p class="eyebrow error-text">Please review your form</p>
            <h1>Missing Information</h1>
            <ul class="error-list">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="eyebrow success-text">Thank you</p>
            <h1>Information Submitted</h1>
            <p class="intro">Your student information was received successfully.</p>

            <dl class="submitted-info">
                <div>
                    <dt>First Name</dt>
                    <dd><?php echo $safeFirstName; ?></dd>
                </div>
                <div>
                    <dt>Last Name</dt>
                    <dd><?php echo $safeLastName; ?></dd>
                </div>
                <div>
                    <dt>Date of Birth</dt>
                    <dd><?php echo $safeDateOfBirth; ?></dd>
                </div>
                <div>
                    <dt>Gender</dt>
                    <dd><?php echo $safeGender; ?></dd>
                </div>
            </dl>
        <?php endif; ?>

        <a class="back-link" href="index.php">← Back to the form</a>
    </main>
</body>
</html>
