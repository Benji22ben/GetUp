<?php

get_header();
the_post();

?>

<header>
        <div class="wrap_single">
    <div class="single-post-information">
        <legend> Article <code>the_post()</code>:</legend>
        <h2>
            Titre de l'article : <?php the_title(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>        
        </h2>
    </div>
</header>

<div>
    <fieldset>
        <legend>Contenu de l'article : </legend>
        <?php the_content(); ?>
    </fieldset>
</div>

<section>
    Cet article a <?php comments_number( 'aucun commentaire', 'un commentaire', '% commentaires'); ?>
    <span> Posté dans la catégorie : <?php the_category(' - '); ?> </span>
</section>

<fieldset>
    <legend>Commentaires : </legend>
    <?php
        if( comments_open() || get_comments_numbre() ) :
            comments_template();
        endif;
    ?>
</fieldset>
       </div>

<?php get_footer(); ?>
