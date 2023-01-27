<?php
	get_header();
?>
<main>
    <section class="articles">
        <div class="container">
            <p><?php single_cat_title('Вы находитесь в категории: '); ?></p>
                Отдельная страница для вывода списка статей в определенной категории

        </div>
    </section>

</main>
<?php get_footer(); ?>