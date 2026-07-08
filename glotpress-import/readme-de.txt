=== Plogins Notice - Announcement Bar for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, announcement bar, notification bar, promo bar, sale banner
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Erfordert Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Eine entfernbare, geschäftsweite Ankündigungsleiste für WooCommerce: Nachricht, Link und Farben.

== Description ==

Hinweis fügt oben in deinem WooCommerce-Shop eine Ankündigungsleiste hinzu. Benutze es, um
Bewerbe einen Ausverkauf, einen Schwellenwert für den kostenlosen Versand, eine Versandfrist oder etwas anderes im gesamten Geschäft
Nachricht, optional mit Call-to-Action-Button und deinen eigenen Farben.

Die Leiste wird serverseitig bei „wp_body_open“ gerendert und enthält eine kleine,
Abhängigkeitsfreies Stylesheet. Das CSS wird nur geladen, wenn die Leiste aktiviert ist und über eine verfügt
Nachricht und das Entlassungsskript nur, wenn die Bar auch entlassen werden kann, also a
Die deaktivierte Leiste fügt deinen Seiten nichts hinzu.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-notice/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-notice/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-notice
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-notice/issues


= Features =

* Eine einzige, geschäftsweite Ankündigungsleiste, die oben auf jeder Seite angeheftet ist.
* Nachricht mit einer kleinen sicheren HTML-Zulassungsliste (<strong>fett</strong>, *kursiv*, Links, Zeilenumbrüche).
* Optionaler Call-to-Action-Button mit eigener URL und neuer Tab-Option.
* Benutzerdefinierte Hintergrund-, Text- und Akzentfarben mit Live-Vorschau.
* Kann mit der im Browser gespeicherten Auswahl deaktiviert werden (lokaler Speicher, keine Cookies, keine persönlichen Daten).
* Wenn du den Nachrichtentext ändern, wird die Leiste automatisch wieder allen angezeigt.
* Zugänglich: ARIA-Region, über die Tastatur bedienbare Schließtaste, Fokus-sichtbare Stile, berücksichtigt reduzierte Bewegung.
* Keine Layoutverschiebung über die eigene Höhe der Leiste hinaus; Assets werden nur geladen, wenn die Leiste aktiv ist.
* Übersetzungsbereit (POT inklusive) und saubere Deinstallation.
* Kompatibel mit HPOS und Warenkorb-/Kassenblöcken.

== Installation ==

1. Lade das Plugin nach „/wp-content/plugins/notice“ hoch oder installiere es über Plugins → Neu hinzufügen.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu <strong>WooCommerce → Ankündigungsleiste</strong>, schreibe deine Nachricht, lege Farben fest und aktiviere dann die Leiste.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja.

= Where does the bar appear? =

Ganz oben auf jeder Frontend-Seite, über den „wp_body_open“-Hook des Themes. Die meisten
Moderne Themes unterstützen es.

= Can shoppers close the bar? =

Ja, wenn „Entfernbar“ aktiviert ist. Die Auswahl wird im Browser des Besuchers gespeichert
localStorage, keine Cookies und keine personenbezogenen Daten. Du kannst einstellen, wie viele Tage die
Die Entlassung dauert (0 = für immer). Wenn du den Nachrichtentext bearbeiten, wird die Leiste allen wieder angezeigt.

= Does it slow down my store? =

Nein. Das CSS und das Entlassungsskript werden nur dann in die Warteschlange gestellt, wenn die Leiste tatsächlich aktiv ist.
und das Markup ist einfaches HTML. Es gibt kein Front-End-JavaScript-Framework.

= Does the bar work on mobile? =

Ja. Die Leiste erstreckt sich über die gesamte Breite des Ansichtsfensters und das Steuerelement zum Schließen bleibt auf kleinen Bildschirmen erreichbar.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Die Ankündigungsleiste an einer Ladenfront.
2. Der Einstellungsbildschirm mit einer Live-Vorschau.

== External Services ==

Der Hinweis stellt keine Verbindung zu externen Diensten her. deine Leisteneinstellungen (Nachricht, Link, Farben und Ablehnungsoptionen) werden auf deiner eigenen Website in der Option „notice_settings“ gespeichert, mit einer Markierung „notice_db_version“ für Upgrades. Die Möglichkeit zum Ablehnen bleibt nur im Browser jedes Besuchers über localStorage bestehen, es gibt keine Cookies, keine persönlichen Daten und nichts verlässt deinen Shop.

== Changelog ==

= 1.0.1 =
* Erste stabile Version.

= 0.1.4 =
* Für einen eindeutigeren Plugin-Namen in „Plogins-Hinweis für WooCommerce“ umbenannt.

= 0.1.3 =
* Füge die Aktion „notice/bar_rendered“ nach dem Rendern jeder aktiven Ankündigungsleiste hinzu, um eine Analyse der Gesamteindrücke in Erweiterungen zu ermöglichen.

= 0.1.3 =
* „notice/bar_rendered“-Aktion nach dem Drucken jedes aktiven Balkens für PRO-Impression-Hooks.

= 0.1.2 =
* Multi-Bar-Unterstützung über den Filter „notice/bars“; „notice/bar_active“ erhält jetzt eine Bar-ID. Die Entlassung am vorderen Ende erfolgt über gestapelte Stangen.

= 0.1.1 =
* Füge den Filter „notice/bar_active“ hinzu, damit PRO- und benutzerdefinierter Code die Sichtbarkeit der Leiste einschränken können.

= 0.1.0 =
* Erstveröffentlichung: geschäftsweite Ankündigungsleiste mit Nachricht, CTA-Link, Farben und Kündigung.
