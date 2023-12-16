<?php

 $mainMenu =[
    ["page" => "index.php", "title" => "ACCUEIL"],
    ["page" => "preter.php", "title" => "PRÊTER"],
    ["page" => "donner.php", "title" => "DONNER"],
    ["page" => "emprunter.php", "title" => "EMPRUNTER"],
    ["page" => "vendre.php", "title" => "VENDRE"],
    
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/override.css">
    <title>Combo</title>
</head>
 <body class="d-flex flex-column justify-content-between min-vh-100 ">
    <main>
        <header class="container">
          <section class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
            <div class="col-md-3 mb-2 mb-md-0">
              <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="./assets/images/logo_combo.png" alt="logo" width="100" >
              </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

              <?php foreach($mainMenu as $key => $mainItem) { ?>

                <li><a href="<?=$mainItem["page"];?>" class="nav-link px-2 link-secondary"><?=$mainItem["title"];?></a></li>

              <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-primary me-2">Connexion</button>
              <button type="button" class="btn btn-primary">Inscription</button>
            </div>
          </section>
        </header>

    
