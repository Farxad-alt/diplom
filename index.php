<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8" />
    <title>WOMAZING - женская одежда></title>
    <meta name="description" content="WOMAZING" />
    <meta name="keywords" content="WOMAZING" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/5a4126eab078697aad27bd7d/1518744077024-KLLRFGYJ658EEO5UHKHZ/ke17ZwdGBToddI8pDm48kPQwxj74pdp07FGp1r-4nUhZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVErrFDnqikmQq2w-3t1rKGTsndQnd0J-4YjVUAk8ajKeW0nsU3dfn6w--du8-EjPUE/favicon.ico?format=100w" />

    <meta property="og:title" content="WOMAZING" />
    <meta property="og:description" content="WOMAZING" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />

    <meta property="og:site_name" content="" />

    <meta name="theme-color" content="#4985FF">

    <?php require_once 'includes/componens/stiyle.php'; ?>
</head>

<body>
    <div class="wrapper">
        <?php require_once 'includes/componens/header.php'; ?>
        <main class="page ">
            <section class="page__main-slider main-slider">
                <div class="main-slider container">
                    <div class="main-slider__container">
                        <div class="main-slider__body">
                            <div class="main-slider__content content-main">
                                <h1 class="content-main__title">

                                    Новые поступления в&nbsp;этом сезоне
                                </h1>
                                <p class="content-main__text">
                                    Утонченные сочетания и&nbsp;бархатные оттенки&nbsp;&mdash;
                                    вот&nbsp;то, что вы&nbsp;искали в&nbsp;этом сезоне. Время
                                    исследовать.
                                </p>
                            </div>
                            <div class="main-slider__content content-main">
                                <h1 class="content-main__title">
                                    Что-то новенькое Мы&nbsp;заждались тебя
                                </h1>
                                <p class="content-main__text">
                                    Надоело искать себя в&nbsp;сером городе? Настало время новых
                                    идей, свежих красок и&nbsp;вдохновения с&nbsp;Womazing!
                                </p>
                            </div>
                            <div class="main-slider__content content-main">
                                <h1 class="content-main__title">
                                    Включай новый сезон с&nbsp;WOMAZING
                                </h1>
                                <p class="content-main__text">
                                    Мы&nbsp;обновили ассортимент&nbsp;&mdash; легендарные
                                    коллекции и&nbsp;новинки от&nbsp;отечественных дизайнеров
                                </p>
                            </div>
                        </div>
                        <div class="main-slider__item">
                            <div class="slider__item">
                                <img src="img/drv1.png" alt="Image" />
                            </div>
                            <div class="slider__item">
                                <img src="img/drv.png" alt="Image" />
                            </div>
                            <div class="slider__item">
                                <img src="img/drv2.png" alt="Image" />
                            </div>
                        </div>

                        <picture class="portfolio-first">
                            <img src="img/Фотовторичное.png" alt="фото" />
                        </picture>
                        <picture class="portfolio-second">
                            <img src="img/третьестепенное.png" alt="фото" />
                        </picture>
                    </div>
                    <div class="main-slider__btn">
                        <a href="#collection" class="slider__btn"><img src="img/Vectors.svg" alt="Image" /></a>
                        <a href="magezin.php" class="slider__secondary">
                            Открыть магазин </a>
                    </div>
                    <div class="points"></div>
                </div>
            </section>
            <!-- collection -->
            <!--<?php require_once 'includes/componens/collection.php'; ?>-->
            <section class="collection" id="collection">
                <div class="container">
                    <h2 class="section-title animate-charcter">Новая коллекция</h2>
                    <div class="projects">
                        <div class="project__item animate__animated animate__backInLeft">
                            <div class="project__item-product">
                                <img src="img/unsplash2.png" alt="фото" class="project__img" />
                                <a href="product.php" class="project__overlay">
                                    <img src="img/Vector3.svg" alt="направление" class="project__icon" />
                                </a>
                            </div>
                            <div class="project__item-cost ">
                                <h4 class="project__item-title">Футболка USA</h4>
                                <div class="project__discoun">
                                    <del class="project__item-text">$229</del>
                                    <p class="project__item-text">$129</p>
                                </div>
                            </div>
                        </div>
                        <div class="project__item animate__animated animate__backInUp">
                            <div class="project__item-product">
                                <img src="img/unsplash1.png" alt="фото" class="project__img" />
                                <a href="product.php" class="project__overlay">
                                    <img src="img/Vector3.svg" alt="направление" class="project__icon" />
                                </a>
                            </div>
                            <div class="project__item-cost">
                                <h4 class="project__item-title">Купальник Glow</h4>
                                <p class="project__item-text">$129</p>
                            </div>
                        </div>
                        <div class="project__item animate__animated animate__backInRight">
                            <div class="project__item-product">
                                <img src="img/unsplash3.png" alt="фото" class="project__img" />
                                <a href="product.php" class="project__overlay">
                                    <img src="img/Vector3.svg" alt="направление" class="project__icon" />
                                </a>
                            </div>
                            <div class="project__item-cost">
                                <h4 class="project__item-title">Свитшот Sweet Shot</h4>
                                <p class="project__item-text">$129</p>
                            </div>
                        </div>
                    </div>
                    <div class="project__item">
                        <a href="./magezin.php" class="project__btn"> Открыть магазин </a>
                    </div>
                </div>
            </section>

            <!-- inportant -->
            <section class="inportant" id="inportant">
                <div class="container">
                    <h2 class="section-title animate-charcter">Что для нас важно</h2>
                    <div class="uslugi ">
                        <div class="uslugi__item animate__animated animate__fadeInLeftBig animate__delay-2s">
                            <img src="img/quality1.png" alt="icon" />
                            <h3 class="uslugi__item-title ">Качество</h3>
                            <p class="uslugi__item-text">
                                Наши профессионалы работают на&nbsp;лучшем оборудовании для
                                пошива одежды беспрецедентного качества
                            </p>
                        </div>
                        <div class="uslugi__item animate__animated animate__fadeInLeftBig animate__delay-1s">
                            <img src="img/Frame2.png" alt="icon" />
                            <h3 class="uslugi__item-title">Скорость</h3>
                            <p class="uslugi__item-text">
                                Благодаря отлаженной системе в&nbsp;Womazing мы&nbsp;можем
                                отшивать до&nbsp;20-ти единиц продукции в&nbsp;наших
                                собственных цехах
                            </p>
                        </div>
                        <div class="uslugi__item animate__animated animate__fadeInLeftBig animate__delay-0.5s">
                            <img src="img/Frame16.png" alt="icon" />
                            <h3 class="uslugi__item-title">Ответственность</h3>
                            <p class="uslugi__item-text ">
                                Мы&nbsp;заботимся о&nbsp;людях и&nbsp;планете. Безотходное
                                производство и&nbsp;комфортные условия труда&nbsp;&mdash; все
                                это Womazing
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- slider -->
            <section class="sliders" id="slider">
                <div class="container">
                    <h2 class="section-title animate-charcter">Команда мечты Womazing</h2>
                    <div class="sliders-container">
                        <div class="sliders-container__content">
                            <div class="slider">
                                <div class="slide">
                                    <img src="img/slider1.png" alt="фото" />
                                </div>
                                <div class="slide">
                                    <img src="img/slider2.png" alt="фото" />
                                </div>
                                <div class="slide">
                                    <img src="img/slider3.png" alt="фото" />
                                </div>
                            </div>
                            <div class="slider__items">
                                <h3 class="slider__item-title">Для каждой</h3>
                                <p class="slider__item-text">
                                    Каждая девушка уникальна. Однако, мы&nbsp;схожи
                                    в&nbsp;миллионе мелочей.
                                </p>
                                <p class="slider__item-text">
                                    Womazing ищет эти мелочи и&nbsp;создает прекрасные вещи,
                                    которые выгодно подчеркивают достоинства каждой девушки.
                                </p>
                                <a href="#" class="slider__item-brend">
                                    Подробнее о бренде
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once 'includes/componens/footer.php'; ?>
        <!-- footer -->


        <!-- modal-wrapper -->
        <?php require_once 'includes/componens/modal.php'; ?>
        <?php require_once 'includes/componens/skripts.php'; ?>


</body>

</html>

