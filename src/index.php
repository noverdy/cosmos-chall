<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Calculator</h1>
    <form method="POST">
        <div>
            <input type="text" id="equation" name="equation" placeholder="1 + 1">
        </div>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if (isset($_POST['equation'])) {
        echo '<p>';
        eval('echo ' . $_POST['equation'] . ';');
        echo '</p>';
    }
    ?>
</body>

</html>