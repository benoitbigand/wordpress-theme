<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
     /*the_content();*/
?>

<section class="section-1">

    <p class="section-title">Les rencontres de la Fondation le 03 décembre à Bruxelles</p>
    <p class="section-subtitle">Chaîne alimentaire végétale et durabilité :</p>
    <p class="section-threetitle">Une question d'équilibre !</p>
    <a href="#" class="section-bttn">S'inscrire aux rencontres</a>

</section>
    
<section class="section-2">
    
    <p class="title">La conférence</p>
    <hr>
    <p class="premier">
        Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire <br/> végétale et durabilité : une question d'équilibre !" Elles se tiendront le 03 décembre prochain à Bruxelles <br/> et auront pour objectif de décrypter la tansition nutritionnelle des systèmes alimentaires à travers le monde, <br/> qui appelle à favoriser une alimentation plus végétale.   
    </p>

</section>
    
<section class="section-3">

</section>
    
<section class="section-4">

</section>

<?php
  }
}
?>

</div>

<?php get_footer(); ?>