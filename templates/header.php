<?php

$currentPage = basename($_SERVER["SCRIPT_NAME"]);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$mainMenu[$currentPage]["meta_description"]?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/override.css">
    <title><?=$mainMenu[$currentPage]["head_title"]?></title>
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

            <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">

              <?php foreach($mainMenu as $key => $mainItem) { 
                if(!array_key_exists("exclude",$mainItem)) {

                ?>
                <li class="nav-item"><a href="<?=$key;?>" class="nav-link px-2 link-secondary <?php
                  // class active sur la page courante 
                  if($key === $currentPage){ echo "active";}
                  // ou echo ($key === $currentPage) ? "active" : "";   condition ternaire
                
                ?>"><?=$mainItem["menu_title"];?></a></li>

              <?php } 
                }
              ?> 
            </ul>

            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-primary me-2">Connexion</button>
              <button type="button" class="btn btn-primary">Inscription</button>
            </div>
          </section>
        </header>

    
