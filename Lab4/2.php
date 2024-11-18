<html>
    <head>
        <title>Name</title>
    </head>
    <body>
        <form method="post" action="">
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="email" value="">
            <button type="button" title="anything@gmail.com">i</button>  <br> <hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
        </form>
    </body>
    <?php
    $emailErr = "";
 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["email"];
 
        if (empty($email)) {
            $emailErr = "Email is required";
            echo $emailErr;
        } else {
            $atPosition = strpos($email, '@');
            $dotPosition = strrpos($email, '.');
 
            if ($atPosition === false || $dotPosition === false || $atPosition < 1 || $dotPosition < $atPosition + 2 || $dotPosition >= strlen($email) - 1) {
                $emailErr = "Invalid email format (e.g., example@example.com)";
                echo $emailErr;
            }
        }
 
        if ($emailErr == "")
        {
            echo "Email is valid!";
        }
    }
    ?>
 

    </html>