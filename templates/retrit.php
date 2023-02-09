<?php
/*
Template Name: Ретрит
*/
	get_header();
?>
<main>
    <h1 class="visually-hidden">РЕТРИТ - БОЛЬШЕ, ЧЕМ ПРОСТО ОТДЫХ</h1>
    <section class="video">
        <div class="container">
            <h2>Что такое ретрит?</h2>
            <div class="video__wrapper">
                <div class="video__video-item">
                    <video controls>
                        <source type="video/mp4" src="<?php echo get_template_directory_uri() ?>/assets/video/video-2.mp4">
                    </video>
                </div>
                <div class="video__item">
                    <p class="about__item-text">
                        Слово ретрит — от английского retreat, означает уединенный отдых в тихом месте, где можно спрятаться от повседневности и посвятить время себе. Это путешествие во внутренний мир, которое в гармонии с природой дарит преображение и воодушевление. В последнее время мы нуждаемся в таком отдыхе, как никогда раньше: постоянный стресс отнимает все силы. Что бы быстро восстановиться и вернуть хорошее настроение, мало просто купить тур выходного дня. Нужно знать как правильно отдыхать: успокаивать мысли, расслаблять тело, отпускать стресс и активировать гормоны счастья. Хотите этому научиться? Тогда подарите себе ретрит на выходные, а лучше на всю неделю!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="_tabs">
        <div class="container">
            <h2>Программа тура</h2>
            <nav>
                <button class="_tabs-item _active">День 1</button>
                <button class="_tabs-item">День 2</button>
            </nav>
            <div>
                <div class="_tabs-block _active">
                    <ul>
                        <li>1:30 — Прибытие утренним рейсом, трансфер в отель</li>
                        <li>3:00 — Обед, знакомство, расселение</li>
                    </ul>
                </div>
                <div class="_tabs-block">
                    <ul>
                        <li>8:00 — Утренняя медитация</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                        <li>Утренняя сессия: йога-техники снятия усталости и восстановления сил</li>
                        <li>9:00 — Завершение 4-х дневной программы. Выезд из отеля</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>