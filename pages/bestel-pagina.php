<?php
include_once 'database/db_connect.php';
$movie_id = null;

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];

    $sql = "
    SELECT m.movie, m.release_date, m.movie_image, ma.agenda_startdate, ma.tijdstip, m.actor_pictures_1, m.actor_pictures_2, m.actor_pictures_3, m.actor_pictures_4, m.description
    FROM movies m
    JOIN movieagenda ma ON m.id = ma.movie_id
    WHERE m.id = ?
";
}

$agenda_startdates = [];

if ($movie_id && $stmt = $conn->prepare($sql)) {
    $stmt->bind_param('i', $movie_id);
    $stmt->execute();
    $stmt->bind_result($movie, $release_date, $movie_image, $agenda_startdate, $tijdstip, $actor_pictures_1, $actor_pictures_2, $actor_pictures_3, $actor_pictures_4, $description);

    while ($stmt->fetch()) {
        $agenda_startdates[$agenda_startdate][] = $tijdstip;
    }

    $stmt->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Maarssen</title>
    <!-- SCRIPT LINKS -->
    <script src="assets/js/bestel-pagina/seatsHandler.js" defer></script>
    <script src="assets/js/bestel-pagina/purchaseHandling.js" defer></script>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/bestel-pagina.css">
    <!-- FONT LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="container">
        <?php include "assets/php/header.php" ?>

        <?php
        if (!$movie_id) {
        ?>
            <main style="border:none;">
                <div class="main-header-container">
                    <h1 class="main-header-title">Deze film bestaat niet.</h1>
                </div>
            </main>
        <?php
            exit();
        }
        ?>

        <main>
            <div class="main-header-container">
                <h1 class="main-header-title">TICKETS BESTELLEN</h1>
            </div>


            <form class="form-container" action="bestel-vali" onsubmit="return onSubmit()" method="post">
                <div class="form-selections">
                    <div class="form-selection">
                        <?php echo htmlspecialchars($movie); ?>
                    </div>
                    <!-- 
                        Check if date and timeStamp exist in $_POST, if it doesn't it means they didn't fill it!!
                    -->
                    <select name="date" class="form-selection" id="date-select"  onchange="checkSeatsTooken()" required>
                        <option selected disabled hidden>DATUM</option>
                        <?php
                        foreach (array_keys($agenda_startdates) as $date) {
                            echo '<option value="' . htmlspecialchars($date, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($date, ENT_QUOTES, 'UTF-8') . '</option>';
                        }
                        ?>
                    </select>

                    <select name="timeStamp" class="form-selection" id="time-select" onchange="checkSeatsTooken()" required>
                        <option selected disabled hidden>TIJDSTIP</option>
                        <option value="<?= $agenda_id ?>"><?php echo htmlspecialchars($tijdstip); ?></option>
                    </select>
                </div>

                <div class="form-splitter">
                    <div class="form-split-left">
                        <!-- <?php
                        function prettyDump($string)
                        {
                            echo "<pre>";
                            print_r($string);
                            echo "</pre>";
                        }
                        prettyDump($_POST)
                        ?> -->
                        <!-- STAP 1 -->
                        <h1 class="global-primary form-left-fix form-step">
                            STAP 1: KIES JE STOEL
                        </h1>

                        <div class="global-center filmdoek">
                            <div class="global-line global-background-primary form-line"></div>
                            <h1 class="global-primary form-left-fix">
                                FILMDOEK
                            </h1>
                        </div>
                        <?php include "assets/php/bestel-seats.php" ?>

                        <!-- STAP 2 -->
                        <h1 class="global-primary form-left-fix form-step">
                            STAP 2: KIES JE TICKET
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
                                    TYPE
                                </p>
                            </div>

                            <div class="global-thinner-line global-back ground-secondary"></div>

                            <div id="tickets-container">
                            </div>

                            <div class="global-thinner-line global-background-secondary"></div>

                            <div class="global-center form-tickets-voucher-container">
                                <p class="form-tickets-p global-secondary">
                                    VOUCHERCODE
                                </p>
                                <input type="text" name="voucher" class="form-tickets-voucher-text global-secondary"
                                    id="coupon-text" placeholder="Code">
                                <!-- TODO: Add onclick function when api is done :thumb: -->
                                <input style="cursor:pointer;" type="button" value="TOEVOEGEN" onclick="checkCoupon(this)" class="global-btn form-tickets-voucher-btn">
                            </div>
                        </div>

                        <!-- STAP 3 -->
                        <h1 class="global-primary form-left-fix form-step">
                            STAP 3: CONTROLEER JE BESTELLING
                        </h1>
                        <div class="form-preview-container">
                            <img src="<?php echo htmlspecialchars($movie_image); ?>" alt="" class="form-preview-img">
                            <div class="form-preview-sub">
                                <h1 class="global-secondary"><?php echo htmlspecialchars($movie); ?>
                                </h1>

                                <div>
                                    <img style="width: 50px; height:40px;" src="<?= htmlspecialchars($actor_pictures_1, ENT_QUOTES, 'UTF-8') ?>" alt="Actor" class="form-preview-sub-img">
                                    <img style="width: 50px; height:40px;" src="<?= htmlspecialchars($actor_pictures_2, ENT_QUOTES, 'UTF-8') ?>" alt="Actor" class="form-preview-sub-img">
                                    <img style="width: 50px; height:40px;" src="<?= htmlspecialchars($actor_pictures_3, ENT_QUOTES, 'UTF-8') ?>" alt="Actor" class="form-preview-sub-img">
                                    <img style="width: 50px; height:40px;" src="<?= htmlspecialchars($actor_pictures_4, ENT_QUOTES, 'UTF-8') ?>" alt="Actor" class="form-preview-sub-img">
                                </div>

                                <div>
                                    <p class="global-secondary">Bioscoop: AnnexBios-Maarsen</p>
                                    <p class="global-secondary">Wanneer: <span id="selected-date"><?php echo htmlspecialchars($agenda_startdate); ?></span></p>
                                    <p class="global-secondary">Tijd: <span id="selected-time"></span></p>
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
                                <input type="text" name="firstName"
                                    class="form-tickets-voucher-text global-secondary form-info-text"
                                    placeholder="Voornaam">
                                <input type="text" name="lastName"
                                    class="form-tickets-voucher-text global-secondary form-info-text"
                                    placeholder="Achternaam*" required>
                            </div>
                            <div class="global-center">
                                <input type="text" name="email"
                                    class="form-tickets-voucher-text global-secondary form-info-text"
                                    placeholder="E-mailadres*" required>
                            </div>
                        </div>

                        <!-- STAP 5 -->
                        <h1 class="global-primary form-left-fix form-step">
                            STAP 5: KIES JE BETAALWIJZE
                        </h1>

                        <form id="payment-form">
                            <div class="payment-options-container">
                                <div class="payment-option">
                                    <div class="checkbox-wrapper-62">
                                        <input type="radio" name="payment-method" class="check" id="check1-62" value="bioscoopbon" />
                                        <label for="check1-62" class="label">
                                            <svg width="43" height="43" viewbox="0 0 90 90">
                                                <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                                                <g transform="translate(0,-952.36218)">
                                                    <path d="m 13,983 c 33,6 40,26 55,48 " stroke="black" stroke-width="3" class="path1" fill="none" />
                                                    <path d="M 75,970 C 51,981 34,1014 25,1031 " stroke="black" stroke-width="3" class="path1" fill="none" />
                                                </g>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="payment-logos">
                                        <img src="assets/images/logos/bioscoopbon.png" alt="bioscoopbon" class="form-preview-sub-img">
                                    </div>
                                </div>

                                <div class="payment-option">
                                    <div class="checkbox-wrapper-62">
                                        <input type="radio" name="payment-method" class="check" id="check2-62" value="maestro" />
                                        <label for="check2-62" class="label">
                                            <svg width="43" height="43" viewbox="0 0 90 90">
                                                <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                                                <g transform="translate(0,-952.36218)">
                                                    <path d="m 13,983 c 33,6 40,26 55,48 " stroke="black" stroke-width="3" class="path1" fill="none" />
                                                    <path d="M 75,970 C 51,981 34,1014 25,1031 " stroke="black" stroke-width="3" class="path1" fill="none" />
                                                </g>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="payment-logos">
                                        <img src="assets/images/logos/maestro.png" alt="Maestro" class="form-preview-sub-img">
                                    </div>
                                </div>

                                <div class="payment-option">
                                    <div class="checkbox-wrapper-62">
                                        <input type="radio" name="payment-method" class="check" id="check3-62" value="ideal" />
                                        <label for="check3-62" class="label">
                                            <svg width="43" height="43" viewbox="0 0 90 90">
                                                <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                                                <g transform="translate(0,-952.36218)">
                                                    <path d="m 13,983 c 33,6 40,26 55,48 " stroke="black" stroke-width="3" class="path1" fill="none" />
                                                    <path d="M 75,970 C 51,981 34,1014 25,1031 " stroke="black" stroke-width="3" class="path1" fill="none" />
                                                </g>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="payment-logos">
                                        <img src="assets/images/logos/ideal.png" alt="iDEAL" class="form-preview-sub-img">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="AFREKENEN" style="width:100%;" class="global-btn form-tickets-voucher-btn">
                    </div>

                    <div class="form-split-right">
                        <img style="width:150px; height: 200px; margin-left:20px; margin-top:20px; justify-content: center" src="<?php echo htmlspecialchars($movie_image); ?>" alt="" class="form-preview-img">
                        <p style="font-size: 20px; color: #666;">
                            <?php echo htmlspecialchars(substr($description, 0, 100)); ?>
                            <?php if (strlen($description) > 150) echo '...'; ?>
                        </p>
                    </div>
                    <input type="hidden" name="id" value=<?= $_GET["id"] ?>>
            </form>
        </main>
        <?php include "assets/php/footer.php" ?>
    </div>

    <script>
        const agendaData = <?php echo json_encode($agenda_startdates); ?>;

        document.getElementById('date-select').addEventListener('change', function() {
            const selectedDate = this.value;
            const timeSelect = document.getElementById('time-select');
            const selectedDateSpan = document.getElementById('selected-date');

            selectedDateSpan.textContent = selectedDate;

            timeSelect.innerHTML = '<option selected disabled hidden>TIJDSTIP</option>';

            if (agendaData[selectedDate]) {
                agendaData[selectedDate].forEach(time => {
                    const option = document.createElement('option');
                    option.value = time;
                    option.textContent = time;
                    timeSelect.appendChild(option);
                });
            }
        });

        document.getElementById('time-select').addEventListener('change', function() {
            const selectedTime = this.value;
            const selectedTimeSpan = document.getElementById('selected-time');

            selectedTimeSpan.textContent = selectedTime;
        });
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            const selectedPaymentMethod = document.querySelector('input[name="payment-method"]:checked');

            if (!selectedPaymentMethod) {
                alert('Please select a payment method before proceeding.');
                event.preventDefault();
                return false;
            }
        });
    </script>
</body>

</html>