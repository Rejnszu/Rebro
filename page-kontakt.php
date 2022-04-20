<?php




$args = [
    "metaDescription" => "Chcesz nawiązać z nami współprace? Nie czekaj, skontaktuj się z nami już teraz!",
    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "ReBro - Kontakt"
];

get_header(null, $args);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response']) && isset($_POST['contactForm'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Ld5v00bAAAAAMjuxEeuSbWnvSyWAldohiGqmL7R';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    $from = "kontakt@rebro.pl";


    $subject = "[Rebro] Formularz kontaktowy ";
    $message = "Dziękujemy za wiadomość. Niedługo ktoś z Państwem się skontaktuje. <br><br>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
    $headers .= "From:Rebro <kontakt@rebro.pl>" . "\r\n" .
        "Bcc:kontakt@rebro.pl, piotr.brokowski@gmail.com, lukaszrejnsz@gmail.com" . "\r\n";
    $headers .= 'Reply-To: ' . $from;


    $nameErr = $emailErr = $phoneErr = $msgErr = "";
    $contact_name = $contact_email = $contact_phone = $contact_msg = "";
    $errCount = 0;
    if (empty($_POST["contact-name"])) {
        $nameErr = "Imię jest wymagane";
        $errCount = 1;
    } else {
        $contact_name = $_POST["contact-name"];
    }

    if (empty($_POST["contact-email"])) {
        $emailErr = "Email jest wymagany";
        $errCount = 1;
    } else {
        $contact_email = $_POST["contact-email"];
    }

    if (empty($_POST["contact-phone"])) {
        $phoneErr = "Telefon jest wymagany";
        $errCount = 1;
    } else {
        $contact_phone = $_POST["contact-phone"];
    }

    if (empty($_POST["contact-msg"])) {
        $msgErr = "Wiadomość jest wymagana";
        $errCount = 1;
    } else {
        $contact_msg = $_POST["contact-msg"];
    }

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5 && $errCount == 0) {
        $message .= $contact_msg . "<br><br>";
        $message .= $contact_name . "\r\n";
        $message .= $contact_email . "\r\n";
        $message .= $contact_phone . "\r\n";

        $subject .= $contact_name;

        mail($contact_email, $subject, $message, $headers);

        $msgSend = "Wiadomość wysłana. Sprawdź skrzynkę odbiorczą oraz folder spam.";

        $nameErr = $emailErr = $phoneErr = $msgErr = "";
        $contact_name = $contact_email = $contact_phone = $contact_msg = "";
    } else {
    }
}
?>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld5v00bAAAAANptlBJ9Bnr7tEOWnoJcScXorjnn"></script>
<script>
    function sendContactForm(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6Ld5v00bAAAAANptlBJ9Bnr7tEOWnoJcScXorjnn', {
                action: 'contact'
            }).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
                var contactForm = document.getElementById('contactForm');
                contactForm.submit()
            });
        })
    };
</script>

<div class="main">
    <div class="container-fluid back_contact_img text-center">
        <!-- <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/contact-us-1.png"  '; ?>" alt="kontakt"> -->

    </div>
    <div class="container container-contact margin-section-bottom mt-5">
        <div class="row">
            <div class="col-sm-12 text-center contact_wrap">

                <h1>Kontakt</h1>
                <p>Jeśli jesteście Państwo zainteresowani naszą ofertą prosimy o kontakt poprzez jedną z poniższych opcji:</p>


            </div>
        </div>
    </div>
    <div class="container-fluid margin-section-bottom">
        <div class="row ">
            <div class="col-12 col-lg-6 form-container mb-5">
                <div class="h2_contact_wrapper text-center">
                    <h2 class="text-center mb-4 contact_h2_1"> FORMULARZ KONTAKTOWY</h2>
                </div>
                <form action="" method="post" id="contactForm">
                    <div class="form-group">
                        <?php
                        if (isset($msgSend)) {
                        ?>
                            <p class="alert alert-success"> <?php echo $msgSend; ?></p>
                        <?php
                        }

                        ?>
                        <label for="imie">Imię <span class="color_red">*</span></label>
                        <input name="contact-name" type="text" class="form-control" id="nazwa" placeholder="Imię" value="<?php echo $contact_name ?>" require>
                        <span class="alert-danger"> <?php echo $nameErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="emailAddr">E-mail <span class="color_red">*</span></label>
                        <input name="contact-email" type="email" class="form-control" id="emailAddr" placeholder="E-mail" value="<?php echo $contact_email ?>" require>
                        <span class="alert-danger"> <?php echo $emailErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telefon <span class="color_red">*</span></label>
                        <input name="contact-phone" type="text" class="form-control" id="telefon" placeholder="Telefon" value="<?php echo $contact_phone ?>" require>
                        <span class="alert-danger"> <?php echo $phoneErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="wiadomosc">Wiadomość <span class="color_red">*</span></label>
                        <textarea name="contact-msg" class="form-control" id="wiadomosc" placeholder="Wiadomość" rows="3" require><?php echo $contact_msg ?></textarea>
                        <span class="alert-danger"> <?php echo $msgErr; ?></span>
                    </div>

                    <button id="sendBtn" onclick="sendContactForm(event)" class="btn btn-primary sendBtn">
                        <p>Wyślij</p> <i class="bi bi-send"></i>
                    </button>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <input type="hidden" name="contactForm" value="true" />
                </form>
            </div>
            <div class="col-12 col-lg-6">
                <div class="h2_contact_wrapper text-center">
                    <h2 class="text-center contact_h2_2"> KONTAKT TELEFONICZNY</h2>
                </div>
                <div class="phone-img-wrapper">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/phone.png"  '; ?>" alt="phone">
                    <p class="phone1">Piotr <br><a href="tel:0048601767809"><i class="fas fa-phone"></i> +48 601 767 809</a></p>
                    <p class="phone2">Łukasz <br><a href="tel:0048609660472"><i class="fas fa-phone"></i> +48 609 660 472</a></p>
                </div>
            </div>
        </div>
    </div>
</div>







<?php get_footer(); ?>