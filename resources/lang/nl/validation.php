<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Het :attribute veld is verplicht.',
    'string' => 'Het :attribute moet een tekenreeks zijn.',
    'max' => 'Het :attribute mag niet groter zijn dan :max tekens.',
    'min' => 'Het :attribute moet ten minste :min tekens bevatten.',
    'image' => 'Het :attribute moet een afbeelding zijn.',
    'mimes' => 'Het :attribute moet een bestand zijn van het type: :values.',
    'array' => 'Het :attribute moet een array zijn.',
    'numeric' => 'Het :attribute moet een getal zijn.',
    'integer' => 'Het :attribute moet een geheel getal zijn.',
    'lte' => 'Het :attribute moet kleiner dan of gelijk aan :value zijn.',
    'regex' => 'De indeling van :attribute is ongeldig.',
    'confirmed' => 'De bevestiging van :attribute komt niet overeen.',
    'incorrect_current_password' => 'Het huidige wachtwoord is onjuist.',

    'password' => [
        'letters' => ':attribute moet ten minste één letter bevatten.',
        'mixed' => ':attribute moet zowel hoofdletters als kleine letters bevatten.',
        'numbers' => ':attribute moet ten minste één cijfer bevatten.',
        'symbols' => ':attribute moet ten minste één symbool bevatten.',
        'uncompromised' => ':attribute is gevonden in een datalek. Kies een ander :attribute.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'Wachtwoordbevestiging komt niet overeen.',
            'min' => 'Het wachtwoord moet minimaal :min tekens lang zijn.',
            'symbols' => 'Het wachtwoord moet ten minste één symbool bevatten.',
        ],
        'phone' => [
            'regex' => 'Telefoonnummer mag alleen cijfers, spaties, streepjes en een optioneel + teken bevatten.',
        ],
        'email' => [
            'unique' => 'Dit e-mailadres is al geregistreerd.',
        ],
        'status' => [
            'in' => 'De geselecteerde status is ongeldig.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Huidig wachtwoord',
        'profile_image' => 'Profielfoto',

        // Vendor fields
        'name' => 'Naam',
        'email' => 'E-mail',
        'password' => 'Wachtwoord',
        'password_confirmation' => 'Wachtwoord bevestiging',
        'phone' => 'Telefoonnummer',
        'status' => 'Status',

        // Social links
        'type' => 'Platformtype',
        'platform' => 'Platformnaam',
        'link' => 'Platformlink',

        // Menu fields
        'title' => 'Menu Titel',
        'order_number' => 'Ordernummer',

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

        // Attribute name
        'name' => 'Attribuutnaam',

        // Attribute values
        'values.*' => 'Attribuutwaarde',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Attribuutwaarde $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Waarde (Engels)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Engels) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Waarde (Arabisch)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Arabisch) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Waarde (Duits)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Duits) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Waarde (Spaans)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Spaans) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Waarde (Perzisch)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Perzisch) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Waarde (Frans)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Frans) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Waarde (Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Waarde (Indonesisch)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Indonesisch) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Waarde (Italiaans)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Italiaans) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Waarde (Japans)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Japans) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Waarde (Koreaans)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Koreaans) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Waarde (Nederlands)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Nederlands) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Waarde (Pools)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Pools) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Waarde (Portugees)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Portugees) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Waarde (Russisch)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Russisch) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Waarde (Thais)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Thais) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Waarde (Turks)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Turks) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Waarde (Vietnamees)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Vietnamees) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Waarde (Chinees)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Waarde (Chinees) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Naam (Engels)',
        'translations.en.description' => 'Beschrijving (Engels)',
        'translations.en.image' => 'Afbeelding (Engels)',
        'translations.en.title' => 'Titel (Engels)',
        'translations.en.content' => 'Inhoud (Engels)',
        'languages.en.title' => 'Banner Titel (Engels)',
        'languages.en.description' => 'Banner Beschrijving (Engels)',
        'languages.en.image' => 'Banner Afbeelding (Engels)',
        'languages.en.name' => 'Platformnaam (Engels)',
        'title.en' => 'Titel (Engels)',

        // Arabic
        'translations.ar.name' => 'Naam (Arabisch)',
        'translations.ar.description' => 'Beschrijving (Arabisch)',
        'translations.ar.image' => 'Afbeelding (Arabisch)',
        'translations.ar.title' => 'Titel (Arabisch)',
        'translations.ar.content' => 'Inhoud (Arabisch)',
        'languages.ar.title' => 'Banner Titel (Arabisch)',
        'languages.ar.description' => 'Banner Beschrijving (Arabisch)',
        'languages.ar.image' => 'Banner Afbeelding (Arabisch)',
        'languages.ar.name' => 'Platformnaam (Arabisch)',
        'title.ar' => 'Titel (Arabisch)',

        // German
        'translations.de.name' => 'Naam (Duits)',
        'translations.de.description' => 'Beschrijving (Duits)',
        'translations.de.image' => 'Afbeelding (Duits)',
        'translations.de.title' => 'Titel (Duits)',
        'translations.de.content' => 'Inhoud (Duits)',
        'languages.de.title' => 'Banner Titel (Duits)',
        'languages.de.description' => 'Banner Beschrijving (Duits)',
        'languages.de.image' => 'Banner Afbeelding (Duits)',
        'languages.de.name' => 'Platformnaam (Duits)',
        'title.de' => 'Titel (Duits)',

        // Spanish
        'translations.es.name' => 'Naam (Spaans)',
        'translations.es.description' => 'Beschrijving (Spaans)',
        'translations.es.image' => 'Afbeelding (Spaans)',
        'translations.es.title' => 'Titel (Spaans)',
        'translations.es.content' => 'Inhoud (Spaans)',
        'languages.es.title' => 'Banner Titel (Spaans)',
        'languages.es.description' => 'Banner Beschrijving (Spaans)',
        'languages.es.image' => 'Banner Afbeelding (Spaans)',
        'languages.es.name' => 'Platformnaam (Spaans)',
        'title.es' => 'Titel (Spaans)',

        // Persian
        'translations.fa.name' => 'Naam (Perzisch)',
        'translations.fa.description' => 'Beschrijving (Perzisch)',
        'translations.fa.image' => 'Afbeelding (Perzisch)',
        'translations.fa.title' => 'Titel (Perzisch)',
        'translations.fa.content' => 'Inhoud (Perzisch)',
        'languages.fa.title' => 'Banner Titel (Perzisch)',
        'languages.fa.description' => 'Banner Beschrijving (Perzisch)',
        'languages.fa.image' => 'Banner Afbeelding (Perzisch)',
        'languages.fa.name' => 'Platformnaam (Perzisch)',
        'title.fa' => 'Titel (Perzisch)',

        // French
        'translations.fr.name' => 'Naam (Frans)',
        'translations.fr.description' => 'Beschrijving (Frans)',
        'translations.fr.image' => 'Afbeelding (Frans)',
        'translations.fr.title' => 'Titel (Frans)',
        'translations.fr.content' => 'Inhoud (Frans)',
        'languages.fr.title' => 'Banner Titel (Frans)',
        'languages.fr.description' => 'Banner Beschrijving (Frans)',
        'languages.fr.image' => 'Banner Afbeelding (Frans)',
        'languages.fr.name' => 'Platformnaam (Frans)',
        'title.fr' => 'Titel (Frans)',

        // Hindi
        'translations.hi.name' => 'Naam (Hindi)',
        'translations.hi.description' => 'Beschrijving (Hindi)',
        'translations.hi.image' => 'Afbeelding (Hindi)',
        'translations.hi.title' => 'Titel (Hindi)',
        'translations.hi.content' => 'Inhoud (Hindi)',
        'languages.hi.title' => 'Banner Titel (Hindi)',
        'languages.hi.description' => 'Banner Beschrijving (Hindi)',
        'languages.hi.image' => 'Banner Afbeelding (Hindi)',
        'languages.hi.name' => 'Platformnaam (Hindi)',
        'title.hi' => 'Titel (Hindi)',

        // Indonesian
        'translations.id.name' => 'Naam (Indonesisch)',
        'translations.id.description' => 'Beschrijving (Indonesisch)',
        'translations.id.image' => 'Afbeelding (Indonesisch)',
        'translations.id.title' => 'Titel (Indonesisch)',
        'translations.id.content' => 'Inhoud (Indonesisch)',
        'languages.id.title' => 'Banner Titel (Indonesisch)',
        'languages.id.description' => 'Banner Beschrijving (Indonesisch)',
        'languages.id.image' => 'Banner Afbeelding (Indonesisch)',
        'languages.id.name' => 'Platformnaam (Indonesisch)',
        'title.id' => 'Titel (Indonesisch)',

        // Italian
        'translations.it.name' => 'Naam (Italiaans)',
        'translations.it.description' => 'Beschrijving (Italiaans)',
        'translations.it.image' => 'Afbeelding (Italiaans)',
        'translations.it.title' => 'Titel (Italiaans)',
        'translations.it.content' => 'Inhoud (Italiaans)',
        'languages.it.title' => 'Banner Titel (Italiaans)',
        'languages.it.description' => 'Banner Beschrijving (Italiaans)',
        'languages.it.image' => 'Banner Afbeelding (Italiaans)',
        'languages.it.name' => 'Platformnaam (Italiaans)',
        'title.it' => 'Titel (Italiaans)',

        // Japanese
        'translations.ja.name' => 'Naam (Japans)',
        'translations.ja.description' => 'Beschrijving (Japans)',
        'translations.ja.image' => 'Afbeelding (Japans)',
        'translations.ja.title' => 'Titel (Japans)',
        'translations.ja.content' => 'Inhoud (Japans)',
        'languages.ja.title' => 'Banner Titel (Japans)',
        'languages.ja.description' => 'Banner Beschrijving (Japans)',
        'languages.ja.image' => 'Banner Afbeelding (Japans)',
        'languages.ja.name' => 'Platformnaam (Japans)',
        'title.ja' => 'Titel (Japans)',

        // Korean
        'translations.ko.name' => 'Naam (Koreaans)',
        'translations.ko.description' => 'Beschrijving (Koreaans)',
        'translations.ko.image' => 'Afbeelding (Koreaans)',
        'translations.ko.title' => 'Titel (Koreaans)',
        'translations.ko.content' => 'Inhoud (Koreaans)',
        'languages.ko.title' => 'Banner Titel (Koreaans)',
        'languages.ko.description' => 'Banner Beschrijving (Koreaans)',
        'languages.ko.image' => 'Banner Afbeelding (Koreaans)',
        'languages.ko.name' => 'Platformnaam (Koreaans)',
        'title.ko' => 'Titel (Koreaans)',

        // Dutch
        'translations.nl.name' => 'Naam (Nederlands)',
        'translations.nl.description' => 'Beschrijving (Nederlands)',
        'translations.nl.image' => 'Afbeelding (Nederlands)',
        'translations.nl.title' => 'Titel (Nederlands)',
        'translations.nl.content' => 'Inhoud (Nederlands)',
        'languages.nl.title' => 'Banner Titel (Nederlands)',
        'languages.nl.description' => 'Banner Beschrijving (Nederlands)',
        'languages.nl.image' => 'Banner Afbeelding (Nederlands)',
        'languages.nl.name' => 'Platformnaam (Nederlands)',
        'title.nl' => 'Titel (Nederlands)',

        // Polish
        'translations.pl.name' => 'Naam (Pools)',
        'translations.pl.description' => 'Beschrijving (Pools)',
        'translations.pl.image' => 'Afbeelding (Pools)',
        'translations.pl.title' => 'Titel (Pools)',
        'translations.pl.content' => 'Inhoud (Pools)',
        'languages.pl.title' => 'Banner Titel (Pools)',
        'languages.pl.description' => 'Banner Beschrijving (Pools)',
        'languages.pl.image' => 'Banner Afbeelding (Pools)',
        'languages.pl.name' => 'Platformnaam (Pools)',
        'title.pl' => 'Titel (Pools)',

        // Portuguese
        'translations.pt.name' => 'Naam (Portugees)',
        'translations.pt.description' => 'Beschrijving (Portugees)',
        'translations.pt.image' => 'Afbeelding (Portugees)',
        'translations.pt.title' => 'Titel (Portugees)',
        'translations.pt.content' => 'Inhoud (Portugees)',
        'languages.pt.title' => 'Banner Titel (Portugees)',
        'languages.pt.description' => 'Banner Beschrijving (Portugees)',
        'languages.pt.image' => 'Banner Afbeelding (Portugees)',
        'languages.pt.name' => 'Platformnaam (Portugees)',
        'title.pt' => 'Titel (Portugees)',

        // Russian
        'translations.ru.name' => 'Naam (Russisch)',
        'translations.ru.description' => 'Beschrijving (Russisch)',
        'translations.ru.image' => 'Afbeelding (Russisch)',
        'translations.ru.title' => 'Titel (Russisch)',
        'translations.ru.content' => 'Inhoud (Russisch)',
        'languages.ru.title' => 'Banner Titel (Russisch)',
        'languages.ru.description' => 'Banner Beschrijving (Russisch)',
        'languages.ru.image' => 'Banner Afbeelding (Russisch)',
        'languages.ru.name' => 'Platformnaam (Russisch)',
        'title.ru' => 'Titel (Russisch)',

        // Thai
        'translations.th.name' => 'Naam (Thais)',
        'translations.th.description' => 'Beschrijving (Thais)',
        'translations.th.image' => 'Afbeelding (Thais)',
        'translations.th.title' => 'Titel (Thais)',
        'translations.th.content' => 'Inhoud (Thais)',
        'languages.th.title' => 'Banner Titel (Thais)',
        'languages.th.description' => 'Banner Beschrijving (Thais)',
        'languages.th.image' => 'Banner Afbeelding (Thais)',
        'languages.th.name' => 'Platformnaam (Thais)',
        'title.th' => 'Titel (Thais)',

        // Turkish
        'translations.tr.name' => 'Naam (Turks)',
        'translations.tr.description' => 'Beschrijving (Turks)',
        'translations.tr.image' => 'Afbeelding (Turks)',
        'translations.tr.title' => 'Titel (Turks)',
        'translations.tr.content' => 'Inhoud (Turks)',
        'languages.tr.title' => 'Banner Titel (Turks)',
        'languages.tr.description' => 'Banner Beschrijving (Turks)',
        'languages.tr.image' => 'Banner Afbeelding (Turks)',
        'languages.tr.name' => 'Platformnaam (Turks)',
        'title.tr' => 'Titel (Turks)',

        // Vietnamese
        'translations.vi.name' => 'Naam (Vietnamees)',
        'translations.vi.description' => 'Beschrijving (Vietnamees)',
        'translations.vi.image' => 'Afbeelding (Vietnamees)',
        'translations.vi.title' => 'Titel (Vietnamees)',
        'translations.vi.content' => 'Inhoud (Vietnamees)',
        'languages.vi.title' => 'Banner Titel (Vietnamees)',
        'languages.vi.description' => 'Banner Beschrijving (Vietnamees)',
        'languages.vi.image' => 'Banner Afbeelding (Vietnamees)',
        'languages.vi.name' => 'Platformnaam (Vietnamees)',
        'title.vi' => 'Titel (Vietnamees)',

        // Chinese
        'translations.zh.name' => 'Naam (Chinees)',
        'translations.zh.description' => 'Beschrijving (Chinees)',
        'translations.zh.image' => 'Afbeelding (Chinees)',
        'translations.zh.title' => 'Titel (Chinees)',
        'translations.zh.content' => 'Inhoud (Chinees)',
        'languages.zh.title' => 'Banner Titel (Chinees)',
        'languages.zh.description' => 'Banner Beschrijving (Chinees)',
        'languages.zh.image' => 'Banner Afbeelding (Chinees)',
        'languages.zh.name' => 'Platformnaam (Chinees)',
        'title.zh' => 'Titel (Chinees)',
    ],
];
