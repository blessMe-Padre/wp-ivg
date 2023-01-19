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
                    <li class="articles__item">
                        <div class="articles__img">
                            <img src="img/1.jpg" alt="">
                        </div>
                        <div class="articles__item-text">
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
                    <li class="articles__item">
                        <div class="articles__img">
                            <img src="img/1.jpg" alt="">
                        </div>
                        <div class="articles__item-text">
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
                    <input class="search input input--search" type="text" class="search" placeholder="Поиск">
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