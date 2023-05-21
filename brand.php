<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>WOMANIZING - женская одежда</title>
    <meta name="description" content="WOMAZING">
    <meta name="keywords" content="WOMAZING">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/5a4126eab078697aad27bd7d/1518744077024-KLLRFGYJ658EEO5UHKHZ/ke17ZwdGBToddI8pDm48kPQwxj74pdp07FGp1r-4nUhZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVErrFDnqikmQq2w-3t1rKGTsndQnd0J-4YjVUAk8ajKeW0nsU3dfn6w--du8-EjPUE/favicon.ico?format=100w">


    <meta property="og:title" content="WOMAZING">
    <meta property="og:description" content="WOMAZING">
    <meta property="og:type" content="article">
    <meta property="og:image" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,regular,500" rel="stylesheet" />
    <meta property="og:site_name" content="">


    <?php require_once 'includes/componens/stiyle.php'; ?>
</head>

<body>

    <header class="header header__magezin" id="header">
        <div class="container">
            <div class="header__body">
                <a href="index.php" class="header__logo">
                    <img src="./img/dress.png" class="logo-img" alt="лого">Womazing
                </a>
                <div class="header__burger">
                    <span></span>
                </div>

                <nav class="header__menu ">
                    <ul class="header__list">
                        <li class="menu__item ">
                            <a href="index.php" class="header__link ">Главная</a>
                        </li>
                        <li class="menu__item">
                            <a href="magezin.php" class="header__link ">Магазин</a>
                        </li>
                        <li class=" menu__item">
                            <a href="brand.php" class="header__link active">О бренде</a>
                        </li>
                        <li class="menu__item">
                            <a href="contacts.php" class="header__link">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="main-menu">
                    <a href="#" class="header-btn">
                        <img src="img/telephones.svg" class="header-btn__tel" alt="звонок" />
                    </a>
                    <a href="tel:+74958235412" class="menu__phone">+7(495)823-54-12</a>
                    <a href="#" class="menu__basket">
                        <img src="img/shopping-bags 1.png" alt="корзина">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="page ">
        <div class="container">
            <h2 class="brand-title ">О бренде</h2>
            <div class="brand__blok ">

                <p class="brand__blok-text"><a href="index.php">Главная</a></p>
                &mdash; <p class="brand__blok-text "><a href="#" class="active">О бренде</a></p>
            </div>
            <section class="brand" id="brand">
                <div class="brand-container__content ">
                    <div class="brand__img one">
                        <img src="img/brand.jpg" alt="">
                    </div>
                    <div class="brand__items one">
                        <h3 class="brand__item-title ">Идея и женщина</h3>
                        <p class="brand__item-text">
                            Womazing была основана в 2010-ом и стала одной из самых успешных компаний нашей страны. Как и многие итальянские фирмы, Womazing остаётся семейной компанией, хотя ни один из членов семьи не является модельером.
                        </p>
                        <p class="brand__item-text">
                            Мы действуем по успешной формуле, прибегая к услугам известных модельеров для создания своих коллекций. Этот метод был описан критиком моды Колином Макдауэллом как форма дизайнерского со-творчества, характерная для ряда итальянских prêt-a-porter компаний.
                        </p>
                    </div>
                </div>
                <div class="brand-container__content ">
                    <div class="brand__items two">
                        <h3 class="brand__item-title">Магия в деталях</h3>
                        <p class="brand__item-text">
                            Первый магазин Womazing был открыт в маленьком городке на севере страны в 2010-ом году. Первая коллекция состояла из двух пальто и костюма, которые были копиями парижских моделей.
                        </p>
                        <p class="brand__item-text">
                            Несмотря на то, что по образованию основательница была адвокатом, ее семья всегда была тесно связана с шитьём (прабабушка основательницы шила одежду для женщин, а мать основала профессиональную школу кроя и шитья). Стремление производить одежду для масс несло в себе большие перспективы, особенно в то время, когда высокая мода по-прежнему доминировала, а рынка качественного prêt-a-porter попросту не существовало.
                        </p>
                    </div>
                    <div class="brand__img ">
                        <img src="img/brand1.jpg"  alt="" srcset="">
                    </div>
                </div>
                <div class="brand__btn">
                    <a href="magezin.php" class="brand__secondary">
                        Перейти в магазин </a>
                </div>
            </section>
        </div>

    </main>

    <?php require_once 'includes/componens/footer.php'; ?>
    <!-- footer -->


    <!-- modal-wrapper -->
    <?php require_once 'includes/componens/modal.php'; ?>
    <?php require_once 'includes/componens/skripts.php'; ?>


</body>

</html>