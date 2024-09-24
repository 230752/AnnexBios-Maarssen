<?php
include_once 'database/db_connect.php'; 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$apiUrl = "https://annexbios-server.onrender.com/api/movies";

function fetchMoviesFromApi($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        echo 'API request error: ' . curl_error($curl);
        return null;
    }
    
    curl_close($curl);
    $data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo 'JSON decode error: ' . json_last_error_msg();
        return null;
    }
    
    return $data; 
}

function updateMovieDatabase($movies, $conn) {
    foreach ($movies as $movie) {

        $movie_id = $movie['id'];
        $title = $movie['title'];
        $description = $movie['description'];
        $release_date = substr($movie['release_date'], 0, 10); 
        $duration = $movie['duration'];
        $rating = $movie['rating'];
        $banner_path = $movie['banner_path'];
        $country = isset($movie['actors'][0]['origin']) ? $movie['actors'][0]['origin'] : ''; 
        $genre = ''; 
        $director = ''; 

        $actors = $movie['actors'];
        $actor_1 = isset($actors[0]) ? $actors[0]['firstname'] . ' ' . $actors[0]['lastname'] : NULL;
        $actor_2 = isset($actors[1]) ? $actors[1]['firstname'] . ' ' . $actors[1]['lastname'] : NULL;
        $actor_3 = isset($actors[2]) ? $actors[2]['firstname'] . ' ' . $actors[2]['lastname'] : NULL;
        $actor_4 = isset($actors[3]) ? $actors[3]['firstname'] . ' ' . $actors[3]['lastname'] : NULL;

        $actor_pic_1 = isset($actors[0]['image_path']) ? $actors[0]['image_path'] : NULL;
        $actor_pic_2 = isset($actors[1]['image_path']) ? $actors[1]['image_path'] : NULL;
        $actor_pic_3 = isset($actors[2]['image_path']) ? $actors[2]['image_path'] : NULL;
        $actor_pic_4 = isset($actors[3]['image_path']) ? $actors[3]['image_path'] : NULL;

        $sql = "INSERT INTO movies (id, movie_image, movie, release_date, description, genre, movie_length, country, imbd_score, director, actors_1, actors_2, actors_3, actors_4, actor_pictures_1, actor_pictures_2, actor_pictures_3, actor_pictures_4)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE
                movie_image = VALUES(movie_image), movie = VALUES(movie), release_date = VALUES(release_date), description = VALUES(description),
                genre = VALUES(genre), movie_length = VALUES(movie_length), country = VALUES(country), imbd_score = VALUES(imbd_score), 
                director = VALUES(director), actors_1 = VALUES(actors_1), actors_2 = VALUES(actors_2), actors_3 = VALUES(actors_3), actors_4 = VALUES(actors_4),
                actor_pictures_1 = VALUES(actor_pictures_1), actor_pictures_2 = VALUES(actor_pictures_2), actor_pictures_3 = VALUES(actor_pictures_3), actor_pictures_4 = VALUES(actor_pictures_4)";

        if ($stmt = $conn->prepare($sql)) {

            $stmt->bind_param('ssssssssssssssssss', 
                $movie_id, $banner_path, $title, $release_date, $description, $genre, $duration, 
                $country, $rating, $director, $actor_1, $actor_2, $actor_3, $actor_4, 
                $actor_pic_1, $actor_pic_2, $actor_pic_3, $actor_pic_4);
            
            $executeResult = $stmt->execute();
            $stmt->close();
        } else {
        }

        $start_date = date('Y-m-d'); 
        $end_date = date('Y-m-d', strtotime('0 day')); 
        $time = '19:00:00';

        $agendaSql = "INSERT INTO movieagenda (movie_id, agenda_startdate, agenda_enddate, tijdstip)
                      VALUES (?, ?, ?, ?)
                      ON DUPLICATE KEY UPDATE
                      agenda_startdate = VALUES(agenda_startdate), agenda_enddate = VALUES(agenda_enddate), tijdstip = VALUES(tijdstip)";
        
        if ($agendaStmt = $conn->prepare($agendaSql)) {
            $agendaStmt->bind_param('isss', $movie_id, $start_date, $end_date, $time);
            $executeAgendaResult = $agendaStmt->execute();
    }
}
}

$movies = fetchMoviesFromApi($apiUrl);
if ($movies) {
    updateMovieDatabase($movies, $conn);
}
?>

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
        <?php include "assets/php/header.php"; ?>
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

                            <div id="abt-box-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1534.5760596423468!2d4.130799702159398!3d51.8360409131163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c451c6f4434d53%3A0x20bb4b6bcdd57904!2sRijksstraatweg%2042%2C%203223%20KA%20Hellevoetsluis!5e1!3m2!1snl!2snl!4v1726737603632!5m2!1snl!2snl"
                                 width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                 </div>
                                <div id="textfr">
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
                    <?php include "assets/php/film-agenda-loop.php"; ?>
                    <a id="more-movies-btn" href="film-agenda">BEKIJK ALLE FILMS</a>
                </div>
            </div>
        </main>
        <?php include "assets/php/footer.php"; ?>
    </div>

</body>
</html>
                    