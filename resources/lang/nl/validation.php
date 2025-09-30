<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validatie Taalregels
    |--------------------------------------------------------------------------
    */

    'required' => 'Het veld :attribute is verplicht.',
    'string' => 'Het veld :attribute moet een tekenreeks zijn.',
    'max' => 'Het veld :attribute mag niet groter zijn dan :max tekens.',
    'min' => 'Het veld :attribute moet minimaal :min tekens bevatten.',
    'image' => 'Het veld :attribute moet een afbeelding zijn.',
    'mimes' => 'Het veld :attribute moet een bestand van het type: :values zijn.',
    'array' => 'Het veld :attribute moet een array zijn.',
    'numeric' => 'Het veld :attribute moet een getal zijn.',
    'integer' => 'Het veld :attribute moet een geheel getal zijn.',
    'lte' => 'Het veld :attribute moet kleiner dan of gelijk aan :value zijn.',

    /*
    |--------------------------------------------------------------------------
    | Aangepaste Attributen
    |--------------------------------------------------------------------------
    |
    | Hier definiëren we aangepaste attribuutnamen voor meerdere talen.
    | Op deze manier zijn validatieberichten beter leesbaar.
    |
    */

    'attributes' => [

        // Vertalingen voor alle ondersteunde talen
        'translations.en.name' => 'Naam (Engels)',
        'translations.en.description' => 'Beschrijving (Engels)',
        'translations.en.image' => 'Afbeelding (Engels)',

        'translations.ar.name' => 'Naam (Arabisch)',
        'translations.ar.description' => 'Beschrijving (Arabisch)',
        'translations.ar.image' => 'Afbeelding (Arabisch)',

        'translations.de.name' => 'Naam (Duits)',
        'translations.de.description' => 'Beschrijving (Duits)',
        'translations.de.image' => 'Afbeelding (Duits)',

        'translations.es.name' => 'Naam (Spaans)',
        'translations.es.description' => 'Beschrijving (Spaans)',
        'translations.es.image' => 'Afbeelding (Spaans)',

        'translations.fa.name' => 'Naam (Perzisch)',
        'translations.fa.description' => 'Beschrijving (Perzisch)',
        'translations.fa.image' => 'Afbeelding (Perzisch)',

        'translations.fr.name' => 'Naam (Frans)',
        'translations.fr.description' => 'Beschrijving (Frans)',
        'translations.fr.image' => 'Afbeelding (Frans)',

        'translations.hi.name' => 'Naam (Hindi)',
        'translations.hi.description' => 'Beschrijving (Hindi)',
        'translations.hi.image' => 'Afbeelding (Hindi)',

        'translations.id.name' => 'Naam (Indonesisch)',
        'translations.id.description' => 'Beschrijving (Indonesisch)',
        'translations.id.image' => 'Afbeelding (Indonesisch)',

        'translations.it.name' => 'Naam (Italiaans)',
        'translations.it.description' => 'Beschrijving (Italiaans)',
        'translations.it.image' => 'Afbeelding (Italiaans)',

        'translations.ja.name' => 'Naam (Japans)',
        'translations.ja.description' => 'Beschrijving (Japans)',
        'translations.ja.image' => 'Afbeelding (Japans)',

        'translations.ko.name' => 'Naam (Koreaans)',
        'translations.ko.description' => 'Beschrijving (Koreaans)',
        'translations.ko.image' => 'Afbeelding (Koreaans)',

        'translations.nl.name' => 'Naam (Nederlands)',
        'translations.nl.description' => 'Beschrijving (Nederlands)',
        'translations.nl.image' => 'Afbeelding (Nederlands)',

        'translations.pl.name' => 'Naam (Pools)',
        'translations.pl.description' => 'Beschrijving (Pools)',
        'translations.pl.image' => 'Afbeelding (Pools)',

        'translations.pt.name' => 'Naam (Portugees)',
        'translations.pt.description' => 'Beschrijving (Portugees)',
        'translations.pt.image' => 'Afbeelding (Portugees)',

        'translations.ru.name' => 'Naam (Russisch)',
        'translations.ru.description' => 'Beschrijving (Russisch)',
        'translations.ru.image' => 'Afbeelding (Russisch)',

        'translations.th.name' => 'Naam (Thais)',
        'translations.th.description' => 'Beschrijving (Thais)',
        'translations.th.image' => 'Afbeelding (Thais)',

        'translations.tr.name' => 'Naam (Turks)',
        'translations.tr.description' => 'Beschrijving (Turks)',
        'translations.tr.image' => 'Afbeelding (Turks)',

        'translations.vi.name' => 'Naam (Vietnamees)',
        'translations.vi.description' => 'Beschrijving (Vietnamees)',
        'translations.vi.image' => 'Afbeelding (Vietnamees)',

        'translations.zh.name' => 'Naam (Chinees)',
        'translations.zh.description' => 'Beschrijving (Chinees)',
        'translations.zh.image' => 'Afbeelding (Chinees)',

        // Dynamische varianten
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
    ],
];
