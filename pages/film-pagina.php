<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Maarssen</title>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/film-pagina.css">
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
        <?php include "assets/php/header.php";
        $movieId = $_GET['id'];

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "https://annexbios-server.onrender.com/api/movies");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        
        $returnedData = json_decode($response, true);
        foreach ($returnedData as $movie) {
            $movie['id'] = $movieId;
        }
        curl_close($curl);
        ?>
        <main>
            <div id="movie-container">
                <div id="movie-title-container">
                    <h1 style="padding-left: 20px"><?= $movie['title'] ?></h1>
                </div>
                <div id="movie-content-container">
                    <img src="<?= $movie['banner_path'] ?>" alt="">
                    <div id="movie-info">
                        <p id="movie-rating">Rating: <?= $movie['rating'] ?> stars</p>
                        <p>symbols</p>
                        <p style="font-size: 1.5rem">Release: <?= date('d-m-Y', strtotime($movie['release_date'])) ?>
                        </p>
                        <p id="movie-desc"><?= $movie['description'] ?></p>
                        <p>Filmlengte: <?= $movie['duration'] ?></p>
                        <p>Acteurs: </p>
                        <div id="movie-actors-container">
                            <?php
                            $limitedActors = array_slice($movie['actors'], 0, 3);
                            foreach ($limitedActors as $actor) { ?>
                                <div class="movie-actor">
                                    <img class="actor-img" src="<?= $actor['image_path'] ?>" alt="niet beschikbaar">
                                    <p><?=$actor['firstname'] . ' ' . $actor['lastname']?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a id="buy-button" href="#">KOOP JE TICKETS</a>
                <img id="movie-trailer" src="assets/images/misc/placeholder.png" alt="idk">
            </div>
        </main>
        <footer>
            <?php include "assets/php/footer.php" ?>
        </footer>
    </div>
</body>

</html>