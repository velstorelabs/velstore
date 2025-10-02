<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Das Feld :attribute ist erforderlich.',
    'string' => 'Das Feld :attribute muss eine Zeichenkette sein.',
    'max' => 'Das Feld :attribute darf nicht länger als :max Zeichen sein.',
    'min' => 'Das Feld :attribute muss mindestens :min Zeichen lang sein.',
    'image' => 'Das Feld :attribute muss ein Bild sein.',
    'mimes' => 'Das Feld :attribute muss eine Datei vom Typ: :values sein.',
    'array' => 'Das Feld :attribute muss ein Array sein.',
    'numeric' => 'Das Feld :attribute muss eine Zahl sein.',
    'integer' => 'Das Feld :attribute muss eine Ganzzahl sein.',
    'lte' => 'Das Feld :attribute muss kleiner oder gleich :value sein.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Hier definieren wir benutzerdefinierte Attributnamen für mehrere Sprachen.
    | Dadurch werden Validierungsnachrichten lesbarer.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Name',
        'email' => 'E-Mail',
        'password' => 'Passwort',
        'password_confirmation' => 'Passwortbestätigung',
        'phone' => 'Telefonnummer',
        'status' => 'Status',

        // Social links
        'type' => 'Plattformtyp',
        'platform' => 'Plattformname',
        'link' => 'Plattformlink',

        // Menu fields
        'title' => 'Menütitel',

        // Dynamic variants
        'variants.*.name' => 'Variantenname',
        'variants.*.price' => 'Variantenpreis',
        'variants.*.discount_price' => 'Variantenrabattpreis',
        'variants.*.stock' => 'Variantenbestand',
        'variants.*.SKU' => 'Varianten-SKU',
        'variants.*.barcode' => 'Varianten-Barcode',
        'variants.*.weight' => 'Variantengewicht',
        'variants.*.dimensions' => 'Variantengröße',
        'variants.*.language_code' => 'Variantensprache',
        'variants.*.size_id' => 'Variantengröße',
        'variants.*.color_id' => 'Variantenfarbe',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Name (Englisch)',
        'translations.en.description' => 'Beschreibung (Englisch)',
        'translations.en.image' => 'Bild (Englisch)',
        'translations.en.title' => 'Titel (Englisch)',
        'translations.en.content' => 'Inhalt (Englisch)',
        'languages.en.title' => 'Banner-Titel (Englisch)',
        'languages.en.description' => 'Banner-Beschreibung (Englisch)',
        'languages.en.image' => 'Banner-Bild (Englisch)',
        'languages.en.name' => 'Plattformname (Englisch)',
        'title.en' => 'Titel (Englisch)',

        // Arabic
        'translations.ar.name' => 'Name (Arabisch)',
        'translations.ar.description' => 'Beschreibung (Arabisch)',
        'translations.ar.image' => 'Bild (Arabisch)',
        'translations.ar.title' => 'Titel (Arabisch)',
        'translations.ar.content' => 'Inhalt (Arabisch)',
        'languages.ar.title' => 'Banner-Titel (Arabisch)',
        'languages.ar.description' => 'Banner-Beschreibung (Arabisch)',
        'languages.ar.image' => 'Banner-Bild (Arabisch)',
        'languages.ar.name' => 'Plattformname (Arabisch)',
        'title.ar' => 'Titel (Arabisch)',

        // German
        'translations.de.name' => 'Name (Deutsch)',
        'translations.de.description' => 'Beschreibung (Deutsch)',
        'translations.de.image' => 'Bild (Deutsch)',
        'translations.de.title' => 'Titel (Deutsch)',
        'translations.de.content' => 'Inhalt (Deutsch)',
        'languages.de.title' => 'Banner-Titel (Deutsch)',
        'languages.de.description' => 'Banner-Beschreibung (Deutsch)',
        'languages.de.image' => 'Banner-Bild (Deutsch)',
        'languages.de.name' => 'Plattformname (Deutsch)',
        'title.de' => 'Titel (Deutsch)',

        // Spanish
        'translations.es.name' => 'Name (Spanisch)',
        'translations.es.description' => 'Beschreibung (Spanisch)',
        'translations.es.image' => 'Bild (Spanisch)',
        'translations.es.title' => 'Titel (Spanisch)',
        'translations.es.content' => 'Inhalt (Spanisch)',
        'languages.es.title' => 'Banner-Titel (Spanisch)',
        'languages.es.description' => 'Banner-Beschreibung (Spanisch)',
        'languages.es.image' => 'Banner-Bild (Spanisch)',
        'languages.es.name' => 'Plattformname (Spanisch)',
        'title.es' => 'Titel (Spanisch)',

        // Persian
        'translations.fa.name' => 'Name (Persisch)',
        'translations.fa.description' => 'Beschreibung (Persisch)',
        'translations.fa.image' => 'Bild (Persisch)',
        'translations.fa.title' => 'Titel (Persisch)',
        'translations.fa.content' => 'Inhalt (Persisch)',
        'languages.fa.title' => 'Banner-Titel (Persisch)',
        'languages.fa.description' => 'Banner-Beschreibung (Persisch)',
        'languages.fa.image' => 'Banner-Bild (Persisch)',
        'languages.fa.name' => 'Plattformname (Persisch)',
        'title.fa' => 'Titel (Persisch)',

        // French
        'translations.fr.name' => 'Name (Französisch)',
        'translations.fr.description' => 'Beschreibung (Französisch)',
        'translations.fr.image' => 'Bild (Französisch)',
        'translations.fr.title' => 'Titel (Französisch)',
        'translations.fr.content' => 'Inhalt (Französisch)',
        'languages.fr.title' => 'Banner-Titel (Französisch)',
        'languages.fr.description' => 'Banner-Beschreibung (Französisch)',
        'languages.fr.image' => 'Banner-Bild (Französisch)',
        'languages.fr.name' => 'Plattformname (Französisch)',
        'title.fr' => 'Titel (Französisch)',

        // Hindi
        'translations.hi.name' => 'Name (Hindi)',
        'translations.hi.description' => 'Beschreibung (Hindi)',
        'translations.hi.image' => 'Bild (Hindi)',
        'translations.hi.title' => 'Titel (Hindi)',
        'translations.hi.content' => 'Inhalt (Hindi)',
        'languages.hi.title' => 'Banner-Titel (Hindi)',
        'languages.hi.description' => 'Banner-Beschreibung (Hindi)',
        'languages.hi.image' => 'Banner-Bild (Hindi)',
        'languages.hi.name' => 'Plattformname (Hindi)',
        'title.hi' => 'Titel (Hindi)',

        // Indonesian
        'translations.id.name' => 'Name (Indonesisch)',
        'translations.id.description' => 'Beschreibung (Indonesisch)',
        'translations.id.image' => 'Bild (Indonesisch)',
        'translations.id.title' => 'Titel (Indonesisch)',
        'translations.id.content' => 'Inhalt (Indonesisch)',
        'languages.id.title' => 'Banner-Titel (Indonesisch)',
        'languages.id.description' => 'Banner-Beschreibung (Indonesisch)',
        'languages.id.image' => 'Banner-Bild (Indonesisch)',
        'languages.id.name' => 'Plattformname (Indonesisch)',
        'title.id' => 'Titel (Indonesisch)',

        // Italian
        'translations.it.name' => 'Name (Italienisch)',
        'translations.it.description' => 'Beschreibung (Italienisch)',
        'translations.it.image' => 'Bild (Italienisch)',
        'translations.it.title' => 'Titel (Italienisch)',
        'translations.it.content' => 'Inhalt (Italienisch)',
        'languages.it.title' => 'Banner-Titel (Italienisch)',
        'languages.it.description' => 'Banner-Beschreibung (Italienisch)',
        'languages.it.image' => 'Banner-Bild (Italienisch)',
        'languages.it.name' => 'Plattformname (Italienisch)',
        'title.it' => 'Titel (Italienisch)',

        // Japanese
        'translations.ja.name' => 'Name (Japanisch)',
        'translations.ja.description' => 'Beschreibung (Japanisch)',
        'translations.ja.image' => 'Bild (Japanisch)',
        'translations.ja.title' => 'Titel (Japanisch)',
        'translations.ja.content' => 'Inhalt (Japanisch)',
        'languages.ja.title' => 'Banner-Titel (Japanisch)',
        'languages.ja.description' => 'Banner-Beschreibung (Japanisch)',
        'languages.ja.image' => 'Banner-Bild (Japanisch)',
        'languages.ja.name' => 'Plattformname (Japanisch)',
        'title.ja' => 'Titel (Japanisch)',

        // Korean
        'translations.ko.name' => 'Name (Koreanisch)',
        'translations.ko.description' => 'Beschreibung (Koreanisch)',
        'translations.ko.image' => 'Bild (Koreanisch)',
        'translations.ko.title' => 'Titel (Koreanisch)',
        'translations.ko.content' => 'Inhalt (Koreanisch)',
        'languages.ko.title' => 'Banner-Titel (Koreanisch)',
        'languages.ko.description' => 'Banner-Beschreibung (Koreanisch)',
        'languages.ko.image' => 'Banner-Bild (Koreanisch)',
        'languages.ko.name' => 'Plattformname (Koreanisch)',
        'title.ko' => 'Titel (Koreanisch)',

        // Dutch
        'translations.nl.name' => 'Name (Niederländisch)',
        'translations.nl.description' => 'Beschreibung (Niederländisch)',
        'translations.nl.image' => 'Bild (Niederländisch)',
        'translations.nl.title' => 'Titel (Niederländisch)',
        'translations.nl.content' => 'Inhalt (Niederländisch)',
        'languages.nl.title' => 'Banner-Titel (Niederländisch)',
        'languages.nl.description' => 'Banner-Beschreibung (Niederländisch)',
        'languages.nl.image' => 'Banner-Bild (Niederländisch)',
        'languages.nl.name' => 'Plattformname (Niederländisch)',
        'title.nl' => 'Titel (Niederländisch)',

        // Polish
        'translations.pl.name' => 'Name (Polnisch)',
        'translations.pl.description' => 'Beschreibung (Polnisch)',
        'translations.pl.image' => 'Bild (Polnisch)',
        'translations.pl.title' => 'Titel (Polnisch)',
        'translations.pl.content' => 'Inhalt (Polnisch)',
        'languages.pl.title' => 'Banner-Titel (Polnisch)',
        'languages.pl.description' => 'Banner-Beschreibung (Polnisch)',
        'languages.pl.image' => 'Banner-Bild (Polnisch)',
        'languages.pl.name' => 'Plattformname (Polnisch)',
        'title.pl' => 'Titel (Polnisch)',

        // Portuguese
        'translations.pt.name' => 'Name (Portugiesisch)',
        'translations.pt.description' => 'Beschreibung (Portugiesisch)',
        'translations.pt.image' => 'Bild (Portugiesisch)',
        'translations.pt.title' => 'Titel (Portugiesisch)',
        'translations.pt.content' => 'Inhalt (Portugiesisch)',
        'languages.pt.title' => 'Banner-Titel (Portugiesisch)',
        'languages.pt.description' => 'Banner-Beschreibung (Portugiesisch)',
        'languages.pt.image' => 'Banner-Bild (Portugiesisch)',
        'languages.pt.name' => 'Plattformname (Portugiesisch)',
        'title.pt' => 'Titel (Portugiesisch)',

        // Russian
        'translations.ru.name' => 'Name (Russisch)',
        'translations.ru.description' => 'Beschreibung (Russisch)',
        'translations.ru.image' => 'Bild (Russisch)',
        'translations.ru.title' => 'Titel (Russisch)',
        'translations.ru.content' => 'Inhalt (Russisch)',
        'languages.ru.title' => 'Banner-Titel (Russisch)',
        'languages.ru.description' => 'Banner-Beschreibung (Russisch)',
        'languages.ru.image' => 'Banner-Bild (Russisch)',
        'languages.ru.name' => 'Plattformname (Russisch)',
        'title.ru' => 'Titel (Russisch)',

        // Thai
        'translations.th.name' => 'Name (Thailändisch)',
        'translations.th.description' => 'Beschreibung (Thailändisch)',
        'translations.th.image' => 'Bild (Thailändisch)',
        'translations.th.title' => 'Titel (Thailändisch)',
        'translations.th.content' => 'Inhalt (Thailändisch)',
        'languages.th.title' => 'Banner-Titel (Thailändisch)',
        'languages.th.description' => 'Banner-Beschreibung (Thailändisch)',
        'languages.th.image' => 'Banner-Bild (Thailändisch)',
        'languages.th.name' => 'Plattformname (Thailändisch)',
        'title.th' => 'Titel (Thailändisch)',

        // Turkish
        'translations.tr.name' => 'Name (Türkisch)',
        'translations.tr.description' => 'Beschreibung (Türkisch)',
        'translations.tr.image' => 'Bild (Türkisch)',
        'translations.tr.title' => 'Titel (Türkisch)',
        'translations.tr.content' => 'Inhalt (Türkisch)',
        'languages.tr.title' => 'Banner-Titel (Türkisch)',
        'languages.tr.description' => 'Banner-Beschreibung (Türkisch)',
        'languages.tr.image' => 'Banner-Bild (Türkisch)',
        'languages.tr.name' => 'Plattformname (Türkisch)',
        'title.tr' => 'Titel (Türkisch)',

        // Vietnamese
        'translations.vi.name' => 'Name (Vietnamesisch)',
        'translations.vi.description' => 'Beschreibung (Vietnamesisch)',
        'translations.vi.image' => 'Bild (Vietnamesisch)',
        'translations.vi.title' => 'Titel (Vietnamesisch)',
        'translations.vi.content' => 'Inhalt (Vietnamesisch)',
        'languages.vi.title' => 'Banner-Titel (Vietnamesisch)',
        'languages.vi.description' => 'Banner-Beschreibung (Vietnamesisch)',
        'languages.vi.image' => 'Banner-Bild (Vietnamesisch)',
        'languages.vi.name' => 'Plattformname (Vietnamesisch)',
        'title.vi' => 'Titel (Vietnamesisch)',

        // Chinese
        'translations.zh.name' => 'Name (Chinesisch)',
        'translations.zh.description' => 'Beschreibung (Chinesisch)',
        'translations.zh.image' => 'Bild (Chinesisch)',
        'translations.zh.title' => 'Titel (Chinesisch)',
        'translations.zh.content' => 'Inhalt (Chinesisch)',
        'languages.zh.title' => 'Banner-Titel (Chinesisch)',
        'languages.zh.description' => 'Banner-Beschreibung (Chinesisch)',
        'languages.zh.image' => 'Banner-Bild (Chinesisch)',
        'languages.zh.name' => 'Plattformname (Chinesisch)',
        'title.zh' => 'Titel (Chinesisch)',
    ],
];
