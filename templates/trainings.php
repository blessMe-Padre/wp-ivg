<?php
/*
Template Name: Тренинги
*/
	get_header();
?>
<main>
    <section class="descriptions">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
    <section class="gallery-block">
        <div class="container">
            <h2 class="visually-hidden">Галерея</h2>
            <ul class="gallery-block__list gallery">
            <?php $loop = CFS()->get('training');
                foreach ($loop as $row ) {
            ?>
                <li class="gallery-block__item">
                    <a href="<?= $row['training_img'] ?>">
                        <img src="<?= $row['training_img'] ?>" alt="<?= $row['	training_description'] ?>">
                    </a>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
    </section>
    <section class="training">
        <div class="container">
            <h3>Список Тренингов</h2>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="training__wrapper swiper">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <a href="#">
                                <img src="img/about-300x200.jpg" alt="фото">
                                <h3>Танец моей жизни</h3>
                                <time>12.12.2020</time>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, id! Lorem
                                    ipsum
                                    dolor, sit amet consectetur adipisicing elit. Quia itaque labore alias
                                    assumenda
                                    omnis iusto dolores illum delectus esse similique!</p>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">
                                <img src="img/1.jpg" alt="">
                                <h3>Танец моей жизни</h3>
                                <time>12.12.2020</time>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, id! Lorem
                                    ipsum
                                    dolor, sit amet consectetur adipisicing elit. Quia itaque labore alias
                                    assumenda
                                    omnis iusto dolores illum delectus esse similique!</p>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#">
                                <img src="img/2.jpg" alt="">
                                <h3>Танец моей жизни</h3>
                                <time>12.12.2020</time>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, id! Lorem
                                    ipsum
                                    dolor, sit amet consectetur adipisicing elit. Quia itaque labore alias
                                    assumenda
                                    omnis iusto dolores illum delectus esse similique!</p>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>