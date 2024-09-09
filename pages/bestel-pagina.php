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

            <form class="main-form" action="./" method="post">
                    <div class="form-selections">
                        <select name="filmSelection" class="form-selection">
                            <option selected hidden>KIES FILM</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select name="dateSelection" class="form-selection">
                            <option selected hidden>DATUM</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select name="timeStamp" class="form-selection">
                            <option selected hidden>TIJDSTIP</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="form-splitter">
                        <div class="form-split-left">
                            <h1 class="global-primary form-left-fix">
                                STAP 1: KIES JE TICKET
                            </h1>

                            <!-- TODO: Make this you dummy -->
                            <div class="form-tickets-container">
                                <div class="form-tickets-category">

                                </div>
                            </div>

                            <h1 class="global-primary form-left-fix">
                                STAP 2: KIES JE STOEL
                            </h1>

                            <div class="global-center">
                                <div class="global-line form-line"></div>
                                <h1 class="global-primary form-left-fix">
                                    FILMDOEK
                                </h1>
                            </div>

                            <!-- TODO: PUT IN YOUR SEATS CONTAINER HERE -->
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