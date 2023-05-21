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
                            <a href="brand.php" class="header__link ">О бренде</a>
                        </li>
                        <li class="menu__item">
                            <a href="contacts.php" class="header__link active">Контакты</a>
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
        <section class="contact">
            <div class="container">
                <div class="container contact">
                    <h2 class="contact-title ">Контакты</h2>
                    <div class="contact__blok ">

                        <p class="contact__blok-text"><a href="index.php">Главная</a></p>
                        &mdash; <p class="contact__blok-text "><a href="#" class="active">Контакты</a></p>
                    </div>
                </div>
                <div class="map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.1304431283565!2d37.65457021604691!3d55.77360629785463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a7eb326dc3f%3A0xc2c39e64f9561fc9!2z0JrQsNC30LDQvdGB0LrQuNC5INCy0L7QutC30LDQuw!5e0!3m2!1sru!2sru!4v1658752467256!5m2!1sru!2sru" width="100%" height="476" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-contacts">
                    <div class="contact-contacts__wrapper-tell">
                        <h4 class="contact-contacts__title">Телефон</h4>
                        <a href="tel:+74958235412" class="contact-contacts__number">+7 (495) 823-54-12</a>
                    </div>
                    <div class="contact-contacts__wrapper-email">
                        <h4 class="contact-contacts__title">E-mail</h4>
                        <a href="mailto:hello@womazing.com" class="contact-contacts__email">hello@womazing.com</a>
                    </div>
                    <div class="contact-contacts__wrapper-address">
                        <h4 class="contact-contacts__title">Адрес</h4>
                        <p class="contact-contacts__address">Комсомольская пл., 2, г.Москва,</p>
                    </div>
                </div>
                <div class="contact-contacts__forms">
                    <h4 class="contact-contacts__title">Напишите нам</h4>
                    <form action="/" method="POST" class="form">
                        <!-- <?php include 'functions.php'; ?> -->

                        <div class="form__field">
                            <label for="name"></label>
                            <input type="text" <?= $errors["name"] ?? "main" ?> name="name" placeholder="Имя">
                        </div>
                        <div class="form__field">
                            <label for="email"></label>
                            <input type="email" <?= $errors["email"] ?? "main" ?> name="email" placeholder="E-mail">
                        </div>
                        <div class="form__field">
                            <label for="phone"></label>
                            <input type="phone" <?= $errors["email"] ?? "main" ?> name="phone" placeholder="Телефон">
                        </div>
                        <div class="form__message">
                            <p class="form__text" >Сообщение:</p>
                            <textarea name="message" id="formMessage"></textarea>
                        </div>
                        <button type="submit" name="submit" class="form__btn btn">
                            Отправить
                        </button>
                        <!-- <div class="form__item">
                            <div class="checkbox">
                                <input id="formAgreement" checked type="checkbox" class="checkbox__imput _red">
                                <label for="formAgreement" class="checkbox__label">Даю согласие на обработку данных.</label>
                            </div>
                        </div> -->
                    </form>
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