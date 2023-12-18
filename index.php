<?php
require_once __DIR__ . "/lib/game.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";

?>

 <section>
    <article class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
        </div>
        </div>
    </article>
 </section>

<section class="container">
    <article class="row text-center">
        <?php  foreach($articles as $key => $article) {  
            
            require __DIR__. "/templates/card_game.php";
        
        } ?>

    </article>
</section>
    
<?php

require_once __DIR__ . "/templates/footer.php";

?>
