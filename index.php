<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Lets check it out 

    <form method="post" action="index.php">
        <input name="liczba" type="number">
        <input type="submit" value="Potwierdź">
    </form>

    <?php
        $liczbaU = $_POST['liczba']

        if($liczbaU == 1)
        {
            echo "liczba jest równa 1"
        }
        else if($liczbaU == 2)
        {
            echo "liczba jest równa 2"
        }
    ?>

</body>
</html>

