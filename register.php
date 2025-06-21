<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: Arial; background: #f4f4f9; padding: 20px; }
        .container { max-width: 400px; margin: 0 auto; background: white; padding: 20px; border-radius: 5px; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; }
        button { background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthdate'];
            $gender = $_POST['gender'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            try {
                $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, email, birthdate, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$firstname, $lastname, $email, $birthdate, $gender, $password]);
                header("Location: login.php?registered=1");
            } catch (PDOException $e) {
                echo '<div class="error">Email already exists!</div>';
            }
        }
        ?>
        <form method="post">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="date" name="birthdate" required>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
