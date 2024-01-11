<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Menü</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php

        echo '<li class="nav-item"><a href="index.php" class="nav-link';
        if (!isset($_GET['action']))
          echo " active";
        elseif (isset($_GET['action'])) {
          if ($_GET['action'] == "logout")
            echo " active";
        }
        echo '"> ÜLÉSREND </a></li>';
        if (isset($_SESSION['felhasznalonev'])) {
          echo '<li class="nav-item"><a href="index.php?action=datamod" class="nav-link';
          if (isset($_GET['action'])) {
            if ($_GET['action'] == "datamod")
              echo " active";
          }
          echo '"> ADATMÓDOSÍTÁS </a></li>';

          echo '<li class="nav-item"><a href="index.php?action=logout" class="nav-link">KILÉPÉS >> ' . $_SESSION['felhasznalonev'] . '</a></li>';
        } else {
          echo '<li class="nav-item"><a href="index.php?action=login" class="nav-link';
          if (isset($_GET['action'])) {
            if ($_GET['action'] == "login")
              echo " active";
          }
          echo '"> BELÉPÉS </a></li>';
        }
        ?>
        <script>
          function showResult(str) {
            if (str.length == 0) {
              document.getElementById("livesearch").innerHTML = "";
              document.getElementById("livesearch").style.border = "0px";
              return;
            } else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("livesearch").innerHTML = this.responseText;
                  document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                }
              }
              xmlhttp.open("GET", "q=" + str, true);
              xmlhttp.send();
            }
            xmlhttp.open("GET", "livesearch/livesearch.php?q=" + str, true);
            xmlhttp.send();
          }
        </script>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Keresés" aria-label="Search"
          onkeyup="showResult(this.value)">
        <div id="livesearch">
          <p>tesztteszt</p>
        </div>
      </form>
    </div>
  </div>
</nav>
<?php
if (isset($msg))
  echo "<h2>$msg</h2>";
?>