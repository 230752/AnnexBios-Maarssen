<div id="movie-box-container">
    <?php
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "https://annexbios-server.onrender.com/api/movies");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    $returnedData = json_decode($response, true);

    foreach ($returnedData as $movie) {
        ?>
        <div class="movie-box">
            <img class="movie-box-img" src="<?= $movie['banner_path'] ?>" alt="red">
            <div class="movie-box-info">
                <p class="movie-title"><?= $movie['title'] ?></p>
                <p class="movie-rating"><?= $movie['rating'] ?></p>
                <p class="movie-release">Release:
                    <?= date('d-m-Y', strtotime($movie['release_date'])) ?>
                </p>
                <p class="movie-desc"><?= $movie['description'] ?></p>
                <a class="movie-box-btn" href="film-pagina?id=<?= $movie['id'] ?>">MEER INFO & TICKETS</a>
            </div>
        </div>
    <?php }
    curl_close($curl); ?>
</div>