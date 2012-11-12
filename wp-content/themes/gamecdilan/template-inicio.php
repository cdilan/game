<?php
/**
 * Template Name: Página inicial
 */
get_header(); ?>
            
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <section id="home">
                        <div class="container">
                            <div class="row">
                                <div class="span6">
                                    <div class="lead">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="well">
                                        <p><strong>Novidades no GAME!</strong> Confira as novas atividades e as últimas corridas disponíveis para jogadores e suas lanhouses...</p>
                                        <a href="#" class="btn btn-small disabled">+ saiba mais</a>
                                    </div>
                                </div>
                                <div class="span6">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/home.png" class="pull-right" />
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="home-links">
                        <div class="container">
                            <div class="row">
                                <div class="span4">
                                    <div class="well">
                                        <h2>Reinvente sua lanhouse</h2>
                                        <p class="lead">Navegue nos episódios e descubra novas estórias com mais atividades e ganhe pontos reinventando sua lanhouse</p>
                                        <a href="<?php bloginfo('url'); ?>/episodios/" class="btn btn-primary">Navegar nos episódios</a>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="well">
                                        <h2>Colabore com outros jogadores</h2>
                                        <p class="lead">Conheça outros jogadores e avalie suas atividades votando e enviando sua opnião</p>
                                        <a href="#" class="btn disabled">Conhecer outros jogadores</a>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="well">
                                        <h2>Participe das corridas</h2>
                                        <p class="lead">Ganhe prêmios! Saiba como funcionam as corridas, conheça as regras e veja o que fazer para começar a participar</p>
                                        <a href="#" class="btn disabled">Ler a regulamentação</a>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </section>
                
                <?php endwhile; ?>
            <?php endif; ?>

<?php get_footer(); ?>