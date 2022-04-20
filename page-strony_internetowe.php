<?php




$args = [
  "metaDescription" => "Stwórzymy w pełni dopasowaną do Ciebie witrynę już dziś: strony WWW, wizytówki, blogi, CMS, Wordpress",
  "ogTitle" => "",
  "ogUrl" => get_home_url(),
  "ogSite_name" => "",
  "title" => "ReBro - Strony internetowe Gdańsk"
];

get_header(null, $args);
?>
<!-- SEKCJA 1 DUŻE ZDJECIE POD NAWIGACJĄ -->
<div class="main">

  <div class="container-fluid back_websites_slider_img text-center margin-section-bottom d-flex justify-content-center align-items-center">
    <h2>Strony internetowe</h2>
  </div>
  <!-- SEKCJA 2  KARTY-->
  <div class="container-fluid strony_background">
    <div class="container margin-section-bottom ">
      <div class="row aos-fix-fade-left">
        <div class="col-sm-12 col-lg-9 d-flex ">
          <p class=" p-header-2 align-self-center" data-aos="fade-right"> <span class="slash">// </span></p>
          <h1 class=" p-header-2 align-self-center" data-aos="fade-right"> JAK TWORZYMY NASZE STRONY INTERNETOWE?</h1>
        </div>

        <div class="col-sm-12 col-lg-3 d-flex align-items-center centered-button " data-aos="fade-left">
          <a href="<?php echo get_home_url() ?>/portfolio"><button class="btn-main"><span class="btn-span-1 d-flex align-items-center justify-content-center">Nasze realizacje</span> <span class="btn-span-2 d-flex align-items-center justify-content-center"><i class="far fa-file-word"></i></span></button></a>
        </div>
      </div>


      <div class="row justify-content-center mt-5">
        <div class="col-12 row">
          <div class="col-12 col-lg-4">
            <div class=" rounded-card text-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bounce fab fa-wordpress"></i>
              <h4>Responsywność</h4>
              <div class="rounded-card-text">

                <p>Wszystkie tworzone przez nas strony są responsywne, oznacza to iż witryny wyglądają dobrze zarówno na dużym monitorze komputera, jak i na małym wyświetlaczu telefonu</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class=" rounded-card text-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bounce fab fa-wordpress"></i>
              <h4>CMS (Wordpress)</h4>
              <div class="rounded-card-text">

                <p>Tworzymy naszę strony internetowe w oparciu o CMS, czyli technologię, która w łatwy sposób umożliwia zarządzanie ich treścią bez bezpośredniej ingerencji w kod (szata graficzna, teksty)</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="700">
              <i class="bounce fas fa-sort-numeric-up"></i>
              <h4>POZYCJONOWANIE</h4>
              <div class="rounded-card-text">

                <p>W trakcie tworzenia strony stosujemy wszelkie możliwe techniki, które w przyszłości umożliwią jej łatwiejsze pozycjonowanie w wyszukiwarkach </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 row">
          <div class="col-12 col-lg-4">
            <!-- <div class="element element-2">Convex</div> -->
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="700">
              <i class="bounce fab fa-wpforms"></i>
              <div class="rounded-card-text">
                <h4>FORMULARZ KONTAKTOWY</h4>
                <p>Oferujemy integrację strony internetowej z formularzem kontaktowym podpiętym pod dowolny adres e-mail, zabezpieczonym mechanizmem captcha</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class=" rounded-card text-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bounce far fa-images"></i>
              <div class="rounded-card-text">
                <h4>GALERIA ZDJĘĆ</h4>
                <p>Zadbamy o czytelną prezentację Twoich zdjęć. Oferujemy interaktywne galerie, które w przejrzysty i estetyczny sposób zaprezentują Twoje grafiki</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" ddata-aos-delay="0">
              <i class="bounce fab fa-expeditedssl"></i>
              <div class="rounded-card-text">
                <h4>SSL</h4>
                <p>Każdą naszą witrynę zabezpieczamy certyfikatem SSL, zwiększając tym samym jej bezpieczeństwo oraz zaufanie potencjalnych odwiedzających względem witryny </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 row">
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="0">
              <i class="bounce fas fa-server"></i>
              <div class="rounded-card-text">
                <h4>HOSTING</h4>
                <p>Jeśli klient nie posiada własnego serwera, umożliwiamy za niewielką dopłatą utrzymywanie domeny na naszym własnym serwerze tak długo jak klient sobie tego życzy</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bounce fas fa-blog"></i>
              <div class="rounded-card-text">
                <h4>BLOG</h4>
                <p>Na dzień dzisiejszy dobrą formą promocji własnej marki jest prowadzenie bloga tematycznego, dlatego też w razie potrzeby możemy takiego bloga stworzyć i podpiąć pod witrynę</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="700">
              <i class="bounce fab fa-facebook-square"></i>
              <div class="rounded-card-text">
                <h4>SOCIAL MEDIA</h4>
                <p>W swiecie zdominowanym przez media społecznościowe warto wykorzystywać ich potencjał reklamowy, stąd też oferujmy możliwość skonfigurowania i podpięcia dowolnej platoformy SM pod stronę internetową</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 row">
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="700">
              <i class="bounce fas fa-edit"></i>
              <div class="rounded-card-text">
                <h4>COPYWRITING</h4>
                <p>Dla klientów, którzy nie mają jeszcze pomysłów na swoją witrynę, bądź po prostu nie mają na to czasu, oferujemy gotowe teksty pisane przez copywritera</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bounce fas fa-chart-line"></i>
              <div class="rounded-card-text">
                <h4>GOOGLE ANALITICS</h4>
                <p>Bardziej ciekawskim klientom oferujemy możliwość udostępnienia narzędzia od google, które szczegółowo analizuje ruch na stronie i obecne trendy, dzięki czemu łatwiej jest się przebić do odbiorcy</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="0">
              <i class="bounce fas fa-map-marked-alt"></i>
              <div class="rounded-card-text">
                <h4>MAPY GOOGLE</h4>
                <p>Pomimo, iż integracja strony z mapami google jest kwestią raczej oczywistą, warto zaznaczyć iż taka usługa również wchodzi w zakres naszych prac</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 row">
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="0">
              <i class="bounce fas fa-plus"></i>
              <div class="rounded-card-text">
                <h4>MODUŁY I WIDGETY</h4>
                <p>Oferujemy możliwość podpięcia dowolnego modułu lub widżetu, który wychodzi poza podstawowy zakres prac,a który mógłby znacząco wpłynać na funkcjonalność witryny</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bounce fas fa-language"></i>
              <div class="rounded-card-text">
                <h4>WERSJE JĘZYKOWE</h4>
                <p>Dla firm, które działają również poza granicami naszego kraju, bądź po prostu myślą bardziej przyszłościowo oferujemy możliwość utworzenia witryny w kilku językach</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="rounded-card text-center" data-aos="fade-up" data-aos-delay="700">
              <i class="bounce fas fa-hands-helping"></i>
              <div class="rounded-card-text">
                <h4>POMOC POWYKONAWCZA</h4>
                <p>Po zakończeniu współpracy oferujemy swoją pomoc przy ewentualnym dalszym rozwijaniu strony, edycji, bądź naprawie jakichś błędów</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- -------------------------------   Timeline    --------------------->
    <div class="container margin-section-bottom aos-fix-fade-left">
      <div class="row">
        <div class="col-12 d-flex ">
          <p class="p-header-2 margin-header-bottom align-self-center" data-aos="fade-right"> <span class="slash">// </span></p>
          <h2 class="p-header-2 margin-header-bottom align-self-center" data-aos="fade-right">MASZ WSZYSTKO POD KONTROLĄ</h2>
        </div>
      </div>


      <div class="col-12 " data-aos="fade-left">
        <div class="timeline-horizontal row">
          <div class="col-lg-3 col-12 entry">
            <div class="entry-text-wrapper">
              <div class="entry-title text-center">1</div>
              <div class="entry-description text-center">
                <div>
                  <h4>Wywiad z klientem</h4>
                  <p>Pozyskujemy od klienta wymagania i oferujemy odpowiednie rozwiązanie</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12 entry">
            <div class="entry-text-wrapper">
              <div class="entry-title text-center">2</div>
              <div class="entry-description text-center">
                <div>
                  <h4>Projektowanie i wizualizacja</h4>
                  <p>Wykonanie poprzedzamy wizualizacją, którą dajemy klientowi do wglądu i akceptacji</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12 entry">
            <div class="entry-text-wrapper">
              <div class="entry-title text-center">3</div>
              <div class="entry-description text-center">
                <div>
                  <h4>Kodowanie i optymalizacja</h4>
                  <p>Tworzymy stronę i adaptujemy ją do wymagań przeglądarek oraz wyszukiwarek</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12 entry">
            <div class="entry-text-wrapper">
              <div class="entry-title text-center">4</div>
              <div class="entry-description text-center">
                <div>
                  <h4>Zdanie projektu klientowi</h4>
                  <p>Po akceptacji udostępniamy stronę w internecie i oferujemy wsparcie powykonawcze</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------------------------------   Cennik    --------------------->

    <div class="container shop_section3 margin-section-bottom aos-fix-fade-left pb-3">
      <div class="row">
        <div class="col-12 d-flex ">
          <span class="p-header-2 margin-header-bottom align-self-center" data-aos="fade-right"> <span class="slash">// </span></span>
          <h2 class="p-header-2 margin-header-bottom align-self-center" data-aos="fade-right">CENNIK STRON INTERNETOWYCH
            <br>
            <p class="under_header-port">!Podane poniżej ceny są cenami netto oraz są to wartości przybliżone!</p>
          </h2>
        </div>
      </div>

      <div class="row pl-3 pr-3" data-aos="fade-left">
        <div class="col-12 col-lg-4 shop_section3_card_container mb-5">

          <div class="shop-card-wrapper mx-auto">
            <span class="corner-circle d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart " style="color:white; font-size: 2rem;"></i></span>
            <h4>Plan Podstawowy</h4>
            <h1>1000zł</h1>
            <hr>
            <p class="active"><i class="fas fa-check"></i> RWD (responsywność)</p>
            <p class="active"><i class="fas fa-check"></i> SSL, hosting, domena oraz poczta</p>
            <p class="active"><i class="fas fa-check"></i> Dobre praktyki SEO</p>
            <p class="active"><i class="fas fa-check"></i> Gwarancja, wsparcie oraz szkolenie</p>
            <p class="active"><i class="fas fa-check"></i> Formularz kontaktowy</p>
            <p class="active"><i class="fas fa-check"></i> Ilość stron: 1-4</p>
            <p class="active"><i class="fas fa-check"></i> Projekt wg gotowego szablonu</p>
            <p class="active"><i class="fas fa-check"></i> Integracja z social media</p>


            <a href="<?php echo get_home_url() ?>/kontakt"><button class=" btn-main-shop">Wybierz usługę</button></a>
          </div>
        </div>
        <div class="col-12 col-lg-4 shop_section3_card_container mb-5">
          <div class="shop-card-wrapper mx-auto">
            <span class="corner-circle d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart " style="color:white; font-size: 2rem;"></i></span>
            <h4>Plan Pośredni </h4>
            <h1>2000zł</h1>
            <hr>
            <p class="active"><i class="fas fa-plus"></i> Wszystko z planu podstawowego</p>
            <p class="active"><i class="fas fa-check"></i> Edytowalny CMS</p>
            <p class="active"><i class="fas fa-check"></i> Ilość stron: 1-7</p>
            <p class="active"><i class="fas fa-check"></i> Możliwość modyfikacji szablonu</p>
            <p class="active"><i class="fas fa-check"></i> Jedna dodatkowa wersja językowa (+700zł)</p>
            <p class="active"><i class="fas fa-check"></i> Blog</p>
            <p class="active"><i class="fas fa-check"></i> Dostęp do statystyk strony</p>
            <p class="active"><i class="fas fa-check"></i> 50 zł do wykorzystania w google adwords</p>

            <a href="<?php echo get_home_url() ?>/kontakt"><button class=" btn-main-shop">Wybierz usługę</button></a>
          </div>
        </div>
        <div class="col-12 col-lg-4 shop_section3_card_container mb-5">
          <div class="shop-card-wrapper mx-auto">
            <span class="corner-circle d-flex align-items-center justify-content-center"><i class="fas fa-shopping-cart " style="color:white; font-size: 2rem;"></i></span>
            <h4>Plan Premium</h4>
            <h1>od 3000zł </h1>
            <hr>
            <p class="active"><i class="fas fa-plus"></i> Wszystko z planu pośredniego</p>
            <p class="active"><i class="fas fa-check"></i> Ilość stron: Nieograniczona</p>
            <p class="active"><i class="fas fa-check"></i> Indywidualny projekt graficzny (klient może dostarczyć swój gotowy projekt)</p>
            <p class="active"><i class="fas fa-check"></i> Dowolna ilość wersji językowych (+600zł/wersje)</p>
            <p class="active"><i class="fas fa-check"></i> Dodatkowe funkcjonalności na życzenie</p>
            <p class="active"><i class="fas fa-check"></i> Rozbudowany formularz kontaktowy</p>


            <a href="<?php echo get_home_url() ?>/kontakt"><button class=" btn-main-shop">Wybierz usługę</button></a>
          </div>
        </div>
      </div>
      <div class="add_services mt-5" data-aos="fade-up">
        <!-- <span class="magic-stick"></span>
      <span class="magic-stick2"></span>
      <span class="magic-stick3"></span>
      <span class="magic-stick4"></span> -->
        <h3 class="text-center">Usługi dodatkowo płatne</h3>
        <hr>
        <ul>
          <li><i class="fas fa-cart-plus"></i> Profesjonalny copywriting</li>
          <li><i class="fas fa-cart-plus"></i> Rozbudowane pozycjonowanie</li>
          <li><i class="fas fa-cart-plus"></i> Możliwość wykupienia profesjonalnych zdjęć i grafik</li>
          <li><i class="fas fa-cart-plus"></i> Audyt SEO</li>
        </ul>
      </div>
    </div>




    <!-- KONIEC MAINA -->
  </div>
</div>







<?php get_footer(); ?>