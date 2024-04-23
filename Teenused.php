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
                    <a class="nav-link" aria-current="page" href="Index.html">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index.html">Tooted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Teenused.php">Teenused</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kontakt.php">Kontakt</a>
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
<br>
<br>

<div class="container">

    <h1 class="display-1">Fotode printimine</h1>
    <br>

    <form action="Teenused.php" method="GET">

        <div class="form-floating">
            <select class="form-select" id="type" name="type">
            <option selected>-Vali paber-</option>
                <option value="1">Läikiv paber</option>
                <option value="1">Poolläikiv paber</option>
                <option value="1">Matt paber</option> 
            </select>
        </div>

        <br>

        <div class="form-floating">
            <select class="form-select" id="size" name="size">
                
            <option selected>-Vali paberi suurus-</option>
                <option value="3.20">10x15.........................................3.20€/tk</option>
                <option value="4.10">20x25.........................................4.10€/tk</option>
                <option value="5.00">30x35.........................................5.00€/tk</option>     
            </select>
          
        </div>
    
        <br>

        <div class="mb-3">
            <label for="amount" class="form-label">Vali toote kogus</label>
            <input type="number" class="form-control" id="amount" name="amount" required min="1">
        </div>           
       
         <button type="submit" class="btn btn-primary" name="calculate">Arvuta</button>
         
    
    </form>
        <br>


    <?php
   if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['calculate'])) {
        
        $size = $_GET["size"];
        $amount = $_GET["amount"];
        $type = $_GET["type"];

    if (empty($type) || $type == "-Vali paber-" || empty($size) || $size == "-Vali paberi suurus-" || empty($amount) || $amount == "!") {
            echo'<div class="alert alert-danger d-flex align-items-center" role="alert">';
            echo 'Täida kõik väljad!';
            echo '</div>';
        
    } else {
           
            $total_price = $type * $size * $amount;
       
            echo '<div class="alert alert-success" role="alert">';
            echo 'Hind kokku: ' . $total_price . '€';
            echo '</div>';
    }          
   }
?>
 


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>