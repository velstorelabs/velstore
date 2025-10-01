<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Pole :attribute jest wymagane.',
    'string' => ':attribute musi być ciągiem znaków.',
    'max' => ':attribute nie może być dłuższe niż :max znaków.',
    'min' => ':attribute musi mieć co najmniej :min znaków.',
    'image' => ':attribute musi być obrazem.',
    'mimes' => ':attribute musi być plikiem typu: :values.',
    'array' => ':attribute musi być tablicą.',
    'numeric' => ':attribute musi być liczbą.',
    'integer' => ':attribute musi być liczbą całkowitą.',
    'lte' => ':attribute musi być mniejsze lub równe :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Tutaj definiujemy niestandardowe nazwy atrybutów.
    | Dzięki temu komunikaty walidacyjne są bardziej czytelne.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nazwa',
        'email' => 'E-mail',
        'password' => 'Hasło',
        'password_confirmation' => 'Potwierdzenie hasła',
        'phone' => 'Numer telefonu',
        'status' => 'Status',

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
        'languages.en.title' => 'Tytuł banera (Angielski)',
        'languages.en.description' => 'Opis banera (Angielski)',
        'languages.en.image' => 'Obraz banera (Angielski)',

        // Arabic
        'translations.ar.name' => 'Nazwa (Arabski)',
        'translations.ar.description' => 'Opis (Arabski)',
        'translations.ar.image' => 'Obraz (Arabski)',
        'languages.ar.title' => 'Tytuł banera (Arabski)',
        'languages.ar.description' => 'Opis banera (Arabski)',
        'languages.ar.image' => 'Obraz banera (Arabski)',

        // German
        'translations.de.name' => 'Nazwa (Niemiecki)',
        'translations.de.description' => 'Opis (Niemiecki)',
        'translations.de.image' => 'Obraz (Niemiecki)',
        'languages.de.title' => 'Tytuł banera (Niemiecki)',
        'languages.de.description' => 'Opis banera (Niemiecki)',
        'languages.de.image' => 'Obraz banera (Niemiecki)',

        // Spanish
        'translations.es.name' => 'Nazwa (Hiszpański)',
        'translations.es.description' => 'Opis (Hiszpański)',
        'translations.es.image' => 'Obraz (Hiszpański)',
        'languages.es.title' => 'Tytuł banera (Hiszpański)',
        'languages.es.description' => 'Opis banera (Hiszpański)',
        'languages.es.image' => 'Obraz banera (Hiszpański)',

        // Persian
        'translations.fa.name' => 'Nazwa (Perski)',
        'translations.fa.description' => 'Opis (Perski)',
        'translations.fa.image' => 'Obraz (Perski)',
        'languages.fa.title' => 'Tytuł banera (Perski)',
        'languages.fa.description' => 'Opis banera (Perski)',
        'languages.fa.image' => 'Obraz banera (Perski)',

        // French
        'translations.fr.name' => 'Nazwa (Francuski)',
        'translations.fr.description' => 'Opis (Francuski)',
        'translations.fr.image' => 'Obraz (Francuski)',
        'languages.fr.title' => 'Tytuł banera (Francuski)',
        'languages.fr.description' => 'Opis banera (Francuski)',
        'languages.fr.image' => 'Obraz banera (Francuski)',

        // Hindi
        'translations.hi.name' => 'Nazwa (Hindi)',
        'translations.hi.description' => 'Opis (Hindi)',
        'translations.hi.image' => 'Obraz (Hindi)',
        'languages.hi.title' => 'Tytuł banera (Hindi)',
        'languages.hi.description' => 'Opis banera (Hindi)',
        'languages.hi.image' => 'Obraz banera (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nazwa (Indonezyjski)',
        'translations.id.description' => 'Opis (Indonezyjski)',
        'translations.id.image' => 'Obraz (Indonezyjski)',
        'languages.id.title' => 'Tytuł banera (Indonezyjski)',
        'languages.id.description' => 'Opis banera (Indonezyjski)',
        'languages.id.image' => 'Obraz banera (Indonezyjski)',

        // Italian
        'translations.it.name' => 'Nazwa (Włoski)',
        'translations.it.description' => 'Opis (Włoski)',
        'translations.it.image' => 'Obraz (Włoski)',
        'languages.it.title' => 'Tytuł banera (Włoski)',
        'languages.it.description' => 'Opis banera (Włoski)',
        'languages.it.image' => 'Obraz banera (Włoski)',

        // Japanese
        'translations.ja.name' => 'Nazwa (Japoński)',
        'translations.ja.description' => 'Opis (Japoński)',
        'translations.ja.image' => 'Obraz (Japoński)',
        'languages.ja.title' => 'Tytuł banera (Japoński)',
        'languages.ja.description' => 'Opis banera (Japoński)',
        'languages.ja.image' => 'Obraz banera (Japoński)',

        // Korean
        'translations.ko.name' => 'Nazwa (Koreański)',
        'translations.ko.description' => 'Opis (Koreański)',
        'translations.ko.image' => 'Obraz (Koreański)',
        'languages.ko.title' => 'Tytuł banera (Koreański)',
        'languages.ko.description' => 'Opis banera (Koreański)',
        'languages.ko.image' => 'Obraz banera (Koreański)',

        // Dutch
        'translations.nl.name' => 'Nazwa (Niderlandzki)',
        'translations.nl.description' => 'Opis (Niderlandzki)',
        'translations.nl.image' => 'Obraz (Niderlandzki)',
        'languages.nl.title' => 'Tytuł banera (Niderlandzki)',
        'languages.nl.description' => 'Opis banera (Niderlandzki)',
        'languages.nl.image' => 'Obraz banera (Niderlandzki)',

        // Polish
        'translations.pl.name' => 'Nazwa (Polski)',
        'translations.pl.description' => 'Opis (Polski)',
        'translations.pl.image' => 'Obraz (Polski)',
        'languages.pl.title' => 'Tytuł banera (Polski)',
        'languages.pl.description' => 'Opis banera (Polski)',
        'languages.pl.image' => 'Obraz banera (Polski)',

        // Portuguese
        'translations.pt.name' => 'Nazwa (Portugalski)',
        'translations.pt.description' => 'Opis (Portugalski)',
        'translations.pt.image' => 'Obraz (Portugalski)',
        'languages.pt.title' => 'Tytuł banera (Portugalski)',
        'languages.pt.description' => 'Opis banera (Portugalski)',
        'languages.pt.image' => 'Obraz banera (Portugalski)',

        // Russian
        'translations.ru.name' => 'Nazwa (Rosyjski)',
        'translations.ru.description' => 'Opis (Rosyjski)',
        'translations.ru.image' => 'Obraz (Rosyjski)',
        'languages.ru.title' => 'Tytuł banera (Rosyjski)',
        'languages.ru.description' => 'Opis banera (Rosyjski)',
        'languages.ru.image' => 'Obraz banera (Rosyjski)',

        // Thai
        'translations.th.name' => 'Nazwa (Tajski)',
        'translations.th.description' => 'Opis (Tajski)',
        'translations.th.image' => 'Obraz (Tajski)',
        'languages.th.title' => 'Tytuł banera (Tajski)',
        'languages.th.description' => 'Opis banera (Tajski)',
        'languages.th.image' => 'Obraz banera (Tajski)',

        // Turkish
        'translations.tr.name' => 'Nazwa (Turecki)',
        'translations.tr.description' => 'Opis (Turecki)',
        'translations.tr.image' => 'Obraz (Turecki)',
        'languages.tr.title' => 'Tytuł banera (Turecki)',
        'languages.tr.description' => 'Opis banera (Turecki)',
        'languages.tr.image' => 'Obraz banera (Turecki)',

        // Vietnamese
        'translations.vi.name' => 'Nazwa (Wietnamski)',
        'translations.vi.description' => 'Opis (Wietnamski)',
        'translations.vi.image' => 'Obraz (Wietnamski)',
        'languages.vi.title' => 'Tytuł banera (Wietnamski)',
        'languages.vi.description' => 'Opis banera (Wietnamski)',
        'languages.vi.image' => 'Obraz banera (Wietnamski)',

        // Chinese
        'translations.zh.name' => 'Nazwa (Chiński)',
        'translations.zh.description' => 'Opis (Chiński)',
        'translations.zh.image' => 'Obraz (Chiński)',
        'languages.zh.title' => 'Tytuł banera (Chiński)',
        'languages.zh.description' => 'Opis banera (Chiński)',
        'languages.zh.image' => 'Obraz banera (Chiński)',
    ],
];
