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
                <option value="jurassic-world">Jurassic world: Fallen Kingdom</option>
            </select>
            <a id="bestel-btn" href="bestel-pagina">BESTEL TICKETS</a>
        </div>
    </div>

    <script>
        const bestelBtn = document.getElementById('bestel-btn');

        document.getElementById('movie-selector').addEventListener('change', function() {
            if (this.value === 'jurassic-world') {
                bestelBtn.href = 'bestel-pagina?id=101';
            } else {
                bestelBtn.href = 'bestel-pagina'; 
            }
        });
    </script>
</header>
