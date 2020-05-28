<!-- php -S 127.0.0.1:5500 -->
<!-- start http://127.0.0.1:5500 -->
<?php
include_once('inc/head.inc.php');
include_once('inc/header.inc.php');
   include 'inc/variables.php';
   ?>
   <main>
     
      <div class="container">
      <?php // require('inc/head.inc.php'); ?>
         <div id="content">
   
            <section id="first_screen">
          
               <div class="left">
             <div class="title">
             <h1>  <i class="fab fa-accessible-icon"></i> Un site qui vous présentera cartman et ses amis ! </h1>
             </div>
                  <h2> <?= $cartman; ?> </h2>
                  <p> <?= $cartman_content ?></p>
                  <a href="#random_extract" class="button">voir l'extrait random</a>
               </div>
               <div class="right">
                  <img src="ressources/medias/images/cartman/cartman02.jpg" alt="cartman" id="sad_cartman">
               </div>
            </section>
            <section class="slideshow">
               <h2>La bande du Coon </h2>
               <div class="slick">
                  <div>
                     <img class="character" src="ressources/medias/images/others/Stan.png" alt="">
                     <h3><?= $stan; ?> </h3>
                     <p class="infos">
                        <?= $stan_content; ?>
                     </p>
                  </div>
                  <div>
                     <img class="character" src="ressources/medias/images/others/Kyle.png" alt="">
                     <h3><?= $kyle; ?> </h3>
                     <p class="infos">
                        <?= $kyle_content ?>
                     </p>
                  </div>
                  <div>
                     <img class="character" src="ressources/medias/images/others/Kenny.png" alt="">
                     <h3><?= $kenny; ?> </h3>
                     <p class="infos">
                        <?= $kenny_content; ?>
                     </p>
                  </div>
                  <div>
                     <img class="character" src="ressources/medias/images/others/Butters.png" alt="">
                     <h3><?= $butters; ?> </h3>
                     <p class="infos">
                        <?= $butters_content; ?>
                     </p>
                  </div>
                  <div>
                     <img class="character" src="ressources/medias/images/cartman/Cartman.png" id="Cartman" alt="<?php $cartman; ?>">
                     <h3><?= $cartman; ?> </h3>
                     <p class="infos">
                        <?= $cartman_content; ?>
                     </p>
                  </div>
               </div>
            </section>
            <section id="random_extract">
               <h2>L'EXTRAIT RANDOM </h2>
               <div id="random_extract_container">
                  
                  <div class="left">
                     <div id="video-container">
                        <!-- Video -->

                        <?php $myrdmextract= RandomExtract();
                        
                        ?>
                    
                        <iframe width="560" height="315" src="<?=$myrdmextract['url']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    
                     </div>
                  </div>
                  <div class="right">
                     <h3><?=$myrdmextract['titre']?></h3>
                     <p> <?=$myrdmextract['description']?>  </p>
                     <button type="button" onclick="reload_extract()" class="button">voir un autre extrait</button>
                  </div>
               </div>
            </section>
            <section id="fun_facts">
               <h2>Fun fact</h2>
               <div class="fact">
                  <div class="the_fact" id="fact_1">
               
                
                  </div>
               
               </div>
            </section>
         </div>
      </div>
      <?php require('inc/footer.inc.php'); ?>
</div>