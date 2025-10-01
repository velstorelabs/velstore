<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Das Feld :attribute ist erforderlich.',
    'string' => ':attribute muss ein Text sein.',
    'max' => ':attribute darf nicht länger als :max Zeichen sein.',
    'min' => ':attribute muss mindestens :min Zeichen enthalten.',
    'image' => ':attribute muss ein Bild sein.',
    'mimes' => ':attribute muss eine Datei des Typs :values sein.',
    'array' => ':attribute muss ein Array sein.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'integer' => ':attribute muss eine ganze Zahl sein.',
    'lte' => ':attribute muss kleiner oder gleich :value sein.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Hier definieren wir benutzerdefinierte Attributnamen für alle Sprachen.
    | So werden Validierungsnachrichten lesbarer.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Name',
        'email' => 'E-Mail',
        'password' => 'Passwort',
        'password_confirmation' => 'Passwort bestätigen',
        'phone' => 'Telefonnummer',
        'status' => 'Status',

        // Dynamic variants
        'variants.*.name' => 'Variantenname',
        'variants.*.price' => 'Variantpreis',
        'variants.*.discount_price' => 'Variant-Rabattpreis',
        'variants.*.stock' => 'Variantbestand',
        'variants.*.SKU' => 'Variant-SKU',
        'variants.*.barcode' => 'Variant-Barcode',
        'variants.*.weight' => 'Variantgewicht',
        'variants.*.dimensions' => 'Variantabmessungen',
        'variants.*.language_code' => 'Variant-Sprachcode',
        'variants.*.size_id' => 'Variantgröße',
        'variants.*.color_id' => 'Variantfarbe',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Name (Englisch)',
        'translations.en.description' => 'Beschreibung (Englisch)',
        'translations.en.image' => 'Bild (Englisch)',
        'languages.en.title' => 'Banner-Titel (Englisch)',
        'languages.en.description' => 'Banner-Beschreibung (Englisch)',
        'languages.en.image' => 'Banner-Bild (Englisch)',

        // Arabic
        'translations.ar.name' => 'Name (Arabisch)',
        'translations.ar.description' => 'Beschreibung (Arabisch)',
        'translations.ar.image' => 'Bild (Arabisch)',
        'languages.ar.title' => 'Banner-Titel (Arabisch)',
        'languages.ar.description' => 'Banner-Beschreibung (Arabisch)',
        'languages.ar.image' => 'Banner-Bild (Arabisch)',

        // German
        'translations.de.name' => 'Name (Deutsch)',
        'translations.de.description' => 'Beschreibung (Deutsch)',
        'translations.de.image' => 'Bild (Deutsch)',
        'languages.de.title' => 'Banner-Titel (Deutsch)',
        'languages.de.description' => 'Banner-Beschreibung (Deutsch)',
        'languages.de.image' => 'Banner-Bild (Deutsch)',

        // Spanish
        'translations.es.name' => 'Name (Spanisch)',
        'translations.es.description' => 'Beschreibung (Spanisch)',
        'translations.es.image' => 'Bild (Spanisch)',
        'languages.es.title' => 'Banner-Titel (Spanisch)',
        'languages.es.description' => 'Banner-Beschreibung (Spanisch)',
        'languages.es.image' => 'Banner-Bild (Spanisch)',

        // Persian
        'translations.fa.name' => 'Name (Persisch)',
        'translations.fa.description' => 'Beschreibung (Persisch)',
        'translations.fa.image' => 'Bild (Persisch)',
        'languages.fa.title' => 'Banner-Titel (Persisch)',
        'languages.fa.description' => 'Banner-Beschreibung (Persisch)',
        'languages.fa.image' => 'Banner-Bild (Persisch)',

        // French
        'translations.fr.name' => 'Name (Französisch)',
        'translations.fr.description' => 'Beschreibung (Französisch)',
        'translations.fr.image' => 'Bild (Französisch)',
        'languages.fr.title' => 'Banner-Titel (Französisch)',
        'languages.fr.description' => 'Banner-Beschreibung (Französisch)',
        'languages.fr.image' => 'Banner-Bild (Französisch)',

        // Hindi
        'translations.hi.name' => 'Name (Hindi)',
        'translations.hi.description' => 'Beschreibung (Hindi)',
        'translations.hi.image' => 'Bild (Hindi)',
        'languages.hi.title' => 'Banner-Titel (Hindi)',
        'languages.hi.description' => 'Banner-Beschreibung (Hindi)',
        'languages.hi.image' => 'Banner-Bild (Hindi)',

        // Indonesian
        'translations.id.name' => 'Name (Indonesisch)',
        'translations.id.description' => 'Beschreibung (Indonesisch)',
        'translations.id.image' => 'Bild (Indonesisch)',
        'languages.id.title' => 'Banner-Titel (Indonesisch)',
        'languages.id.description' => 'Banner-Beschreibung (Indonesisch)',
        'languages.id.image' => 'Banner-Bild (Indonesisch)',

        // Italian
        'translations.it.name' => 'Name (Italienisch)',
        'translations.it.description' => 'Beschreibung (Italienisch)',
        'translations.it.image' => 'Bild (Italienisch)',
        'languages.it.title' => 'Banner-Titel (Italienisch)',
        'languages.it.description' => 'Banner-Beschreibung (Italienisch)',
        'languages.it.image' => 'Banner-Bild (Italienisch)',

        // Japanese
        'translations.ja.name' => 'Name (Japanisch)',
        'translations.ja.description' => 'Beschreibung (Japanisch)',
        'translations.ja.image' => 'Bild (Japanisch)',
        'languages.ja.title' => 'Banner-Titel (Japanisch)',
        'languages.ja.description' => 'Banner-Beschreibung (Japanisch)',
        'languages.ja.image' => 'Banner-Bild (Japanisch)',

        // Korean
        'translations.ko.name' => 'Name (Koreanisch)',
        'translations.ko.description' => 'Beschreibung (Koreanisch)',
        'translations.ko.image' => 'Bild (Koreanisch)',
        'languages.ko.title' => 'Banner-Titel (Koreanisch)',
        'languages.ko.description' => 'Banner-Beschreibung (Koreanisch)',
        'languages.ko.image' => 'Banner-Bild (Koreanisch)',

        // Dutch
        'translations.nl.name' => 'Name (Niederländisch)',
        'translations.nl.description' => 'Beschreibung (Niederländisch)',
        'translations.nl.image' => 'Bild (Niederländisch)',
        'languages.nl.title' => 'Banner-Titel (Niederländisch)',
        'languages.nl.description' => 'Banner-Beschreibung (Niederländisch)',
        'languages.nl.image' => 'Banner-Bild (Niederländisch)',

        // Polish
        'translations.pl.name' => 'Name (Polnisch)',
        'translations.pl.description' => 'Beschreibung (Polnisch)',
        'translations.pl.image' => 'Bild (Polnisch)',
        'languages.pl.title' => 'Banner-Titel (Polnisch)',
        'languages.pl.description' => 'Banner-Beschreibung (Polnisch)',
        'languages.pl.image' => 'Banner-Bild (Polnisch)',

        // Portuguese
        'translations.pt.name' => 'Name (Portugiesisch)',
        'translations.pt.description' => 'Beschreibung (Portugiesisch)',
        'translations.pt.image' => 'Bild (Portugiesisch)',
        'languages.pt.title' => 'Banner-Titel (Portugiesisch)',
        'languages.pt.description' => 'Banner-Beschreibung (Portugiesisch)',
        'languages.pt.image' => 'Banner-Bild (Portugiesisch)',

        // Russian
        'translations.ru.name' => 'Name (Russisch)',
        'translations.ru.description' => 'Beschreibung (Russisch)',
        'translations.ru.image' => 'Bild (Russisch)',
        'languages.ru.title' => 'Banner-Titel (Russisch)',
        'languages.ru.description' => 'Banner-Beschreibung (Russisch)',
        'languages.ru.image' => 'Banner-Bild (Russisch)',

        // Thai
        'translations.th.name' => 'Name (Thailändisch)',
        'translations.th.description' => 'Beschreibung (Thailändisch)',
        'translations.th.image' => 'Bild (Thailändisch)',
        'languages.th.title' => 'Banner-Titel (Thailändisch)',
        'languages.th.description' => 'Banner-Beschreibung (Thailändisch)',
        'languages.th.image' => 'Banner-Bild (Thailändisch)',

        // Turkish
        'translations.tr.name' => 'Name (Türkisch)',
        'translations.tr.description' => 'Beschreibung (Türkisch)',
        'translations.tr.image' => 'Bild (Türkisch)',
        'languages.tr.title' => 'Banner-Titel (Türkisch)',
        'languages.tr.description' => 'Banner-Beschreibung (Türkisch)',
        'languages.tr.image' => 'Banner-Bild (Türkisch)',

        // Vietnamese
        'translations.vi.name' => 'Name (Vietnamesisch)',
        'translations.vi.description' => 'Beschreibung (Vietnamesisch)',
        'translations.vi.image' => 'Bild (Vietnamesisch)',
        'languages.vi.title' => 'Banner-Titel (Vietnamesisch)',
        'languages.vi.description' => 'Banner-Beschreibung (Vietnamesisch)',
        'languages.vi.image' => 'Banner-Bild (Vietnamesisch)',

        // Chinese
        'translations.zh.name' => 'Name (Chinesisch)',
        'translations.zh.description' => 'Beschreibung (Chinesisch)',
        'translations.zh.image' => 'Bild (Chinesisch)',
        'languages.zh.title' => 'Banner-Titel (Chinesisch)',
        'languages.zh.description' => 'Banner-Beschreibung (Chinesisch)',
        'languages.zh.image' => 'Banner-Bild (Chinesisch)',
    ],
];
