<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Maarssen</title>
    <!-- CSS LINKS -->
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/footer.css">
>>>>>>> 5d71fd825198703efe0cac742abad6a787b29ef1
    <link rel="stylesheet" href="assets/css/bestel-pagina.css">
    <!-- FONT LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
<<<<<<< HEAD
        rel="stylesheet">
        <?php include "assets/php/header.php" ?>
=======
        rel="stylesheet"
    >
>>>>>>> 5d71fd825198703efe0cac742abad6a787b29ef1
</head>

<body>
    <div id="container">
        <?php include "assets/php/header.php" ?>
        <main>
<<<<<<< HEAD
            <div class="seats">
            <h1>content</h1>
            <?php include "assets/php/bestel-seats.php" ?>
            </div>
        </main>
        <footer>
            <h1>Footer</h1>
        </footer>
=======
            <div class="main-header-container">
                <h1 class="main-header-title">TICKETS BESTELLEN</h1>
            </div>

            
            <form class="form-container" action="" method="post">
                    <div class="form-selections">
                        <div class="form-selection">
                            [INSERT MOVIE NAME HERE]
                        </div>
                        <!-- 
                            Check if date and timeStamp exist in $_POST, if it doesn't it means they didn't fill it!!
                        -->
                        <select name="date" class="form-selection" required>
                            <option selected disabled hidden>DATUM</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select name="timeStamp" class="form-selection" required>
                            <option selected disabled hidden>TIJDSTIP</option>
                            <option value="1">1</option>
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
                            </h1>

                            <div class="global-center filmdoek">
                                <div class="global-line global-background-primary form-line"></div>
                                <h1 class="global-primary form-left-fix">
                                    FILMDOEK
                                </h1>
                            </div>

                            <!-- TODO: PUT IN YOUR SEATS CONTAINER HERE -->

                            <!-- STAP 3 -->
                            <h1 class="global-primary form-left-fix form-step">
                                STAP 3: CONTROLEER JE BESTELLING
                            </h1>

                            <div class="form-preview-container form-global-margin">
                                <img src="assets/films/deadpool.jpg" alt="" class="form-preview-img">

                                <div class="form-preview-sub">
                                    <h1 class="global-secondary">DEADPOOL</h1>

                                    <div>
                                        <img src="assets/images/misc/placeholder.png" alt="" class="form-preview-sub-img">
                                        <img src="assets/images/misc/placeholder.png" alt="" class="form-preview-sub-img">
                                        <img src="assets/images/misc/placeholder.png" alt="" class="form-preview-sub-img">
                                    </div>

                                    <div class="form-review-desc">
                                        <p class="form-review-desc-p global-secondary">Bioscoop: INSERT HERE</p>
                                        <p class="form-review-desc-p global-secondary">Wanneer: INSERT HERE</p>
                                        <p class="form-review-desc-p global-secondary">Soelen: Rij 2, stoel 7</p>
                                        <p class="form-review-desc-p global-secondary">Tickets: 1x normaal</p>
                                        <br>
                                        <p class="form-review-desc-p global-secondary">Totaal 1 ticket: &euro;9,00</p>
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

                    <button>
                        
                    </button>
            </form>
        </main>
        <?php include "assets/php/footer.php" ?>
>>>>>>> 5d71fd825198703efe0cac742abad6a787b29ef1
    </div>
</body>

</html>