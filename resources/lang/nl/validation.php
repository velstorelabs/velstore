<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Het veld :attribute is verplicht.',
    'string' => ':attribute moet een tekenreeks zijn.',
    'max' => ':attribute mag niet groter zijn dan :max tekens.',
    'min' => ':attribute moet minimaal :min tekens bevatten.',
    'image' => ':attribute moet een afbeelding zijn.',
    'mimes' => ':attribute moet een bestand zijn van het type: :values.',
    'array' => ':attribute moet een array zijn.',
    'numeric' => ':attribute moet een nummer zijn.',
    'integer' => ':attribute moet een geheel getal zijn.',
    'lte' => ':attribute moet kleiner dan of gelijk aan :value zijn.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Hier definiëren we alle aangepaste attribuutnamen.
    | Hierdoor worden de validatieberichten beter leesbaar.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Naam',
        'email' => 'E-mail',
        'password' => 'Wachtwoord',
        'password_confirmation' => 'Bevestig Wachtwoord',
        'phone' => 'Telefoonnummer',
        'status' => 'Status',

        // Dynamic variants
        'variants.*.name' => 'Variant Naam',
        'variants.*.price' => 'Variant Prijs',
        'variants.*.discount_price' => 'Variant Korting Prijs',
        'variants.*.stock' => 'Variant Voorraad',
        'variants.*.SKU' => 'Variant SKU',
        'variants.*.barcode' => 'Variant Barcode',
        'variants.*.weight' => 'Variant Gewicht',
        'variants.*.dimensions' => 'Variant Afmetingen',
        'variants.*.language_code' => 'Variant Taalcode',
        'variants.*.size_id' => 'Variant Maat',
        'variants.*.color_id' => 'Variant Kleur',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Naam (Engels)',
        'translations.en.description' => 'Beschrijving (Engels)',
        'translations.en.image' => 'Afbeelding (Engels)',
        'languages.en.title' => 'Banner Titel (Engels)',
        'languages.en.description' => 'Banner Beschrijving (Engels)',
        'languages.en.image' => 'Banner Afbeelding (Engels)',

        // Arabic
        'translations.ar.name' => 'Naam (Arabisch)',
        'translations.ar.description' => 'Beschrijving (Arabisch)',
        'translations.ar.image' => 'Afbeelding (Arabisch)',
        'languages.ar.title' => 'Banner Titel (Arabisch)',
        'languages.ar.description' => 'Banner Beschrijving (Arabisch)',
        'languages.ar.image' => 'Banner Afbeelding (Arabisch)',

        // German
        'translations.de.name' => 'Naam (Duits)',
        'translations.de.description' => 'Beschrijving (Duits)',
        'translations.de.image' => 'Afbeelding (Duits)',
        'languages.de.title' => 'Banner Titel (Duits)',
        'languages.de.description' => 'Banner Beschrijving (Duits)',
        'languages.de.image' => 'Banner Afbeelding (Duits)',

        // Spanish
        'translations.es.name' => 'Naam (Spaans)',
        'translations.es.description' => 'Beschrijving (Spaans)',
        'translations.es.image' => 'Afbeelding (Spaans)',
        'languages.es.title' => 'Banner Titel (Spaans)',
        'languages.es.description' => 'Banner Beschrijving (Spaans)',
        'languages.es.image' => 'Banner Afbeelding (Spaans)',

        // Persian
        'translations.fa.name' => 'Naam (Perzisch)',
        'translations.fa.description' => 'Beschrijving (Perzisch)',
        'translations.fa.image' => 'Afbeelding (Perzisch)',
        'languages.fa.title' => 'Banner Titel (Perzisch)',
        'languages.fa.description' => 'Banner Beschrijving (Perzisch)',
        'languages.fa.image' => 'Banner Afbeelding (Perzisch)',

        // French
        'translations.fr.name' => 'Naam (Frans)',
        'translations.fr.description' => 'Beschrijving (Frans)',
        'translations.fr.image' => 'Afbeelding (Frans)',
        'languages.fr.title' => 'Banner Titel (Frans)',
        'languages.fr.description' => 'Banner Beschrijving (Frans)',
        'languages.fr.image' => 'Banner Afbeelding (Frans)',

        // Hindi
        'translations.hi.name' => 'Naam (Hindi)',
        'translations.hi.description' => 'Beschrijving (Hindi)',
        'translations.hi.image' => 'Afbeelding (Hindi)',
        'languages.hi.title' => 'Banner Titel (Hindi)',
        'languages.hi.description' => 'Banner Beschrijving (Hindi)',
        'languages.hi.image' => 'Banner Afbeelding (Hindi)',

        // Indonesian
        'translations.id.name' => 'Naam (Indonesisch)',
        'translations.id.description' => 'Beschrijving (Indonesisch)',
        'translations.id.image' => 'Afbeelding (Indonesisch)',
        'languages.id.title' => 'Banner Titel (Indonesisch)',
        'languages.id.description' => 'Banner Beschrijving (Indonesisch)',
        'languages.id.image' => 'Banner Afbeelding (Indonesisch)',

        // Italian
        'translations.it.name' => 'Naam (Italiaans)',
        'translations.it.description' => 'Beschrijving (Italiaans)',
        'translations.it.image' => 'Afbeelding (Italiaans)',
        'languages.it.title' => 'Banner Titel (Italiaans)',
        'languages.it.description' => 'Banner Beschrijving (Italiaans)',
        'languages.it.image' => 'Banner Afbeelding (Italiaans)',

        // Japanese
        'translations.ja.name' => 'Naam (Japans)',
        'translations.ja.description' => 'Beschrijving (Japans)',
        'translations.ja.image' => 'Afbeelding (Japans)',
        'languages.ja.title' => 'Banner Titel (Japans)',
        'languages.ja.description' => 'Banner Beschrijving (Japans)',
        'languages.ja.image' => 'Banner Afbeelding (Japans)',

        // Korean
        'translations.ko.name' => 'Naam (Koreaans)',
        'translations.ko.description' => 'Beschrijving (Koreaans)',
        'translations.ko.image' => 'Afbeelding (Koreaans)',
        'languages.ko.title' => 'Banner Titel (Koreaans)',
        'languages.ko.description' => 'Banner Beschrijving (Koreaans)',
        'languages.ko.image' => 'Banner Afbeelding (Koreaans)',

        // Dutch
        'translations.nl.name' => 'Naam (Nederlands)',
        'translations.nl.description' => 'Beschrijving (Nederlands)',
        'translations.nl.image' => 'Afbeelding (Nederlands)',
        'languages.nl.title' => 'Banner Titel (Nederlands)',
        'languages.nl.description' => 'Banner Beschrijving (Nederlands)',
        'languages.nl.image' => 'Banner Afbeelding (Nederlands)',

        // Polish
        'translations.pl.name' => 'Naam (Pools)',
        'translations.pl.description' => 'Beschrijving (Pools)',
        'translations.pl.image' => 'Afbeelding (Pools)',
        'languages.pl.title' => 'Banner Titel (Pools)',
        'languages.pl.description' => 'Banner Beschrijving (Pools)',
        'languages.pl.image' => 'Banner Afbeelding (Pools)',

        // Portuguese
        'translations.pt.name' => 'Naam (Portugees)',
        'translations.pt.description' => 'Beschrijving (Portugees)',
        'translations.pt.image' => 'Afbeelding (Portugees)',
        'languages.pt.title' => 'Banner Titel (Portugees)',
        'languages.pt.description' => 'Banner Beschrijving (Portugees)',
        'languages.pt.image' => 'Banner Afbeelding (Portugees)',

        // Russian
        'translations.ru.name' => 'Naam (Russisch)',
        'translations.ru.description' => 'Beschrijving (Russisch)',
        'translations.ru.image' => 'Afbeelding (Russisch)',
        'languages.ru.title' => 'Banner Titel (Russisch)',
        'languages.ru.description' => 'Banner Beschrijving (Russisch)',
        'languages.ru.image' => 'Banner Afbeelding (Russisch)',

        // Thai
        'translations.th.name' => 'Naam (Thais)',
        'translations.th.description' => 'Beschrijving (Thais)',
        'translations.th.image' => 'Afbeelding (Thais)',
        'languages.th.title' => 'Banner Titel (Thais)',
        'languages.th.description' => 'Banner Beschrijving (Thais)',
        'languages.th.image' => 'Banner Afbeelding (Thais)',

        // Turkish
        'translations.tr.name' => 'Naam (Turks)',
        'translations.tr.description' => 'Beschrijving (Turks)',
        'translations.tr.image' => 'Afbeelding (Turks)',
        'languages.tr.title' => 'Banner Titel (Turks)',
        'languages.tr.description' => 'Banner Beschrijving (Turks)',
        'languages.tr.image' => 'Banner Afbeelding (Turks)',

        // Vietnamese
        'translations.vi.name' => 'Naam (Vietnamees)',
        'translations.vi.description' => 'Beschrijving (Vietnamees)',
        'translations.vi.image' => 'Afbeelding (Vietnamees)',
        'languages.vi.title' => 'Banner Titel (Vietnamees)',
        'languages.vi.description' => 'Banner Beschrijving (Vietnamees)',
        'languages.vi.image' => 'Banner Afbeelding (Vietnamees)',

        // Chinese
        'translations.zh.name' => 'Naam (Chinees)',
        'translations.zh.description' => 'Beschrijving (Chinees)',
        'translations.zh.image' => 'Afbeelding (Chinees)',
        'languages.zh.title' => 'Banner Titel (Chinees)',
        'languages.zh.description' => 'Banner Beschrijving (Chinees)',
        'languages.zh.image' => 'Banner Afbeelding (Chinees)',
    ],
];
