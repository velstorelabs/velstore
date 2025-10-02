<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Pole :attribute jest wymagane.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'max' => 'Pole :attribute nie może być większe niż :max znaków.',
    'min' => 'Pole :attribute musi mieć co najmniej :min znaków.',
    'image' => 'Pole :attribute musi być obrazem.',
    'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
    'array' => 'Pole :attribute musi być tablicą.',
    'numeric' => 'Pole :attribute musi być liczbą.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'lte' => 'Pole :attribute musi być mniejsze lub równe :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Here we define custom attribute names for multiple languages.
    | This way validation messages are more readable.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nazwa',
        'email' => 'Email',
        'password' => 'Hasło',
        'password_confirmation' => 'Potwierdzenie hasła',
        'phone' => 'Numer telefonu',
        'status' => 'Status',

        // Social links
        'type' => 'Typ platformy',
        'platform' => 'Nazwa platformy',
        'link' => 'Link do platformy',

        // Menu fields
        'title' => 'Tytuł menu',

        // Dynamic variants
        'variants.*.name' => 'Nazwa wariantu',
        'variants.*.price' => 'Cena wariantu',
        'variants.*.discount_price' => 'Cena promocyjna wariantu',
        'variants.*.stock' => 'Stan magazynowy wariantu',
        'variants.*.SKU' => 'SKU wariantu',
        'variants.*.barcode' => 'Kod kreskowy wariantu',
        'variants.*.weight' => 'Waga wariantu',
        'variants.*.dimensions' => 'Wymiary wariantu',
        'variants.*.language_code' => 'Kod języka wariantu',
        'variants.*.size_id' => 'Rozmiar wariantu',
        'variants.*.color_id' => 'Kolor wariantu',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nazwa (Angielski)',
        'translations.en.description' => 'Opis (Angielski)',
        'translations.en.image' => 'Obraz (Angielski)',
        'translations.en.title' => 'Tytuł (Angielski)',
        'translations.en.content' => 'Treść (Angielski)',
        'languages.en.title' => 'Tytuł banera (Angielski)',
        'languages.en.description' => 'Opis banera (Angielski)',
        'languages.en.image' => 'Obraz banera (Angielski)',
        'languages.en.name' => 'Nazwa platformy (Angielski)',
        'title.en' => 'Tytuł (Angielski)',

        // Arabic
        'translations.ar.name' => 'Nazwa (Arabski)',
        'translations.ar.description' => 'Opis (Arabski)',
        'translations.ar.image' => 'Obraz (Arabski)',
        'translations.ar.title' => 'Tytuł (Arabski)',
        'translations.ar.content' => 'Treść (Arabski)',
        'languages.ar.title' => 'Tytuł banera (Arabski)',
        'languages.ar.description' => 'Opis banera (Arabski)',
        'languages.ar.image' => 'Obraz banera (Arabski)',
        'languages.ar.name' => 'Nazwa platformy (Arabski)',
        'title.ar' => 'Tytuł (Arabski)',

        // German
        'translations.de.name' => 'Nazwa (Niemiecki)',
        'translations.de.description' => 'Opis (Niemiecki)',
        'translations.de.image' => 'Obraz (Niemiecki)',
        'translations.de.title' => 'Tytuł (Niemiecki)',
        'translations.de.content' => 'Treść (Niemiecki)',
        'languages.de.title' => 'Tytuł banera (Niemiecki)',
        'languages.de.description' => 'Opis banera (Niemiecki)',
        'languages.de.image' => 'Obraz banera (Niemiecki)',
        'languages.de.name' => 'Nazwa platformy (Niemiecki)',
        'title.de' => 'Tytuł (Niemiecki)',

        // Spanish
        'translations.es.name' => 'Nazwa (Hiszpański)',
        'translations.es.description' => 'Opis (Hiszpański)',
        'translations.es.image' => 'Obraz (Hiszpański)',
        'translations.es.title' => 'Tytuł (Hiszpański)',
        'translations.es.content' => 'Treść (Hiszpański)',
        'languages.es.title' => 'Tytuł banera (Hiszpański)',
        'languages.es.description' => 'Opis banera (Hiszpański)',
        'languages.es.image' => 'Obraz banera (Hiszpański)',
        'languages.es.name' => 'Nazwa platformy (Hiszpański)',
        'title.es' => 'Tytuł (Hiszpański)',

        // Persian
        'translations.fa.name' => 'Nazwa (Perski)',
        'translations.fa.description' => 'Opis (Perski)',
        'translations.fa.image' => 'Obraz (Perski)',
        'translations.fa.title' => 'Tytuł (Perski)',
        'translations.fa.content' => 'Treść (Perski)',
        'languages.fa.title' => 'Tytuł banera (Perski)',
        'languages.fa.description' => 'Opis banera (Perski)',
        'languages.fa.image' => 'Obraz banera (Perski)',
        'languages.fa.name' => 'Nazwa platformy (Perski)',
        'title.fa' => 'Tytuł (Perski)',

        // French
        'translations.fr.name' => 'Nazwa (Francuski)',
        'translations.fr.description' => 'Opis (Francuski)',
        'translations.fr.image' => 'Obraz (Francuski)',
        'translations.fr.title' => 'Tytuł (Francuski)',
        'translations.fr.content' => 'Treść (Francuski)',
        'languages.fr.title' => 'Tytuł banera (Francuski)',
        'languages.fr.description' => 'Opis banera (Francuski)',
        'languages.fr.image' => 'Obraz banera (Francuski)',
        'languages.fr.name' => 'Nazwa platformy (Francuski)',
        'title.fr' => 'Tytuł (Francuski)',

        // Hindi
        'translations.hi.name' => 'Nazwa (Hindi)',
        'translations.hi.description' => 'Opis (Hindi)',
        'translations.hi.image' => 'Obraz (Hindi)',
        'translations.hi.title' => 'Tytuł (Hindi)',
        'translations.hi.content' => 'Treść (Hindi)',
        'languages.hi.title' => 'Tytuł banera (Hindi)',
        'languages.hi.description' => 'Opis banera (Hindi)',
        'languages.hi.image' => 'Obraz banera (Hindi)',
        'languages.hi.name' => 'Nazwa platformy (Hindi)',
        'title.hi' => 'Tytuł (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nazwa (Indonezyjski)',
        'translations.id.description' => 'Opis (Indonezyjski)',
        'translations.id.image' => 'Obraz (Indonezyjski)',
        'translations.id.title' => 'Tytuł (Indonezyjski)',
        'translations.id.content' => 'Treść (Indonezyjski)',
        'languages.id.title' => 'Tytuł banera (Indonezyjski)',
        'languages.id.description' => 'Opis banera (Indonezyjski)',
        'languages.id.image' => 'Obraz banera (Indonezyjski)',
        'languages.id.name' => 'Nazwa platformy (Indonezyjski)',
        'title.id' => 'Tytuł (Indonezyjski)',

        // Italian
        'translations.it.name' => 'Nazwa (Włoski)',
        'translations.it.description' => 'Opis (Włoski)',
        'translations.it.image' => 'Obraz (Włoski)',
        'translations.it.title' => 'Tytuł (Włoski)',
        'translations.it.content' => 'Treść (Włoski)',
        'languages.it.title' => 'Tytuł banera (Włoski)',
        'languages.it.description' => 'Opis banera (Włoski)',
        'languages.it.image' => 'Obraz banera (Włoski)',
        'languages.it.name' => 'Nazwa platformy (Włoski)',
        'title.it' => 'Tytuł (Włoski)',

        // Japanese
        'translations.ja.name' => 'Nazwa (Japoński)',
        'translations.ja.description' => 'Opis (Japoński)',
        'translations.ja.image' => 'Obraz (Japoński)',
        'translations.ja.title' => 'Tytuł (Japoński)',
        'translations.ja.content' => 'Treść (Japoński)',
        'languages.ja.title' => 'Tytuł banera (Japoński)',
        'languages.ja.description' => 'Opis banera (Japoński)',
        'languages.ja.image' => 'Obraz banera (Japoński)',
        'languages.ja.name' => 'Nazwa platformy (Japoński)',
        'title.ja' => 'Tytuł (Japoński)',

        // Korean
        'translations.ko.name' => 'Nazwa (Koreański)',
        'translations.ko.description' => 'Opis (Koreański)',
        'translations.ko.image' => 'Obraz (Koreański)',
        'translations.ko.title' => 'Tytuł (Koreański)',
        'translations.ko.content' => 'Treść (Koreański)',
        'languages.ko.title' => 'Tytuł banera (Koreański)',
        'languages.ko.description' => 'Opis banera (Koreański)',
        'languages.ko.image' => 'Obraz banera (Koreański)',
        'languages.ko.name' => 'Nazwa platformy (Koreański)',
        'title.ko' => 'Tytuł (Koreański)',

        // Dutch
        'translations.nl.name' => 'Nazwa (Holenderski)',
        'translations.nl.description' => 'Opis (Holenderski)',
        'translations.nl.image' => 'Obraz (Holenderski)',
        'translations.nl.title' => 'Tytuł (Holenderski)',
        'translations.nl.content' => 'Treść (Holenderski)',
        'languages.nl.title' => 'Tytuł banera (Holenderski)',
        'languages.nl.description' => 'Opis banera (Holenderski)',
        'languages.nl.image' => 'Obraz banera (Holenderski)',
        'languages.nl.name' => 'Nazwa platformy (Holenderski)',
        'title.nl' => 'Tytuł (Holenderski)',

        // Polish
        'translations.pl.name' => 'Nazwa (Polski)',
        'translations.pl.description' => 'Opis (Polski)',
        'translations.pl.image' => 'Obraz (Polski)',
        'translations.pl.title' => 'Tytuł (Polski)',
        'translations.pl.content' => 'Treść (Polski)',
        'languages.pl.title' => 'Tytuł banera (Polski)',
        'languages.pl.description' => 'Opis banera (Polski)',
        'languages.pl.image' => 'Obraz banera (Polski)',
        'languages.pl.name' => 'Nazwa platformy (Polski)',
        'title.pl' => 'Tytuł (Polski)',

        // Portuguese
        'translations.pt.name' => 'Nazwa (Portugalski)',
        'translations.pt.description' => 'Opis (Portugalski)',
        'translations.pt.image' => 'Obraz (Portugalski)',
        'translations.pt.title' => 'Tytuł (Portugalski)',
        'translations.pt.content' => 'Treść (Portugalski)',
        'languages.pt.title' => 'Tytuł banera (Portugalski)',
        'languages.pt.description' => 'Opis banera (Portugalski)',
        'languages.pt.image' => 'Obraz banera (Portugalski)',
        'languages.pt.name' => 'Nazwa platformy (Portugalski)',
        'title.pt' => 'Tytuł (Portugalski)',

        // Russian
        'translations.ru.name' => 'Nazwa (Rosyjski)',
        'translations.ru.description' => 'Opis (Rosyjski)',
        'translations.ru.image' => 'Obraz (Rosyjski)',
        'translations.ru.title' => 'Tytuł (Rosyjski)',
        'translations.ru.content' => 'Treść (Rosyjski)',
        'languages.ru.title' => 'Tytuł banera (Rosyjski)',
        'languages.ru.description' => 'Opis banera (Rosyjski)',
        'languages.ru.image' => 'Obraz banera (Rosyjski)',
        'languages.ru.name' => 'Nazwa platformy (Rosyjski)',
        'title.ru' => 'Tytuł (Rosyjski)',

        // Thai
        'translations.th.name' => 'Nazwa (Tajski)',
        'translations.th.description' => 'Opis (Tajski)',
        'translations.th.image' => 'Obraz (Tajski)',
        'translations.th.title' => 'Tytuł (Tajski)',
        'translations.th.content' => 'Treść (Tajski)',
        'languages.th.title' => 'Tytuł banera (Tajski)',
        'languages.th.description' => 'Opis banera (Tajski)',
        'languages.th.image' => 'Obraz banera (Tajski)',
        'languages.th.name' => 'Nazwa platformy (Tajski)',
        'title.th' => 'Tytuł (Tajski)',

        // Turkish
        'translations.tr.name' => 'Nazwa (Turecki)',
        'translations.tr.description' => 'Opis (Turecki)',
        'translations.tr.image' => 'Obraz (Turecki)',
        'translations.tr.title' => 'Tytuł (Turecki)',
        'translations.tr.content' => 'Treść (Turecki)',
        'languages.tr.title' => 'Tytuł banera (Turecki)',
        'languages.tr.description' => 'Opis banera (Turecki)',
        'languages.tr.image' => 'Obraz banera (Turecki)',
        'languages.tr.name' => 'Nazwa platformy (Turecki)',
        'title.tr' => 'Tytuł (Turecki)',

        // Vietnamese
        'translations.vi.name' => 'Nazwa (Wietnamski)',
        'translations.vi.description' => 'Opis (Wietnamski)',
        'translations.vi.image' => 'Obraz (Wietnamski)',
        'translations.vi.title' => 'Tytuł (Wietnamski)',
        'translations.vi.content' => 'Treść (Wietnamski)',
        'languages.vi.title' => 'Tytuł banera (Wietnamski)',
        'languages.vi.description' => 'Opis banera (Wietnamski)',
        'languages.vi.image' => 'Obraz banera (Wietnamski)',
        'languages.vi.name' => 'Nazwa platformy (Wietnamski)',
        'title.vi' => 'Tytuł (Wietnamski)',

        // Chinese
        'translations.zh.name' => 'Nazwa (Chiński)',
        'translations.zh.description' => 'Opis (Chiński)',
        'translations.zh.image' => 'Obraz (Chiński)',
        'translations.zh.title' => 'Tytuł (Chiński)',
        'translations.zh.content' => 'Treść (Chiński)',
        'languages.zh.title' => 'Tytuł banera (Chiński)',
        'languages.zh.description' => 'Opis banera (Chiński)',
        'languages.zh.image' => 'Obraz banera (Chiński)',
        'languages.zh.name' => 'Nazwa platformy (Chiński)',
        'title.zh' => 'Tytuł (Chiński)',
    ],
];
