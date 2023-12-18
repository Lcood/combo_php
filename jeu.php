<?php

require_once __DIR__ ."/lib/game.php"; 
$id = $_GET["id"];
$article = $articles[$id];


require_once __DIR__ . "/lib/menu.php"; 

$mainMenu["jeu.php"] = ["head_title" => $article["title"], "meta_description" => $article["description"], "exclude" => true];


require_once __DIR__ . "/templates/header.php"; 

?>
   
<section class="container col-xxl-8 px-4 py-5">
    <article class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="><?=$article["image"];?>" class="d-block mx-lg-auto img-fluid" alt="<?=$article["title"]?>" width="700">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$article["title"] ?></h1>
        <p class="lead"><?=$article["description"];?></p>
      </div>
    </article>
  </section>


<?php

require_once __DIR__ . "/templates/footer.php";

?>