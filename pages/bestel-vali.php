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
        $needed = array(
            "id" => array(
                "id" => null,
            ),
            "date" => array(
                "id" => "date-select",
                "name" => "Je vergeet de datum in te vullen."
            ),
            "timeStamp" => array(
                "id" => "time-select",
                "name" => "Je vergeet de tijdstip in te vullen."
            ),
            "tickets" => array(
                "id" => "seats",
                "name" => "Je vergeet een stoel te selecteeren."
            ),
            "lastName" => array(
                "id" => null,
                "name" => "Je vergeet je achternaam in te vullen."
            ),
            "email" => array(
                "id" => null,
                "name" => "Je vergeet je email in te vullen."
            ),
        );
        
        $msg = "Bestelling voltooid!";
        $cancel = false;

        if (
            !isset($_POST)
        ) {
            $msg = "Er is iets mis gegaan, probeer opniew.";
            $cance = true;
        }

        foreach ($needed as $index => $tbl) {
            if (isset($_POST[$index])) continue;

            $name = isset($tbl["name"]) ? $tbl["name"] : "Er is iets mis gegaan, probeer opniew.";

            $msg = $name;
            $cance = true;
        }

        // Put payment checks here

        // // // // // // // // //

        if (!$cancel) {
            $post = $_POST;
            $tickets = json_encode($post["tickets"], true);

            $valiSql = $stripInjections("
            INSERT INTO `purchases` (`movie_id`, `purchase_date`, `purchase_timestamp`, `purchase_seats`, `purchase_name`, `purchase_last_name`, `purchase_email`)
            VALUES ('{$post["id"]}', '{$post["date"]}', '{$post["timeStamp"]}', '{$tickets}', '{$post["firstName"]}', '{$post["lastName"]}', '{$post["email"]}')
            ");  

            echo $valiSql;
            
            $stmt = $conn->prepare($valiSql);
            $stmt->execute();
            $stmt->fetch();
            $stmt->close();
        }
        ?>

        <main>
            <div class="main-container">
                <div class="main-header main-content">
                    <h1 class="main-h1"><?=$msg?></h1>
                    <?php if ($cancel) { exit(); }?>
                </div>

                <div class="main-body main-content">
                    <div class="info-content">
                        <h1 class="info-h1">Informatie</h1>
                        <p class="info-p">Achternaam: <?= $post["lastName"]?></p>
                        <p class="info-p">Email: <?= $post["email"]?></p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>