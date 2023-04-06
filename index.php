<?php get_header(); ?>
    <h1>Primeira pagina tema wp Seja bem vindo</h1>
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_title();
                the_content();
                the_excerpt();
            }
        }
    ?>
    <a href="<?php the_permalink(); ?>">Saiba Mais...</a>
<?php get_footer(); ?>