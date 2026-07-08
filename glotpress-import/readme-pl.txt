=== Plogins Notice - Announcement Bar for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, announcement bar, notification bar, promo bar, sale banner
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Wymaga wtyczek: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Niedopuszczalny pasek ogłoszeń w całym sklepie dla WooCommerce: wiadomość, link i kolory.

== Description ==

Powiadomienie dodaje jeden pasek ogłoszeń na górze Twojego sklepu WooCommerce. Wykorzystaj to
promować wyprzedaż, próg bezpłatnej wysyłki, termin wysyłki lub dowolny inny produkt w całym sklepie
komunikat, z opcjonalnym przyciskiem wezwania do działania i własną kolorystyką.

Pasek jest renderowany po stronie serwera w `wp_body_open` i dostarcza mały,
arkusz stylów wolny od zależności. CSS ładuje się tylko wtedy, gdy pasek jest włączony i ma
wiadomość, a scenariusz zwolnienia tylko wtedy, gdy bar jest również oddalony, a więc a
wyłączony pasek nie dodaje niczego do twoich stron.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-notice/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-notice/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-notice
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-notice/issues


= Features =

* Pojedynczy pasek ogłoszeń obejmujący cały sklep, przypięty na górze każdej strony.
* Wiadomość z małą listą dozwolonych w bezpiecznym formacie HTML (<strong>pogrubienie</strong>, *kursywa*, linki, podziały wierszy).
* Opcjonalny przycisk wezwania do działania z własnym adresem URL i opcją nowej karty.
* Niestandardowe kolory tła, tekstu i akcentów z podglądem na żywo.
* Nie można wyłączyć, wybierając opcję zapamiętaną w przeglądarce (localStorage, bez plików cookie, bez danych osobowych).
* Zmiana tekstu wiadomości powoduje automatyczne ponowne pokazanie paska każdemu.
* Dostępne: region ARIA, przycisk zamykania obsługiwany za pomocą klawiatury, style z widoczną ostrością, uwzględniają ograniczenie ruchu.
* Brak przesunięć układu poza wysokość paska; zasoby ładują się tylko wtedy, gdy pasek jest aktywny.
* Gotowe do tłumaczenia (w tym POT) i możliwość czystej dezinstalacji.
* Kompatybilny z HPOS i blokami koszyka/kasy.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/notice` lub zainstaluj poprzez Wtyczki → Dodaj nową.
2. Aktywuj. WooCommerce musi być aktywny.
3. Przejdź do <strong>WooCommerce → Pasek ogłoszeń</strong>, napisz wiadomość, ustaw kolory, a następnie włącz pasek.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak.

= Where does the bar appear? =

Na samej górze każdej strony front-end, poprzez hak `wp_body_open` motywu. Większość
obsługują to nowoczesne motywy.

= Can shoppers close the bar? =

Tak, gdy włączona jest opcja „Odrzuć”. Wybór jest zapisywany w przeglądarce odwiedzającego
localStorage, bez plików cookie i bez danych osobowych. Można ustawić liczbę dni
zwolnienie trwa (0 = na zawsze). Edycja tekstu wiadomości powoduje ponowne pokazanie paska wszystkim.

= Does it slow down my store? =

Nie. CSS i skrypt zwolnienia są kolejkowane tylko wtedy, gdy pasek jest rzeczywiście aktywny,
a znacznik to zwykły kod HTML. Nie ma front-endowego frameworku JavaScript.

= Does the bar work on mobile? =

Tak. Pasek rozciąga się na szerokość widocznego obszaru, a element sterujący odrzucaniem pozostaje dostępny na małych ekranach.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== Screenshots ==

1. Pasek ogłoszeń na witrynie sklepowej.
2. Ekran ustawień z podglądem na żywo.

== External Services ==

Powiadomienie nie łączy się z żadnymi usługami zewnętrznymi. Twoje ustawienia paska (wiadomość, link, kolory i opcje zwolnienia) są przechowywane na Twojej własnej stronie w opcji `notice_settings`, ze znacznikiem `notice_db_version` dla aktualizacji. Opcja zwolnienia dostępna jest tylko w przeglądarce każdego odwiedzającego za pośrednictwem localStorage, bez plików cookie, bez danych osobowych i nic nie opuszcza Twojego sklepu.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.4 =
* Zmieniono nazwę na Plogins Notice for WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.3 =
* Dodaj akcję „notice/bar_rendered” po wyrenderowaniu każdego aktywnego paska ogłoszeń, aby uzyskać zbiorczą analizę wyświetleń w rozszerzeniach.

= 0.1.3 =
* Akcja `notice/bar_rendered` po wydrukowaniu każdego aktywnego słupka, dla haków wyciskowych PRO.

= 0.1.2 =
* Obsługa wielu pasków poprzez filtr `powiadomienia/paski`; `notice/bar_active` otrzymuje teraz identyfikator paska. Zwolnienie z przodu obsługuje ułożone w stosy pręty.

= 0.1.1 =
* Dodaj filtr „notice/bar_active”, aby PRO i kod niestandardowy mogły zawęzić widoczność paska.

= 0.1.0 =
* Pierwsza wersja: pasek ogłoszeń obejmujący cały sklep z komunikatem, linkiem do wezwania do działania, kolorami i zwolnieniem.
