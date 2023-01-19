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
                            <li class="swiper-slide">
                                <a href="#">
                                    <img src="img/about-300x200.jpg" alt="фото">
                                    <h3>Танец моей жизни</h3>
                                    <time datetime="2015-11-18">12.12.2020</time>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, id! Lorem ipsum
                                        dolor, sit amet consectetur adipisicing elit. Quia itaque labore alias assumenda
                                        omnis iusto dolores illum delectus esse similique!</p>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <img src="img/1.jpg" alt="">
                                    <h3>Танец моей жизни</h3>
                                    <time datetime="2015-11-18">12.12.2020</time>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, id! Lorem ipsum
                                        dolor, sit amet consectetur adipisicing elit. Quia itaque labore alias assumenda
                                        omnis iusto dolores illum delectus esse similique!</p>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <img src="img/2.jpg" alt="">
                                    <h3>Танец моей жизни</h3>
                                    <time datetime="2015-11-18">12.12.2020</time>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, id! Lorem ipsum
                                        dolor, sit amet consectetur adipisicing elit. Quia itaque labore alias assumenda
                                        omnis iusto dolores illum delectus esse similique!</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="main-articles">
                <div class="container">
                    <h2>Статьи</h2>
                    <div class="main-articles__wrapper">
                        <ul class="main-articles__list">
                            <li class="main-articles__item">
                                <div class="main-articles__img">
                                    <img src="img/1.jpg" alt="">
                                </div>
                                <div class="main-articles__item-text">
                                    <h3>О ДУХЕ…</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium facere
                                        inventore
                                        optio
                                        architecto dolor asperiores maiores fugit incidunt autem, quod mollitia corporis
                                        expedita
                                        reprehenderit vel itaque eaque odit tenetur similique numquam illo? Eius
                                        quisquam,
                                        veritatis
                                        odio a
                                        aperiam alias reiciendis.</p>
                                    <a href="#" class="link">читать далее >></a>
                                </div>
                            </li>
                            <li class="main-articles__item">
                                <div class="main-articles__img">
                                    <img src="img/1.jpg" alt="">
                                </div>
                                <div class="main-articles__item-text">
                                    <h3>О ДУХЕ…</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium facere
                                        inventore
                                        optio
                                        archiLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium
                                        facere
                                        inventore
                                        optio
                                        architecto dolor asperiores maiores fugit incidunt autem, quod mollitia corporis
                                        expedita
                                        reprehenderit vel itaque eaque odit tenetur similique numquam illo? Eius
                                        quisquam,
                                        veritatis
                                        odio a
                                        aperiam alias reiciendistecto dolor asperiores maiores fugit incidunt autem,
                                        quod mollitia corporis
                                        expedita
                                        reprehenderit vel itaque eaque odit tenetur similique numquam illo? Eius
                                        quisquam,
                                        veritatis
                                        odio a
                                        aperiam alias reiciendis.</p>
                                    <a href="#" class="link">читать далее >></a>
                                </div>
                            </li>
                            <li class="main-articles__item">
                                <div class="main-articles__img">
                                    <img src="img/1.jpg" alt="">
                                </div>
                                <div class="main-articles__item-text">
                                    <h3>О ДУХЕ…</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium facere
                                        inventore
                                        optio
                                        architecto dolor asperiores maiores fugit incidunt autem, quod mollitia corporis
                                        expedita
                                        reprehenderit vel itaque eaque odit tenetur similique numquam illo? Eius
                                        quisquam,
                                        veritatis
                                        odio a
                                        aperiam alias reiciendis.</p>
                                    <a href="#" class="link">читать далее >></a>

                                </div>
                            </li>
                            <li class="main-articles__item">
                                <div class="main-articles__img">
                                    <img src="img/1.jpg" alt="">
                                </div>
                                <div class="main-articles__item-text">
                                    <h3>О ДУХЕ…</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium facere
                                        inventore
                                        optio
                                        architecto dolor asperiores maiores fugit incidunt autem, quod mollitia corporis
                                        expedita
                                        reprehenderit vel itaque eaque odit tenetur similique numquam illo? Eius
                                        quisquam,
                                        veritatis
                                        odio a
                                        aperiam alias reiciendis.</p>
                                    <a href="#" class="link">читать далее >></a>
                                </div>
                            </li>
                        </ul>
                        <div id="articles">
                            <input class="search input input--search" type="text" placeholder="Поиск">
                            <h4>Статьи на сайте</h4>
                            <ul class="main-articles-list-search list">
                                <li class="main-articles-item-search">
                                    <a class="link article" href="#">О ДУХЕ…</a>
                                </li>
                                <li class="main-articles-item-search">
                                    <a class="link article" href="#">О ДУШЕ…</a>
                                </li>
                                <li class="main-articles-item-search">
                                    <a class="link article" href="#">О ДУХОВНОМ РАЗВИТИИ…</a>
                                </li>
                                <li class="main-articles-item-search">
                                    <a class="link article" href="#">О СЕКСУАЛЬНОЙ ЭНЕРГИИ…</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<?php get_footer(); ?>