<?php
/*
Template Name: Тренинги
*/
	get_header();
?>
<main>
    <section class="descriptions">
        <div class="container">
            <h1>Тренинги</h1>
            <p>Можем все знать, все понимать, но не уметь сделать.
                То есть возможности есть у всех, способности у многих, непосредственно умение — мало у кого.
                Тренинги для этого и предназначены, чтобы научиться делать то, что мы знаем или
                научиться делать по-новому то, что мы делали неэффективно. То есть учимся новым навыкам
                поведения.
                Тренинги всегда интересны, всегда неожиданны, всегда приводят к открытию внутреннего потенциала,
                всегда меняют жизнь к лучшему.</p>
            <p>Тренинги рассчитаны на 2 дня, время проведения с 10.00 до 18.00, количество участников 10-15
                человек.</p>
            <p>В программе тренингов телесно ориентированные игры, упражнения, танцы с высвобождением
                заблокированных сил, обсуждением результатов, осознанием перспектив.</p>

        </div>
    </section>
    <section class="gallery-block">
        <div class="container">
            <h2 class="visually-hidden">Галерея</h2>
            <ul class="gallery-block__list gallery">
                <li class="gallery-block__item">
                    <a href="img/gallery-1.jpg">
                        <img src="img/gallery-1.jpg" alt="фото">
                    </a>
                </li>
                <li class="gallery-block__item">
                    <a href="img/gallery-2.jpg">
                        <img src="img/gallery-2.jpg" alt="фото">
                    </a>
                </li>
                <li class="gallery-block__item">
                    <a href="img/gallery-3.jpg">
                        <img src="img/gallery-3.jpg" alt="фото">
                    </a>
                </li>
                <li class="gallery-block__item">
                    <a href="img/gallery-4.jpg">
                        <img src="img/gallery-4.jpg" alt="фото">
                    </a>
                </li>
                <li class="gallery-block__item">
                    <a href="img/gallery-4.jpg">
                        <img src="img/gallery-5.jpg" alt="фото">
                    </a>
                </li>
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