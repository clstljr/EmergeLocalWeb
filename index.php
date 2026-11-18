<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Student Information Form</title>
</head>
<body>
    <main class="container">
        <p class="eyebrow">EmergeLocal Assessment</p>
        <h1>Student Information</h1>
        <p class="intro">Please complete the form below.</p>

        <form action="success.php" method="POST">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" autocomplete="given-name" required>

            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" autocomplete="family-name" required>

            <label for="date_of_birth">Date of Birth</label>
            <input 
                type="date" 
                id="date_of_birth" 
                name="date_of_birth" 
                max="<?php echo date('Y-m-d'); ?>"
                required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <button type="submit">Submit Information</button>
        </form>
    </main>
</body>
</html>
