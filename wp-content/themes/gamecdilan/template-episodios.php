<?php
/**
 * Template Name: Lista de episódios
 */
get_header(); ?>
    
            <section id="lista-episodios">
                <div class="container">
                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <ul class="thumbnails" id="episodios">

                    <?php 

                        $terms = get_terms('episodio', 'orderby=count&hide_empty=0');
                        $count = count($terms);
                        
                        if ($count > 0) {                
                            foreach ($terms as $term) {        
                    ?>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="<?php bloginfo('url'); ?> /?episodio=<?php echo $term->slug; ?>">
                                    <img src="http://placehold.it/300x200" alt="">
                                </a>
                                <h2><?php echo $term->name; ?></h2>
                                <p><?php echo substr($term->description, 0, 280); ?>...</p>
                                <a href="<?php bloginfo('url'); ?>/?episodio=<?php echo $term->slug; ?>" class="btn btn-primary">Ver episódio <i class="icon-chevron-right icon-white"></i></a>
                            </div>
                        </li>
                    <?php                    
                            }  
                        }
                    ?>
                    </ul>
                </div>
            </div>

<?php get_footer(); ?>