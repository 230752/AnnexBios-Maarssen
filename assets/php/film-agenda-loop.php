<div id="movie-box-container">
    <?php
    $fetchApiData = include("assets/modules/funcs/fetchApiData.php");
    $response = $fetchApiData("movies");

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
                <a class="movie-box-btn" href="bestel-pagina?id=<?= $movie['id'] ?>">MEER INFO & TICKETS</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>