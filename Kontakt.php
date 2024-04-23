<!DOCTYPE html>
<html lang="et">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minu Bootstrap Veebileht</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-lg">
                <a class="navbar-brand" href="#">
                    <img src="logo.jpg" alt="Logo" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Index.html">Avaleht</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Index.html">Tooted</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Teenused.php">Teenused</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Otsi..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Otsi</button>
                    </form>
                </div>
            </div>
        </nav>
    <br>
    <div class="container">
        <h1 class="display-1">Töötajate oskused</h1>
        <br>
        <br>
            <?php
                $oskused = array('HTML','CSS','PHP','Bootstrap');
                foreach ($oskused as $oskus) {
                    $värvid  = array("primary", "secondary", "success", "danger", "warning", "info", "dark");
                    $värv = $värvid[array_rand($värvid)];
                    $väärtus = rand(10, 100);
                    echo '<div class="mb-4">';
                    echo '<div class="progress" role="progressbar" aria-label="' . $oskus . '" aria-valuenow="' . $väärtus . '" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">';
                    echo '<div class="progress-bar bg-'.$värv.' text-dark" style="width: ' . $väärtus . '%;">' . $oskus . ': ' . $väärtus . '%</div>';
                    echo '</div>';
                    echo '</div>';
                }
            
            ?>
    <div class="container-fluid">
        <div class="row">

            <?php 
                    $kataloog = 'tootajad/'; 
                    $fotod = glob($kataloog . '*.jpg');
                    echo "<div class='container'>";
                    echo "<div class='row'>";
                    foreach ($fotod as $foto) {
                        $nimi = ucfirst(pathinfo($foto, PATHINFO_FILENAME));
                        $email = pathinfo($foto, PATHINFO_FILENAME) . '@tursk.com';
                        echo "<div class='col-md-2 mb-2'>";
                        echo "<div class='card border-0'>";
                        echo "<img src='$foto' class='card-img-top img-fluid' alt='Profiilifoto'>";
                        echo "<div class='card-body'>";
                        echo "<p class='card-title'>$nimi</p>"; 
                        echo "<p class='card-text'><a href='mailto:$email'>$email</a></p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }   
                    echo "</div>";
                    echo "</div>";
            ?>
    
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>