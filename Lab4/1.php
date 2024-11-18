<html>
    <head>
        <title>Name</title>
    </head>
    <body>
        <form method="post" action="">
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value=""> <hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
        </form>
    </body>
    <?php
    $nameErr = "";
 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
 
        if (empty($name))
        {
            $nameErr = "Name is required";
            echo $nameErr;
        } else
 
        {
            $wordCount = count(explode(" ", trim($name)));
            if ($wordCount < 2)
            {
                $nameErr = "Name must contain at least two words<br>";
                echo $nameErr;
            }
 
            if (!ctype_alpha($name[0]))
            {
                $nameErr = "Name must start with a letter<br>";
                echo $nameErr;
            }
 
            $allowed = true;
            for ($i = 0; $i < strlen($name); $i++)
            {
                if (!ctype_alpha($name[$i]) && $name[$i] !== '.' && $name[$i] !== '-' && $name[$i] !== ' ')
                {
                    $allowed = false;
                    break;
                }
            }
            if (!$allowed)
            {
                $nameErr = "Can contain a-z, A-Z, period, dash only<br>";
                echo $nameErr;
            }
        }
 
        if ($nameErr == "")
        {
            echo "Name is valid!";
        }
    }
    ?>
 
</html>