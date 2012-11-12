<?php get_header(); ?>
            <section id="lista-atividades">
                <div class="container">

                    <?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy')); ?>
                
                    <div class="row">
                        <div class="span12">
                            <div id="episodio">                                
                                <h1><?php echo $term->name; ?></h1>
                                <p class="lead"><?php echo $term->description; ?></p>
                                <div class="well well-small"><strong><?php echo $term->count; ?></strong> atividade(s) no total</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span12">
                            <ul class="thumbnails">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <li class="span6">
                                            <div class="thumbnail">
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_excerpt(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Fazer atividade</a>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

<?php get_footer(); ?>