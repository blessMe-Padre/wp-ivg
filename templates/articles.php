<?php
/*
Template Name: Статьи
*/
	get_header();
?>
<main>
    <section class="articles">
        <div class="container">
            <h1>Статьи</h1>
            <div class="articles__wrapper">
                <ul class="articles__list">
                <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                                'category' => 5,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                            ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                        ?>

                        <li class="articles__item">
                        <div class="articles__img">
                            <?php the_post_thumbnail( '' );  ?>
                        </div>
                        <div class="articles__item-text">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link">читать далее >></a>
                        </div>
                    </li>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                </ul>
                <div id="articles">
                    <input class="search input input--search" type="text" class="search" placeholder="Поиск">
                    <h4>Статьи на сайте</h4>
                    <ul class="main-articles-list-search list">
                    <?php
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                        'category' => 5,
                                        'orderby' => 'title',
                                        'order' => 'ASC',
                                        'post_type'   => 'post',
                                        'suppress_filters' => true,
                                    ) );

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                                ?>
                                <li class="main-articles-item-search">
                                    <a class="link article-single" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php
                                }
                                wp_reset_postdata();
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>