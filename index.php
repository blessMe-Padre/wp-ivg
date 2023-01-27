<?php
/*
Template Name: Главная страница
*/
	get_header();
?>
        <main>
            <section class="about">
                <div class="container">
                    <h1 class="title"><?= CFS()->get('main_title') ?></h1>
                    <div class="about__wrapper">
                        <div class="about__img">
                            <img src="<?= CFS()->get('main_photo') ?>" alt="фото">
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <section class="training">
                <div class="container">
                    <h2>Тренинги</h2>
                    <p>Тренинги рассчитаны на 2 дня, время проведения с 10.00 до 18.00, количество участников 10-15
                        человек.</p>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="training__wrapper swiper">
                        <ul class="swiper-wrapper">
                        <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1,
                                'category' => 4,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                            ) );

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                            ?>

                            <li class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( '' );  ?>
                                    <h3><?php the_title(); ?></h3>
                                    <p class="training__when">
                                        Ближайший тренинг: <time datetime="<?= CFS()->get('training_when_robots') ?>"><?= CFS()->get('training_when') ?></time>
                                    </p>
                                    <p class="training__description"><?= CFS()->get('training__descriptions') ?></p>
                                </a>
                            </li>
                            <?php
                                }
                            wp_reset_postdata();
                        ?>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="main-articles">
                <div class="container">
                    <h2>Статьи</h2>
                    <div class="main-articles__wrapper">
                        <ul class="main-articles__list">
                        <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                                'category' => 6,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                            ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                        ?>

                        <li class="main-articles__item">
                                <div class="main-articles__img">
                                    <?php the_post_thumbnail( '' );  ?>
                                </div>
                                <div class="main-articles__item-text">
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
                            <div class="input-wrapper">
                                <input class="search input input--search" type="text" placeholder="Поиск">
                                <i class="icon-search"></i>
                            </div>
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
                             <div class="tags">
                                <?php
                                $args = array(
                                    'orderby' => 'name',
                                    'style' => 'none',
                                    'title_li' => '',
                                    'exclude' => '1,4,3',
                                    'hide_empty' => 0,
                                    'depth' => 0,
                                    'echo' => 1,
                                    'separator' => '',
                                );

                                wp_list_categories($args);
                                ?>
                             </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<?php get_footer(); ?>