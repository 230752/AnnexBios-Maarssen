<?php
include_once 'database/db_connect.php';

$movie_id = null;

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];

    $sql = "
    SELECT m.movie, m.release_date, m.movie_image, ma.agenda_startdate, ma.tijdstip
    FROM movies m
    JOIN movieagenda ma ON m.id = ma.movie_id
    WHERE m.id = ?
    ";
}

// Fetch movies from the database
$sql_movies = "SELECT id, movie FROM movies";
$movies = [];

if ($result = $conn->query($sql_movies)) {
    while ($row = $result->fetch_assoc()) {
        $movies[] = $row;
    }
    $result->free();
}
?>
<header>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <div id="main-header">
        <div id="header-logo-container">
            <a href="home">
                <img id="header-logo-img" src="assets/images/logos/logo_hoofd.png" alt="web logo">
            </a>
        </div>
        <div id="header-buttons">
            <a class="header-button" href="film-agenda">FILM AGENDA</a>
            <a class="header-button" href="vestigingen">ALLE VESTIGINGEN</a>
            <a class="header-button" href="home#about-box-2">CONTACT</a>
        </div>
    </div>
    <div id="sub-header">
        <div id="sub-header-content">
            <p id="sub-header-title">KOOP JE TICKETS</p>
            <select name="" id="movie-selector">
                <option value="">Kies je film</option>
                <?php foreach ($movies as $hmovie): ?>
                    <option value="bestel-pagina?id=<?php echo htmlspecialchars($hmovie['id'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo htmlspecialchars($hmovie['movie'], ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <a id="bestel-btn" href="bestel-pagina">BESTEL TICKETS</a>
        </div>
    </div>

    <script>
        const bestelBtn = document.getElementById('bestel-btn');

        document.getElementById('movie-selector').addEventListener('change', function() {
            if (this.value) {
                bestelBtn.href = this.value;
            } else {
                bestelBtn.href = 'bestel-pagina';
            }
        });
    </script>
</header>
