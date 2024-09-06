<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<footer>
    <div class="footer-container">
        <div id="logo">
        <img src="assets/images/logos/logo.png">
        <p id="textfooter">
            Lorem ipsum dolor sit amet, consectetur
            
            <span class="line-break"></span>
            adipiscing elit. Aenean commodo ligula eget
            <span class="line-break"></span>
            dolor. Aenean massa. Cum sociis natoque
            <span class="line-break"></span>
            <span id="hide"></span>
            <span id="more">
            penatibus et magnis dis parturient montes,
            <span class="line-break"></span>
            nascetur ridiculus mus. Donec quam felis,
            <span class="line-break"></span>
            ultricies nec, pellentesque eu, pretium quis, sem.
        </p>
        <button onclick="leesMeer()" id="myBtn">LEES MEER</button>
            </div>

            <div id="navigate">
                <h2>NAVIGEER</h2>
                <p>Werken bij</p>
                <p>Veelgestelde vragen</p>
                <p>Vestigingen</p>
                <p>Contact</p>
        </div>

        <div id="volgons">
            <h2>VOLG ONS</h2>
            <div class="social-buttons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>
    </div>
    

    <img src="assets/images/backgrounds/biosladder.png" id="logo2">
</footer>




<script>
function leesMeer() {
  var hide = document.getElementById("hide");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (hide.style.display === "none") {
    hide.style.display = "inline";
    btnText.innerHTML = "LEES MEER"; 
    moreText.style.display = "none";
} else {
    hide.style.display = "none";
    btnText.style.display = "none";
    moreText.style.display = "inline";
}
}
</script>