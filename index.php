

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
        if(!empty($_POST["name"]) && isset($_POST["name"]) && !empty($_POST["comment"]) && isset($_POST["comment"])) {
            if(strtolower($_POST["name"]) != "kevin") {
                exit("Name is incorrect!");
            }
            echo $_POST["name"] . '<br>';
            echo $_POST["comment"] . '<br>';
        }
    ?>
    </div>
    <form action="index.php" method = "POST">
    Name:<input type="text" name="name" required>
    Comment:<textarea name="comment" required></textarea>
    <input type="submit" value="Submit">
    </form>
</body>
</html>