<?require('data.php')?>
</div>
    <footer id="footer" class="footer">
        <div class="footer__container container">
            <div class="title footer__title">
                <h2>Наши контакты</h2>
                <img src="assets/img/logo_icon.svg">
            </div>
            <div class="content footer__content">
                <p class="wow animate__animated animate__fadeInRight ">Адрес: <a href="<?=$arContacts['ADDRESS_URL']?>"><?=$arContacts['ADDRESS']?></a></p>
                <p class="wow animate__animated animate__fadeInRight ">Телефон: <a href="tel:<?=str_replace(" ", "",$arContacts["PHONE"]);?>"><?=$arContacts['PHONE']?></a></p>
                <p class="wow animate__animated animate__fadeInRight ">Почта: <a href="mailto:<?=$arContacts['EMAIL']?>"><?=$arContacts['EMAIL']?></a></p>
            </div>
            <div class="wow animate__animated animate__fadeInLeft banner footer__banner">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9bc91b1ba5e985dae92f4d2be7fc4be7d7a27023a2105b01ab72595f4afea479&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <a href="/privacy-policy.php" class="policy">Политика конфиденциальности.</a>
            <span class="copyright">2021 - <?echo date('Y')?> Hydroponicum Все права защищены.</span>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/app.min.js"></script>
</body>
</html>