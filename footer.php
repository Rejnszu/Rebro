<footer>
    <div class="container footerContent">

        <div class="row">
            <div class="col-sm-12 col-md-6 text-center mb-4">
                <label class="mb-4" for="email">Zostaw swój adres email, a my się z tobą skontaktujemy.</label>
                <div class="d-flex justify-content-center">
                    <?php if (!isset($_POST['dropEmailForm'])) { ?>
                        <form action="" method="post" id="dropEmailForm">
                            <input name="contact-mail" type="email" class="footer-form" id="email" placeholder="Podaj Email">
                            <input class="submit-button" type="submit" value="Wyślij" onclick="sendDropEmailForm(event)">
                            <input type="hidden" name="dropEmailForm" value="true" />
                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        </form>
                    <?php } else { ?>
                        <span class="alert alert-success">Dziękujemy za wiadomość. Skontaktujemy się na podany adres</span>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 text-center">
                <p class="mb-3">Chcesz z nami porozmawiać bezpośrednio na temat twojej strony?</p>
                <ul class="phone_wrap d-flex flex-column justify-content-center align-items-center">
                    <li class="mb-1"><a href="tel:0048601767809"><i class="fas fa-phone"></i> +48 601 767 809</a></li>
                    <li><a href="tel:0048609660472"><i class="fas fa-phone"></i> +48 609 660 472</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="footer-basic">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/">O nas</a></li>
                        <li class="list-inline-item"><a href="<?php echo get_home_url() ?>/strony_internetowe">Strony internetowe</a></li>
                        <li class="list-inline-item"><a href="<?php echo get_home_url() ?>/sklepy_internetowe">Sklepy internetowe</a></li>
                        <li class="list-inline-item"><a href="<?php echo get_home_url() ?>/portfolio">Portfolio</a></li>
                        <li class="list-inline-item"><a href="<?php echo get_home_url() ?>/kontakt">Kontakt</a></li>

                    </ul>
                    <p class="copyright">ReBro 2021</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    function sendDropEmailForm(e) {
        e.preventDefault();

        var contactForm2 = document.getElementById('dropEmailForm');
        contactForm2.submit()


    };
</script>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response']) && isset($_POST['dropEmailForm']) && isset($_POST['contact-mail'])) {

    // // Build POST request:
    // $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    // $recaptcha_secret = '6Ld5v00bAAAAAMjuxEeuSbWnvSyWAldohiGqmL7R';
    // $recaptcha_response = $_POST['recaptcha_response'];

    // // Make and decode POST request:
    // $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    // $recaptcha = json_decode($recaptcha);

    $to = "piotr.brokowski@gmail.com";



    $from = "kontakt@rebro.pl";


    $subject = "[Rebro] Proszę o kontakt " . $_POST['contact-mail'];
    $message = "Proszę o kontakt " . $_POST['contact-mail'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
    $headers .= "From:Rebro <kontakt@rebro.pl>" . "\r\n" .
        "Bcc:kontakt@rebro.pl, lukaszrejnsz@gmail.com" . "\r\n";


    // Take action based on the score returned:
    // if ($recaptcha->score >= 0.5) {

    $isSend = mail($to, $subject, $message, $headers);
    //}
}

wp_footer();
?>

</body>

</html>