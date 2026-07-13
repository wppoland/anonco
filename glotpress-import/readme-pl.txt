=== Plogins Notice - Announcement Bar for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, announcement bar, notification bar, promo bar, sale banner
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Zamykany pasek ogłoszeń w całym sklepie dla WooCommerce: komunikat, link i kolory.

== Description ==

Notice dodaje jeden pasek ogłoszeń na górze Twojego sklepu WooCommerce. Użyj go, aby
promować wyprzedaż, próg darmowej wysyłki, termin wysyłki lub dowolny komunikat
w całym sklepie, z opcjonalnym przyciskiem wezwania do działania i własnymi kolorami.

Pasek jest renderowany po stronie serwera przy `wp_body_open` i dołącza mały,
niezależny arkusz stylów. CSS ładuje się tylko wtedy, gdy pasek jest włączony i ma
komunikat, a skrypt zamykania tylko wtedy, gdy pasek można też zamknąć, więc
wyłączony pasek nie dodaje niczego do Twoich stron.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-notice/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-notice/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-notice
* <strong>Zgłoszenia błędów i propozycje funkcji</strong> - https://github.com/wppoland/plogins-notice/issues


= Features =

* Jeden pasek ogłoszeń w całym sklepie, przypięty na górze każdej strony.
* Komunikat z małą listą dozwolonego bezpiecznego HTML (<strong>pogrubienie</strong>, *kursywa*, linki, podziały wierszy).
* Opcjonalny przycisk wezwania do działania z własnym adresem URL i opcją nowej karty.
* Własne kolory tła, tekstu i akcentu z podglądem na żywo.
* Możliwość zamknięcia z zapamiętaniem wyboru w przeglądarce (localStorage, bez plików cookie, bez danych osobowych).
* Zmiana tekstu komunikatu automatycznie ponownie pokazuje pasek wszystkim.
* Dostępność: region ARIA, przycisk zamykania obsługiwany z klawiatury, widoczne style fokusu, respektuje ograniczony ruch.
* Bez przesunięć układu poza wysokością samego paska; zasoby ładują się tylko wtedy, gdy pasek jest aktywny.
* Gotowe do tłumaczenia (POT w zestawie) i czysta dezinstalacja.
* Zgodne z HPOS oraz blokami koszyka i kasy.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/notice` lub zainstaluj przez Wtyczki → Dodaj nową.
2. Włącz ją. WooCommerce musi być aktywne.
3. Przejdź do <strong>WooCommerce → Pasek ogłoszeń</strong>, napisz komunikat, ustaw kolory, a następnie włącz pasek.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak, wymaga aktywnego WooCommerce.

= Where does the bar appear? =

Na samej górze każdej strony front-endu, przez hak `wp_body_open` motywu. Większość
nowoczesnych motywów go obsługuje.

= Can shoppers close the bar? =

Tak, gdy włączona jest opcja „Możliwość zamknięcia”. Wybór jest zapisywany w przeglądarce odwiedzającego w
localStorage — bez plików cookie i bez danych osobowych. Możesz ustawić, na ile dni
zamknięcie ma obowiązywać (0 = na zawsze). Edycja tekstu komunikatu ponownie pokazuje pasek wszystkim.

= Does it slow down my store? =

Nie. CSS i skrypt zamykania są ładowane tylko wtedy, gdy pasek jest faktycznie aktywny,
a znacznik to zwykły HTML. Nie ma frameworka JavaScript po stronie front-endu.

= Does the bar work on mobile? =

Tak. Pasek rozciąga się na szerokość okna, a kontrolka zamykania pozostaje dostępna na małych ekranach.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest zgodna z WordPress Multisite. Włącz ją dla całej sieci lub w pojedynczych witrynach; każda witryna zachowuje własne ustawienia i dane.

== Screenshots ==

1. Pasek ogłoszeń w sklepie.
2. Ekran ustawień z podglądem na żywo.

== External Services ==

Notice nie łączy się z żadnymi usługami zewnętrznymi. Ustawienia paska (komunikat, link, kolory i opcje zamykania) są przechowywane w Twojej witrynie w opcji `notice_settings`, ze znacznikiem `notice_db_version` na potrzeby aktualizacji. Wybór zamknięcia pozostaje wyłącznie w przeglądarce każdego odwiedzającego przez localStorage — bez plików cookie, bez danych osobowych — i nic nie opuszcza Twojego sklepu.

== Translations ==

Plogins Notice zawiera polskie, niemieckie i hiszpańskie tłumaczenie interfejsu wtyczki. Domena tekstowa to `plogins-notice`, dzięki czemu paczki językowe z WordPress.org mogą również nadpisywać lub rozszerzać dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.4 =
* Zmieniono nazwę na Plogins Notice for WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.3 =
* Dodaje akcję `notice/bar_rendered` po wyrenderowaniu każdego aktywnego paska ogłoszeń na potrzeby zbiorczej analityki wyświetleń w rozszerzeniach.

= 0.1.3 =
* Akcja `notice/bar_rendered` po wydrukowaniu każdego aktywnego paska, na potrzeby haków wyświetleń PRO.

= 0.1.2 =
* Obsługa wielu pasków przez filtr `notice/bars`; `notice/bar_active` otrzymuje teraz identyfikator paska. Zamykanie po stronie front-endu obsługuje ułożone paski.

= 0.1.1 =
* Dodaje filtr `notice/bar_active`, aby PRO i własny kod mogły zawęzić widoczność paska.

= 0.1.0 =
* Pierwsze wydanie: pasek ogłoszeń w całym sklepie z komunikatem, linkiem CTA, kolorami i możliwością zamknięcia.
