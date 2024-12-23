<?php 

    $db_host = '127.0.0.1';
    $db_name = 'webtech';
    $db_pass = '';
    $db_user = 'root';

    function getConnection(){
        global $db_host;
        global $db_name;
        global $db_user;
        global $db_pass;
        
        return $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    }

    function auth($user){
        $connection = getConnection();
        $sqlQuery = "SELECT * FROM users WHERE username = '{$user['username']}' AND password = '{$user['password']}';";
        $result = mysqli_query($connection, $sqlQuery);
        //$user = mysqli_fetch_assoc($result);
        mysqli_close($connection);
        return $user;
    }
    function addUser($user){
        $connection = getConnection();
        $sqlQuery = "INSERT INTO users (name, password, email) 
        VALUES ('{$user['username']}','{$user['password']}','{$user['email']}')";

        $status = mysqli_query($connection, $sqlQuery);
        mysqli_close($connection);
        return $status;
    }
    function deleteUser($username) {
        $connection = getConnection();

        $sqlQuery = "DELETE FROM users WHERE username = ?";
        $stmt = mysqli_prepare($connection, $sqlQuery);
        mysqli_stmt_bind_param($stmt, "s", $username);

        $status = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($connection);

        return $status;
    }

?>