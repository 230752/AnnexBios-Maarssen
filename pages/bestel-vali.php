<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AnnexBios Maarssen</title>
        <!-- CSS LINKS -->
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/bestel-vali.css">
        <!-- FONT LINKS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet"
        >
    </head>
    <body>
        <?php include_once "assets/php/header.php" ?>

        <?php
        $post = $_POST;
        
        $sql = "
        INSERT INTO `purchases` (`movie_id`, `purchase_date`, `purchase_timestamp`, `purchase_seats`, `purchase_name`, `purchase_last_name`, `purchase_email`)
        VALUES ('', '', '', '', '', '', '')

        ";
        ?>

        <main>
            <div class="main-container">
                <div class="main-header main-content">
                    <h1 class="main-h1">Bestelling voltoit!</h1>

                                
                    <?php

                    print_r($post);
                    ?>
                </div>

                <div class="main-body main-content">
                    <div class="info-content">
                        <p class="info-p"></p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>