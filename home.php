<?php

require 'Database.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div>
        <h1>Le blog</h1>
        <p>En construction</p>

        <?php
            $db = new Database();
            echo $db->getConnection();
        ?>

    </div>
</body>
</html>