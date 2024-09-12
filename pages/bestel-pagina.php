<?php
include 'database/db_connect.php';

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];

    $sql = "
    SELECT m.movie, m.release_date, m.movie_image, ma.agenda_startdate, ma.tijdstip
    FROM movies m
    JOIN movieagenda ma ON m.id = ma.movie_id
    WHERE m.id = ?
";
}

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param('i', $movie_id);

    $stmt->execute();

    $stmt->bind_result($movie, $release_date, $movie_image, $agenda_startdate, $tijdstip);
    $stmt->fetch();
}

$stmt->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Maarssen</title>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/bestel-pagina.css">
    <!-- FONT LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet"
    >
</head>

<body>
    <div id="container">
        <?php include "assets/php/header.php" ?>
        <main>
            <div class="main-header-container">
                <h1 class="main-header-title">TICKETS BESTELLEN</h1>
            </div>

            
            <form class="form-container" action="" method="post">
                    <div class="form-selections">
                        <div class="form-selection">
                        <?php echo htmlspecialchars($movie);?>
                        </div>
                        <!-- 
                            Check if date and timeStamp exist in $_POST, if it doesn't it means they didn't fill it!!
                        -->
                        <select name="date" class="form-selection" required>
                            <option selected disabled hidden>DATUM</option>
                            <option value="1"><?php echo htmlspecialchars($agenda_startdate); ?></option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select name="timeStamp" class="form-selection" required>
                            <option selected disabled hidden>TIJDSTIP</option>
                            <option value="1"><?php echo htmlspecialchars($tijdstip); ?></option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="form-splitter">
                        <div class="form-split-left">
                            <?php
                            function prettyDump($string) {
                                echo "<pre>";
                                var_dump($string);
                                echo "</pre>";
                            }
                            prettyDump($_POST)
                            ?>
                            <!-- STAP 1 -->
                            <h1 class="global-primary form-left-fix form-step">
                                STAP 1: KIES JE TICKET
                            </h1>

                            <div class="form-tickets-container form-global-margin">
                                <div class="form-tickets-content">
                                    <p class="form-tickets-p global-secondary">
                                        TYPE
                                    </p>
                                    <p class="form-tickets-p global-secondary">
                                        PRIJS
                                    </p>
                                    <p class="form-tickets-p global-secondary">
                                        AANTAL
                                    </p>
                                </div>

                                <div class="global-thinner-line global-background-secondary"></div>

                                <?php
                                $types = [
                                    array(
                                        "name" => "ticketNormaal",
                                        "type" => "Normaal",
                                        "price" => "9,00"
                                    ),
                                    array(
                                        "name" => "ticketKind",
                                        "type" => "Kind t/m 11 jaar",
                                        "price" => "5,00"
                                    ),
                                    array(
                                        "name" => "ticketOld",
                                        "type" => "65 +",
                                        "price" => "7,00"
                                    )
                                ];
                                
                                foreach ($types as $typeTbl) {
                                    $name = $typeTbl["name"];
                                    $type = $typeTbl["type"];
                                    $price = $typeTbl["price"]
                                    
                                    ?>

                                    <div class="form-tickets-content">
                                        <!-- TYPE -->
                                        <p class="form-tickets-p global-secondary">
                                            <?= $type ?>
                                        </p>

                                        <!-- PRIJS -->
                                        <p class="form-tickets-p global-secondary">
                                            &euro;<?= $price ?>
                                        </p>

                                        <!-- AANTAL -->
                                        <select name="tickets[<?= $name ?>]" class="form-tickets-selection">
                                            <option selected value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>

                                    <?php
                                };
                                ?>

                                <div class="global-thinner-line global-background-secondary"></div>

                                <div class="global-center form-tickets-voucher-container">
                                    <p class="form-tickets-p global-secondary">
                                        VOUCHERCODE
                                    </p>
                                    <input type="text" name="voucher" class="form-tickets-voucher-text global-secondary" placeholder="Code">
                                    <!-- TODO: Add onclick function when api is done :thumb: -->
                                    <input type="button" value="TOEVOEGEN" onclick="" class="global-btn form-tickets-voucher-btn">  
                                </div>
                            </div>

                            <!-- STAP 2 -->
                            <h1 class="global-primary form-left-fix form-step">
                                STAP 2: KIES JE STOEL
                                <?php include "assets/php/bestel-seats.php" ?>
                            </h1>

                            <div class="global-center filmdoek">
                                <div class="global-line global-background-primary form-line"></div>
                                <h1 class="global-primary form-left-fix">
                                    FILMDOEK
                                </h1>
                            </div>

                            <!-- STAP 3 -->
                            <h1 class="global-primary form-left-fix form-step">
                                STAP 3: CONTROLEER JE BESTELLING
                            </h1>

                            <div class="form-preview-container">
                            <img src="<?php echo htmlspecialchars($movie_image); ?>" alt="" class="form-preview-img">
                                <div class="form-preview-sub">
                                    <h1 class="global-secondary"><?php echo htmlspecialchars($movie);?>
                                    </h1>

                                    <div>
                                        <img src="assets/images/misc/placeholder.png" alt="" class="form-preview-sub-img">
                                        <img src="assets/images/misc/placeholder.png" alt="" class="form-preview-sub-img">
                                        <img src="assets/images/misc/placeholder.png" alt="" class="form-preview-sub-img">
                                    </div>

                                    <div>
                                        <p class="global-secondary">Bioscoop: AnnexBios-Maarsen</p>
                                        <p class="global-secondary">Wanneer: <?php echo htmlspecialchars($agenda_startdate); ?></p>
                                        <p class="global-secondary">Stoelen: Rij 2, stoel 7</p>
                                        <p class="global-secondary">Tickets: 1x normaal</p>
                                        <br>
                                        <p class="global-secondary">Bioscoop: AnnexBios</p>
                                    </div>
                                </div>
                            </div>

                            <!-- STAP 4 -->
                            <h1 class="global-primary form-left-fix form-step">
                                STAP 4: VUL JE GEGEVENS IN
                            </h1>

                            <div class="form-info-container form-global-margin">
                                <div class="global-center form-info-content">
                                    <input type="text" name="firstName" class="form-tickets-voucher-text global-secondary form-info-text" placeholder="Voornaam">
                                    <input type="text" name="lastName" class="form-tickets-voucher-text global-secondary form-info-text" placeholder="Achternaam*" required>
                                </div>
                                <div class="global-center">
                                    <input type="text" name="email" class="form-tickets-voucher-text global-secondary form-info-text" placeholder="E-mailadres*" required>
                                </div>
                            </div>

                            <!-- STAP 5 -->
                            <h1 class="global-primary form-left-fix form-step">
                                STAP 5: KIES JE BETAALWIJZE
                            </h1>
                        </div>
                        <div class="form-split-right">
                        </div>
                    </div>
            </form>
        </main>
        <?php include "assets/php/footer.php" ?>
    </div>

</body>

</html>