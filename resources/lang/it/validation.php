<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Il campo :attribute è obbligatorio.',
    'string' => ':attribute deve essere una stringa.',
    'max' => ':attribute non può superare :max caratteri.',
    'min' => ':attribute deve avere almeno :min caratteri.',
    'image' => ':attribute deve essere un\'immagine.',
    'mimes' => ':attribute deve essere un file di tipo: :values.',
    'array' => ':attribute deve essere un array.',
    'numeric' => ':attribute deve essere un numero.',
    'integer' => ':attribute deve essere un numero intero.',
    'lte' => ':attribute deve essere minore o uguale a :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Qui definiamo nomi personalizzati per gli attributi.
    | In questo modo i messaggi di validazione sono più leggibili.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nome',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Conferma Password',
        'phone' => 'Numero di Telefono',
        'status' => 'Stato',

        // Dynamic variants
        'variants.*.name' => 'Nome Variante',
        'variants.*.price' => 'Prezzo Variante',
        'variants.*.discount_price' => 'Prezzo Scontato Variante',
        'variants.*.stock' => 'Stock Variante',
        'variants.*.SKU' => 'SKU Variante',
        'variants.*.barcode' => 'Codice a Barre Variante',
        'variants.*.weight' => 'Peso Variante',
        'variants.*.dimensions' => 'Dimensioni Variante',
        'variants.*.language_code' => 'Codice Lingua Variante',
        'variants.*.size_id' => 'Taglia Variante',
        'variants.*.color_id' => 'Colore Variante',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nome (Inglese)',
        'translations.en.description' => 'Descrizione (Inglese)',
        'translations.en.image' => 'Immagine (Inglese)',
        'languages.en.title' => 'Titolo Banner (Inglese)',
        'languages.en.description' => 'Descrizione Banner (Inglese)',
        'languages.en.image' => 'Immagine Banner (Inglese)',

        // Arabic
        'translations.ar.name' => 'Nome (Arabo)',
        'translations.ar.description' => 'Descrizione (Arabo)',
        'translations.ar.image' => 'Immagine (Arabo)',
        'languages.ar.title' => 'Titolo Banner (Arabo)',
        'languages.ar.description' => 'Descrizione Banner (Arabo)',
        'languages.ar.image' => 'Immagine Banner (Arabo)',

        // German
        'translations.de.name' => 'Nome (Tedesco)',
        'translations.de.description' => 'Descrizione (Tedesco)',
        'translations.de.image' => 'Immagine (Tedesco)',
        'languages.de.title' => 'Titolo Banner (Tedesco)',
        'languages.de.description' => 'Descrizione Banner (Tedesco)',
        'languages.de.image' => 'Immagine Banner (Tedesco)',

        // Spanish
        'translations.es.name' => 'Nome (Spagnolo)',
        'translations.es.description' => 'Descrizione (Spagnolo)',
        'translations.es.image' => 'Immagine (Spagnolo)',
        'languages.es.title' => 'Titolo Banner (Spagnolo)',
        'languages.es.description' => 'Descrizione Banner (Spagnolo)',
        'languages.es.image' => 'Immagine Banner (Spagnolo)',

        // Persian
        'translations.fa.name' => 'Nome (Persiano)',
        'translations.fa.description' => 'Descrizione (Persiano)',
        'translations.fa.image' => 'Immagine (Persiano)',
        'languages.fa.title' => 'Titolo Banner (Persiano)',
        'languages.fa.description' => 'Descrizione Banner (Persiano)',
        'languages.fa.image' => 'Immagine Banner (Persiano)',

        // French
        'translations.fr.name' => 'Nome (Francese)',
        'translations.fr.description' => 'Descrizione (Francese)',
        'translations.fr.image' => 'Immagine (Francese)',
        'languages.fr.title' => 'Titolo Banner (Francese)',
        'languages.fr.description' => 'Descrizione Banner (Francese)',
        'languages.fr.image' => 'Immagine Banner (Francese)',

        // Hindi
        'translations.hi.name' => 'Nome (Hindi)',
        'translations.hi.description' => 'Descrizione (Hindi)',
        'translations.hi.image' => 'Immagine (Hindi)',
        'languages.hi.title' => 'Titolo Banner (Hindi)',
        'languages.hi.description' => 'Descrizione Banner (Hindi)',
        'languages.hi.image' => 'Immagine Banner (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nome (Indonesiano)',
        'translations.id.description' => 'Descrizione (Indonesiano)',
        'translations.id.image' => 'Immagine (Indonesiano)',
        'languages.id.title' => 'Titolo Banner (Indonesiano)',
        'languages.id.description' => 'Descrizione Banner (Indonesiano)',
        'languages.id.image' => 'Immagine Banner (Indonesiano)',

        // Italian
        'translations.it.name' => 'Nome (Italiano)',
        'translations.it.description' => 'Descrizione (Italiano)',
        'translations.it.image' => 'Immagine (Italiano)',
        'languages.it.title' => 'Titolo Banner (Italiano)',
        'languages.it.description' => 'Descrizione Banner (Italiano)',
        'languages.it.image' => 'Immagine Banner (Italiano)',

        // Japanese
        'translations.ja.name' => 'Nome (Giapponese)',
        'translations.ja.description' => 'Descrizione (Giapponese)',
        'translations.ja.image' => 'Immagine (Giapponese)',
        'languages.ja.title' => 'Titolo Banner (Giapponese)',
        'languages.ja.description' => 'Descrizione Banner (Giapponese)',
        'languages.ja.image' => 'Immagine Banner (Giapponese)',

        // Korean
        'translations.ko.name' => 'Nome (Coreano)',
        'translations.ko.description' => 'Descrizione (Coreano)',
        'translations.ko.image' => 'Immagine (Coreano)',
        'languages.ko.title' => 'Titolo Banner (Coreano)',
        'languages.ko.description' => 'Descrizione Banner (Coreano)',
        'languages.ko.image' => 'Immagine Banner (Coreano)',

        // Dutch
        'translations.nl.name' => 'Nome (Olandese)',
        'translations.nl.description' => 'Descrizione (Olandese)',
        'translations.nl.image' => 'Immagine (Olandese)',
        'languages.nl.title' => 'Titolo Banner (Olandese)',
        'languages.nl.description' => 'Descrizione Banner (Olandese)',
        'languages.nl.image' => 'Immagine Banner (Olandese)',

        // Polish
        'translations.pl.name' => 'Nome (Polacco)',
        'translations.pl.description' => 'Descrizione (Polacco)',
        'translations.pl.image' => 'Immagine (Polacco)',
        'languages.pl.title' => 'Titolo Banner (Polacco)',
        'languages.pl.description' => 'Descrizione Banner (Polacco)',
        'languages.pl.image' => 'Immagine Banner (Polacco)',

        // Portuguese
        'translations.pt.name' => 'Nome (Portoghese)',
        'translations.pt.description' => 'Descrizione (Portoghese)',
        'translations.pt.image' => 'Immagine (Portoghese)',
        'languages.pt.title' => 'Titolo Banner (Portoghese)',
        'languages.pt.description' => 'Descrizione Banner (Portoghese)',
        'languages.pt.image' => 'Immagine Banner (Portoghese)',

        // Russian
        'translations.ru.name' => 'Nome (Russo)',
        'translations.ru.description' => 'Descrizione (Russo)',
        'translations.ru.image' => 'Immagine (Russo)',
        'languages.ru.title' => 'Titolo Banner (Russo)',
        'languages.ru.description' => 'Descrizione Banner (Russo)',
        'languages.ru.image' => 'Immagine Banner (Russo)',

        // Thai
        'translations.th.name' => 'Nome (Thailandese)',
        'translations.th.description' => 'Descrizione (Thailandese)',
        'translations.th.image' => 'Immagine (Thailandese)',
        'languages.th.title' => 'Titolo Banner (Thailandese)',
        'languages.th.description' => 'Descrizione Banner (Thailandese)',
        'languages.th.image' => 'Immagine Banner (Thailandese)',

        // Turkish
        'translations.tr.name' => 'Nome (Turco)',
        'translations.tr.description' => 'Descrizione (Turco)',
        'translations.tr.image' => 'Immagine (Turco)',
        'languages.tr.title' => 'Titolo Banner (Turco)',
        'languages.tr.description' => 'Descrizione Banner (Turco)',
        'languages.tr.image' => 'Immagine Banner (Turco)',

        // Vietnamese
        'translations.vi.name' => 'Nome (Vietnamita)',
        'translations.vi.description' => 'Descrizione (Vietnamita)',
        'translations.vi.image' => 'Immagine (Vietnamita)',
        'languages.vi.title' => 'Titolo Banner (Vietnamita)',
        'languages.vi.description' => 'Descrizione Banner (Vietnamita)',
        'languages.vi.image' => 'Immagine Banner (Vietnamita)',

        // Chinese
        'translations.zh.name' => 'Nome (Cinese)',
        'translations.zh.description' => 'Descrizione (Cinese)',
        'translations.zh.image' => 'Immagine (Cinese)',
        'languages.zh.title' => 'Titolo Banner (Cinese)',
        'languages.zh.description' => 'Descrizione Banner (Cinese)',
        'languages.zh.image' => 'Immagine Banner (Cinese)',
    ],
];
