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

Eine ausblendbare, shopweite Ankündigungsleiste für WooCommerce: Nachricht, Link und Farben.

== Description ==

Notice fügt oben in deinem WooCommerce-Shop eine Ankündigungsleiste hinzu. Nutze sie, um
einen Sale, eine Schwelle für kostenlosen Versand, einen Versand-Stichtag oder eine beliebige shopweite
Nachricht zu bewerben, optional mit Call-to-Action-Button und deinen eigenen Farben.

Die Leiste wird serverseitig bei `wp_body_open` gerendert und liefert ein kleines,
abhängigkeitsfreies Stylesheet. Das CSS wird nur geladen, wenn die Leiste aktiviert ist und eine
Nachricht hat, und das Ausblend-Skript nur, wenn die Leiste auch ausblendbar ist, sodass eine
deaktivierte Leiste deinen Seiten nichts hinzufügt.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-notice/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-notice/
* <strong>Quellcode</strong> - https://github.com/wppoland/plogins-notice
* <strong>Fehlerberichte und Funktionswünsche</strong> - https://github.com/wppoland/plogins-notice/issues


= Features =

* Eine einzige shopweite Ankündigungsleiste, oben auf jeder Seite angeheftet.
* Nachricht mit einer kleinen sicheren HTML-Allowlist (<strong>fett</strong>, *kursiv*, Links, Zeilenumbrüche).
* Optionaler Call-to-Action-Button mit eigener URL und Option für neuen Tab.
* Eigene Hintergrund-, Text- und Akzentfarben mit Live-Vorschau.
* Ausblendbar, wobei die Auswahl im Browser gespeichert wird (localStorage, keine Cookies, keine personenbezogenen Daten).
* Änderst du den Nachrichtentext, wird die Leiste automatisch wieder allen angezeigt.
* Barrierefrei: ARIA-Region, per Tastatur bedienbarer Schließen-Button, sichtbare Fokus-Stile, respektiert reduzierte Bewegung.
* Keine Layout-Verschiebung über die eigene Höhe der Leiste hinaus; Assets werden nur geladen, wenn die Leiste aktiv ist.
* Übersetzungsbereit (POT enthalten) und saubere Deinstallation.
* Kompatibel mit HPOS sowie Warenkorb-/Kassenblöcken.

== Installation ==

1. Lade das Plugin nach `/wp-content/plugins/notice` hoch oder installiere es über Plugins → Installieren.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu <strong>WooCommerce → Ankündigungsleiste</strong>, schreibe deine Nachricht, lege Farben fest und aktiviere dann die Leiste.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja, WooCommerce muss aktiv sein.

= Where does the bar appear? =

Ganz oben auf jeder Frontend-Seite, über den `wp_body_open`-Hook des Themes. Die meisten
modernen Themes unterstützen ihn.

= Can shoppers close the bar? =

Ja, wenn „Ausblendbar“ aktiviert ist. Die Auswahl wird im Browser des Besuchers über
localStorage gespeichert — keine Cookies und keine personenbezogenen Daten. Du kannst festlegen, wie viele Tage
die Ausblendung gilt (0 = für immer). Bearbeitest du den Nachrichtentext, wird die Leiste allen wieder angezeigt.

= Does it slow down my store? =

Nein. CSS und Ausblend-Skript werden nur geladen, wenn die Leiste tatsächlich aktiv ist,
und das Markup ist schlichtes HTML. Es gibt kein Frontend-JavaScript-Framework.

= Does the bar work on mobile? =

Ja. Die Leiste erstreckt sich über die Viewport-Breite, und die Ausblend-Steuerung bleibt auf kleinen Bildschirmen erreichbar.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es netzwerkweit oder auf einzelnen Websites; jede Website behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Die Ankündigungsleiste im Shop.
2. Der Einstellungsbildschirm mit Live-Vorschau.

== External Services ==

Notice stellt keine Verbindung zu externen Diensten her. Deine Leisten-Einstellungen (Nachricht, Link, Farben und Ausblend-Optionen) bleiben auf deiner eigenen Website in der Option `notice_settings`, mit dem Marker `notice_db_version` für Upgrades. Die Ausblend-Entscheidung liegt nur im Browser jedes Besuchers über localStorage — keine Cookies, keine personenbezogenen Daten — und nichts verlässt deinen Shop.

== Translations ==

Plogins Notice enthält polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-notice`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Mitgelieferte polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche hinzugefügt.

= 1.0.1 =
* Erste stabile Version.

= 0.1.4 =
* Umbenannt in Plogins Notice for WooCommerce für einen unverwechselbaren Plugin-Namen.

= 0.1.3 =
* Fügt die Aktion `notice/bar_rendered` nach dem Rendern jeder aktiven Ankündigungsleiste für aggregierte Impression-Analysen in Erweiterungen hinzu.

= 0.1.3 =
* Aktion `notice/bar_rendered` nach dem Ausgeben jeder aktiven Leiste, für PRO-Impression-Hooks.

= 0.1.2 =
* Multi-Leisten-Unterstützung über den Filter `notice/bars`; `notice/bar_active` erhält jetzt eine Leisten-ID. Frontend-Ausblendung unterstützt gestapelte Leisten.

= 0.1.1 =
* Fügt den Filter `notice/bar_active` hinzu, damit PRO und eigener Code die Leistensichtbarkeit einschränken können.

= 0.1.0 =
* Erstveröffentlichung: shopweite Ankündigungsleiste mit Nachricht, CTA-Link, Farben und Ausblendung.
