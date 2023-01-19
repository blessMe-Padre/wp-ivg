<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
			if(is_404()) {
				echo 'Ошибка 404';
			} else {
				the_title();
			}
		?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="container">
                    <div class="header__row">
                        <h1 class="header__title">ИРИНА ГОРЛАЧЕВА</h1>
                        <div class="logo">
                            <p class="logo__text">Практический психолог во&nbsp;Владивостоке</p>
                            <div class="logo__img">
                                <a href="<?= home_url(); ?>">
                                    <?php the_custom_logo(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="btn nav-button" aria-label="Меню"></button>
                <!-- <nav class="nav">
                    <ul>
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="services.html">услуги</a>
                            <ul>
                                <li>
                                    <a href="single-services.html">Семинарские занятия</a>
                                </li>
                                <li>
                                    <a href="#">Сеансы Релаксации</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">тренинги</a>
                            <ul>
                                <li>
                                    <a href="single-trainings.html">Тренинг «Деньги»</a>
                                </li>
                                <li>
                                    <a href="#">Сеансы Релаксации</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="articles.html">статьи</a>
                        </li>
                        <li>
                            <a href="about.html">о себе</a>
                        </li>
                        <li>
                            <a href="feedback.html">обратная связь</a>
                        </li>
                        <li>
                            <a href="contacts.html">контакты</a>
                        </li>
                    </ul>
                </nav> -->
                <nav class="nav">
                <?php wp_nav_menu([
					'theme_location' => 'top',
					'container' => '',
					'menu_class' => '',
					'menu_id' => ''
				]);
				?>
                </nav>
            </div>
        </header>
        <!-- конец header -->
