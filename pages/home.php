<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Maarssen</title>
    <!-- SCRIPTS -->
    <script src="assets/js/api.js"></script>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/index.css">
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
        <!-- <?php include "assets/php/api-test.php" ?> -->
        <main>
            <!-- Background image -->
            <div id="intro">
                <div id="about-box">
                    <h1>WELKOM BIJ ANNEXBIOS</h1>
                    <p id="welcome-txt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste a ducimus
                        distinctio atque alias possimus beatae quod fugiat tempora odit, tempore nesciunt perferendis
                        dignissimos voluptatibus saepe, illum inventore. Recusandae, veritatis.</p>
                    <a id="about-btn" href="film-agenda">BEKIJK DE DRAAIENDE FILMS</a>
                </div>
                <div id="about-box-2">
                    <div id="abt-box2-1">
                        <div id="abt-box2-text">
                            <div id="abt-box2-loc">
                                <i class="material-icons" style="font-size:36px">place</i>
                                <p>Rijksstraatweg 42 <br> 3223 KA Hellevoetsluis</p>
                            </div>
                            <div id="abt-box2-num">
                                <i class="fa fa-phone" style="font-size:32px"></i>
                                <p>020-12345678</p>
                            </div>
                            <p style="font-size: 1.2rem">Bereikbaarheid</p>
                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error recusandae aliquam
                                rem vel ullam quidem ducimus accusamus. Vero facere, id dolores alias aut eaque ipsam
                                provident quas quod obcaecati.</P>
                        </div>
                    </div>
                    <div id="abt-box2-2">
                        <img id="cinema-img" src="assets/images/backgrounds/ugly-cinema.png" alt="bruh">
                    </div>
                </div>
            </div>
            <div id="movie-roster-container">
                <div id="movie-roster">
                    <div id="movie-roster-title">
                        <h1>FILM AGENDA</h1>
                    </div>
                    <div id="filter-container">
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
                    <a id="more-movies-btn" href="">BEKIJK ALLE FILMS</a>
                </div>
            </div>
        </main>
        <?php include "assets/php/footer.php" ?>
    </div>
</body>

</html>