<?php
    session_start();
    if (!isset($_COOKIE['status'])) {
        header('location: login.html'); 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'db.php'; 
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        
        $connection = getConnection();
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "User added successfully.";
        } else {
            echo "Failed to add user.";
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
?>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <a href="userlist.php">Back to User List</a>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
