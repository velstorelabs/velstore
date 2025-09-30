<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linie językowe walidacji
    |--------------------------------------------------------------------------
    */

    'required' => 'Pole :attribute jest wymagane.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'max' => 'Pole :attribute nie może być dłuższe niż :max znaków.',
    'min' => 'Pole :attribute musi mieć co najmniej :min znaków.',
    'image' => 'Pole :attribute musi być obrazem.',
    'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
    'array' => 'Pole :attribute musi być tablicą.',
    'numeric' => 'Pole :attribute musi być liczbą.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'lte' => 'Pole :attribute musi być mniejsze lub równe :value.',

    /*
    |--------------------------------------------------------------------------
    | Niestandardowe atrybuty
    |--------------------------------------------------------------------------
    |
    | Tutaj definiujemy niestandardowe nazwy atrybutów dla wielu języków.
    | Dzięki temu komunikaty walidacyjne są bardziej czytelne.
    |
    */

    'attributes' => [

        // Tłumaczenia dla wszystkich obsługiwanych języków
        'translations.en.name' => 'Nazwa (angielski)',
        'translations.en.description' => 'Opis (angielski)',
        'translations.en.image' => 'Obraz (angielski)',

        'translations.ar.name' => 'Nazwa (arabski)',
        'translations.ar.description' => 'Opis (arabski)',
        'translations.ar.image' => 'Obraz (arabski)',

        'translations.de.name' => 'Nazwa (niemiecki)',
        'translations.de.description' => 'Opis (niemiecki)',
        'translations.de.image' => 'Obraz (niemiecki)',

        'translations.es.name' => 'Nazwa (hiszpański)',
        'translations.es.description' => 'Opis (hiszpański)',
        'translations.es.image' => 'Obraz (hiszpański)',

        'translations.fa.name' => 'Nazwa (perski)',
        'translations.fa.description' => 'Opis (perski)',
        'translations.fa.image' => 'Obraz (perski)',

        'translations.fr.name' => 'Nazwa (francuski)',
        'translations.fr.description' => 'Opis (francuski)',
        'translations.fr.image' => 'Obraz (francuski)',

        'translations.hi.name' => 'Nazwa (hindi)',
        'translations.hi.description' => 'Opis (hindi)',
        'translations.hi.image' => 'Obraz (hindi)',

        'translations.id.name' => 'Nazwa (indonezyjski)',
        'translations.id.description' => 'Opis (indonezyjski)',
        'translations.id.image' => 'Obraz (indonezyjski)',

        'translations.it.name' => 'Nazwa (włoski)',
        'translations.it.description' => 'Opis (włoski)',
        'translations.it.image' => 'Obraz (włoski)',

        'translations.ja.name' => 'Nazwa (japoński)',
        'translations.ja.description' => 'Opis (japoński)',
        'translations.ja.image' => 'Obraz (japoński)',

        'translations.ko.name' => 'Nazwa (koreański)',
        'translations.ko.description' => 'Opis (koreański)',
        'translations.ko.image' => 'Obraz (koreański)',

        'translations.nl.name' => 'Nazwa (niderlandzki)',
        'translations.nl.description' => 'Opis (niderlandzki)',
        'translations.nl.image' => 'Obraz (niderlandzki)',

        'translations.pl.name' => 'Nazwa (polski)',
        'translations.pl.description' => 'Opis (polski)',
        'translations.pl.image' => 'Obraz (polski)',

        'translations.pt.name' => 'Nazwa (portugalski)',
        'translations.pt.description' => 'Opis (portugalski)',
        'translations.pt.image' => 'Obraz (portugalski)',

        'translations.ru.name' => 'Nazwa (rosyjski)',
        'translations.ru.description' => 'Opis (rosyjski)',
        'translations.ru.image' => 'Obraz (rosyjski)',

        'translations.th.name' => 'Nazwa (tajski)',
        'translations.th.description' => 'Opis (tajski)',
        'translations.th.image' => 'Obraz (tajski)',

        'translations.tr.name' => 'Nazwa (turecki)',
        'translations.tr.description' => 'Opis (turecki)',
        'translations.tr.image' => 'Obraz (turecki)',

        'translations.vi.name' => 'Nazwa (wietnamski)',
        'translations.vi.description' => 'Opis (wietnamski)',
        'translations.vi.image' => 'Obraz (wietnamski)',

        'translations.zh.name' => 'Nazwa (chiński)',
        'translations.zh.description' => 'Opis (chiński)',
        'translations.zh.image' => 'Obraz (chiński)',

        // Dynamiczne warianty
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
    ],
];
