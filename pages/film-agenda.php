<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Maarssen</title>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/film-agenda.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- FONT LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- ICON LINKS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="container">
        <?php include "assets/php/header.php" ?>
        <main>
            <div id="background-img">
                <div id="movie-roster-container">
                    <div id="movie-roster">
                        <div id="movie-roster-title">
                            <h1>FILM AGENDA</h1>
                        </div>
                        <div id="filter-container">
                            <p style="color: white">icon</p>
                            <div class="filter-checkbox-container">
                                <input class="filter-checkbox" type="checkbox">
                                <p>FILMS</p>
                            </div>
                            <div class="filter-checkbox-container">
                                <input class="filter-checkbox" type="checkbox">
                                <P>DEZE WEEK</P>
                            </div>
                            <div class="filter-checkbox-container">
                                <input class="filter-checkbox" type="checkbox">
                                <p>VANDAAG</p>
                            </div>
                            <div class="filter-checkbox-container">
                                <input class="filter-checkbox" type="checkbox">
                                <select name="" id="filter-selector">
                                    <option value="">CATEGORIE</option>
                                    <option value="">ACTION</option>
                                </select>
                            </div>
                        </div>
                        <?php include "assets/php/film-agenda-loop.php"?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php include "assets/php/footer.php" ?>
        </footer>
    </div>
</body>

</html>