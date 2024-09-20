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
        <?php
        include_once "assets/php/header.php";
        include_once "database/db_connect.php";
        ?>

        <?php
        $needed = ["id", "date", "timeStamp"];
        $msg = "Bestelling voltooid!";
        $cancel = false;

        if (
            !isset($_POST)
            || !isset($_POST["id"])
            || !isset($_POST["date"])
            || !isset($_POST["timeStamp"])
            || !isset($_POST["tickets"])
            || !isset($_POST["lastName"])
            || !isset($_POST["email"])
        ) {
            $msg = "Er is iets mis gegaan, probeer opniew.";
            $cance = true;
        }

        // Put payment checks here

        // // // // // // // // //

        if (!$cancel) {
            $post = $_POST;
            $tickets = json_encode($post["tickets"], JSON_UNESCAPED_SLASHES);

            $valiSql = $stripInjections("
            INSERT INTO `purchases` (`movie_id`, `purchase_date`, `purchase_timestamp`, `purchase_seats`, `purchase_name`, `purchase_last_name`, `purchase_email`)
            VALUES ('{$post["id"]}', '{$post["date"]}', '{$post["timeStamp"]}', '{}', '{$post["firstName"]}', '{$post["lastName"]}', '{$post["email"]}')
            ");  
            
            $stmt = $conn->prepare($valiSql);
            $stmt->execute();
            $stmt->fetch();
            $stmt->close();

            print_r($conn);
        }
        ?>

        <main>
            <div class="main-container">
                <div class="main-header main-content">
                    <h1 class="main-h1"><?=$msg?></h1>

                    <?php if ($cancel) { exit(); }?>

                                
                    <?php
                    print_r($sql);

                    // print_r($post);
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