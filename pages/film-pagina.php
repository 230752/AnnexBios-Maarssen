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
        
        $movieId = isset($_GET['id']) ? $_GET['id'] : null;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://annexbios-server.onrender.com/api/movies");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        $movies = json_decode($response, true);
        
        $selectedMovie = null;
        foreach ($movies as $movie) {
            if ($movie['id'] == $movieId) {
                $selectedMovie = $movie;
                break;
            }
        }

        if (!$selectedMovie) {
            echo "<main><h1>Film niet gevonden.</h1></main>";
            exit();
        }
        ?>
        <main>
            <div id="movie-container">
                <div id="movie-title-container">
                    <h1 style="padding-left: 20px"><?= htmlspecialchars($selectedMovie['title'], ENT_QUOTES, 'UTF-8') ?></h1>
                </div>
                <div id="movie-content-container">
                    <img style="width:400px; height: 480px;" src="<?= htmlspecialchars($selectedMovie['banner_path'], ENT_QUOTES, 'UTF-8') ?>" alt="Movie Banner">
                    <div id="movie-info">
                        <p id="movie-rating">Rating: <?= htmlspecialchars($selectedMovie['rating'], ENT_QUOTES, 'UTF-8') ?> stars</p>
                        <p>Release: <?= date('d-m-Y', strtotime($selectedMovie['release_date'])) ?></p>
                        <p id="movie-desc"><?= htmlspecialchars($selectedMovie['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p>Filmlengte: <?= htmlspecialchars($selectedMovie['duration'], ENT_QUOTES, 'UTF-8') ?> minuten</p>
                        <p>Acteurs:</p>
                        <div id="movie-actors-container">
                            <?php
                            $limitedActors = array_slice($selectedMovie['actors'], 0, 3);
                            foreach ($limitedActors as $actor) { ?>
                                <div class="movie-actor">
                                    <img class="actor-img" src="<?= htmlspecialchars($actor['image_path'], ENT_QUOTES, 'UTF-8') ?>" alt="Actor Image">
                                    <p><?= htmlspecialchars($actor['firstname'] . ' ' . $actor['lastname'], ENT_QUOTES, 'UTF-8') ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a id="buy-button" href="bestel-pagina?id=<?= htmlspecialchars($selectedMovie['id'], ENT_QUOTES, 'UTF-8') ?>">KOOP JE TICKETS</a>
                <img id="movie-trailer" src="assets/images/misc/placeholder.png" alt="Movie Trailer Placeholder">
            </div>
        </main>
        <footer>
            <?php include "assets/php/footer.php" ?>
        </footer>
    </div>
</body>

</html>
