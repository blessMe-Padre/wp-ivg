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
                <p>Одна статья<p>
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