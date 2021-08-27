<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="ru-RU">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Роман">
    <meta property="og:title" content="">
    <meta property="og:url" content="" >
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:locale" content="ru_RU">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="icon" href="favicon.png" type="image/png" size="32x32">
    <title>Hydroponicum</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container container">
                <?if ($_SERVER["NAME"].$_SERVER["REQUEST_URI"] === "/"):?>
                    <nav class="header__nav">
                        <a class="header__nav_link header__nav_link--active" href="#home">Главная</a>
                        <a class="header__nav_link" href="#about">О системах</a>
                        <a class="header__nav_link" href="#successes">Наши успехи</a>
                        <a class="header__nav_link" href="#plans">Наши планы</a>
                        <a class="header__nav_link" href="#order">Системы под заказ</a>
                        <a class="header__nav_link" href="#team">Наша команда</a>
                        <a class="header__nav_link" href="#contacts">Связаться с нами</a>
                        <a class="header__nav_link" href="#footer">Контакты</a>
                    </nav>
                <?else:?>
                    <nav class="header__nav">
                        <a class="header__nav_link header__nav_link--active" href="/#home">Главная</a>
                        <a class="header__nav_link" href="/#about">О системах</a>
                        <a class="header__nav_link" href="/#successes">Наши успехи</a>
                        <a class="header__nav_link" href="/#plans">Наши планы</a>
                        <a class="header__nav_link" href="/#order">Системы под заказ</a>
                        <a class="header__nav_link" href="/#team">Наша команда</a>
                        <a class="header__nav_link" href="/#contacts">Связаться с нами</a>
                        <a class="header__nav_link" href="/#footer">Контакты</a>
                    </nav>
                <?endif?>
                <div class="header__logo">
                    <img src="assets/img/logo_icon.svg" alt="Hydroponicum">
                    <a href="/">Hydroponicum</a>
                </div>
            </div>
            <div class="mobile-menu">
                <?if ($_SERVER["NAME"].$_SERVER["REQUEST_URI"] === "/"):?>
                    <nav class="mobile-menu__wrapper">
                        <a class="mobile-menu__link" href="#home">Главная</a>
                        <a class="mobile-menu__link" href="#about">О системах</a>
                        <a class="mobile-menu__link" href="#successes">Наши успехи</a>
                        <a class="mobile-menu__link" href="#plans">Наши планы</a>
                        <a class="mobile-menu__link" href="#order">Системы под заказ</a>
                        <a class="mobile-menu__link" href="#team">Наша команда</a>
                        <a class="mobile-menu__link" href="#contacts">Связаться с нами</a>
                        <a class="mobile-menu__link" href="#footer">Контакты</a>
                    </nav>
                <?else:?>
                    <nav class="mobile-menu__wrapper">
                        <a class="mobile-menu__link" href="/#home">Главная</a>
                        <a class="mobile-menu__link" href="/#about">О системах</a>
                        <a class="mobile-menu__link" href="/#successes">Наши успехи</a>
                        <a class="mobile-menu__link" href="/#plans">Наши планы</a>
                        <a class="mobile-menu__link" href="/#order">Системы под заказ</a>
                        <a class="mobile-menu__link" href="#team">Наша команда</a>
                        <a class="mobile-menu__link" href="/#contacts">Связаться с нами</a>
                        <a class="mobile-menu__link" href="/#footer">Контакты</a>
                    </nav>
                <?endif?>
            </div>
        </header>