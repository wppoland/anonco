<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-notice-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Notice Pro',
    'url'        => 'https://plogins.com/plogins-notice-pro/pricing/',
    'sellable'   => true,
    'price_from' => 19,
    'currency'   => 'EUR',
    'price_pln'  => 85,
    'lead'       => [
        'en' => 'Click and impression analytics, page, role, geo and device targeting, multiple bars and A/B testing — feature-complete PRO.',
        'pl' => 'Analityka, targetowanie stron, ról, krajów i urządzeń, wiele pasków oraz testy A/B — kompletna wersja PRO.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'CTA click analytics', 'desc' => 'Aggregate daily click counts for the CTA button and message links, no personal data.'],
            'pl' => ['title' => 'Analityka kliknięć CTA', 'desc' => 'Dzienne zliczenia kliknięć w przycisk CTA i linki w komunikacie, bez danych osobowych.'],
        ],
        [
            'en' => ['title' => 'Impression analytics', 'desc' => 'Per-bar view and dismissal counts with a breakdown on the analytics screen.'],
            'pl' => ['title' => 'Analityka wyświetleń', 'desc' => 'Zliczenia wyświetleń i zamknięć per pasek, z podziałem na paski w panelu analityki.'],
        ],
        [
            'en' => ['title' => 'Page targeting', 'desc' => 'Show bars on every page, shop catalog, product pages, or cart and checkout only.'],
            'pl' => ['title' => 'Targetowanie stron', 'desc' => 'Pokaż pasek na każdej stronie, w katalogu sklepu, na produkcie lub tylko w koszyku i kasie.'],
        ],
        [
            'en' => ['title' => 'Multiple bars', 'desc' => 'Up to five announcement bars at once, each with its own message, colours and schedule.'],
            'pl' => ['title' => 'Wiele pasków', 'desc' => 'Do pięciu pasków powiadomień naraz, każdy z własnym komunikatem, kolorami i harmonogramem.'],
        ],
        [
            'en' => ['title' => 'A/B testing', 'desc' => 'Split-test variant B message and CTA against the control; analytics show CTR per variant.'],
            'pl' => ['title' => 'Testy A/B', 'desc' => 'Porównaj wariant B komunikatu i CTA z wariantem kontrolnym; analityka pokazuje CTR per wariant.'],
        ],
        [
            'en' => ['title' => 'Role targeting', 'desc' => 'Show bars to everyone, guests, logged-in customers or selected roles.'],
            'pl' => ['title' => 'Targetowanie ról', 'desc' => 'Pokaż paski wszystkim, gościom, zalogowanym klientom lub wybranym rolom.'],
        ],
        [
            'en' => ['title' => 'Geo and device targeting', 'desc' => 'Country allow/deny lists by ISO code and mobile or desktop rules.'],
            'pl' => ['title' => 'Targetowanie geo i urządzeń', 'desc' => 'Listy dozwolonych lub zablokowanych krajów (kody ISO) oraz reguły mobile/desktop.'],
        ],
        [
            'en' => ['title' => 'Extends free Notice', 'desc' => 'Requires the active free Notice plugin; delivered through Freemius with licensing and automatic updates.'],
            'pl' => ['title' => 'Rozszerza darmowy Notice', 'desc' => 'Wymaga aktywnej darmowej wtyczki Notice; dostarczany przez Freemius z licencją i automatycznymi aktualizacjami.'],
        ],
    ],
];
