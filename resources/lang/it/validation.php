<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Il campo :attribute è obbligatorio.',
    'string' => ':attribute deve essere una stringa.',
    'max' => ':attribute non può essere maggiore di :max caratteri.',
    'min' => ':attribute deve contenere almeno :min caratteri.',
    'image' => ':attribute deve essere un\'immagine.',
    'mimes' => ':attribute deve essere un file di tipo: :values.',
    'array' => ':attribute deve essere un array.',
    'numeric' => ':attribute deve essere un numero.',
    'integer' => ':attribute deve essere un numero intero.',
    'lte' => ':attribute deve essere minore o uguale a :value.',
    'regex' => 'Il formato di :attribute non è valido.',
    'confirmed' => 'La conferma di :attribute non corrisponde.',
    'incorrect_current_password' => 'La password corrente non è corretta.',

    'password' => [
        'letters' => ':attribute deve contenere almeno una lettera.',
        'mixed' => ':attribute deve contenere sia lettere maiuscole che minuscole.',
        'numbers' => ':attribute deve contenere almeno un numero.',
        'symbols' => ':attribute deve contenere almeno un simbolo.',
        'uncompromised' => ':attribute è apparso in una violazione dei dati. Scegli un :attribute diverso.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'La conferma della password non corrisponde.',
            'min' => 'La password deve contenere almeno :min caratteri.',
            'symbols' => 'La password deve contenere almeno un simbolo.',
        ],
        'phone' => [
            'regex' => 'Il numero di telefono può contenere solo numeri, spazi, trattini e un segno + opzionale.',
        ],
        'email' => [
            'unique' => 'Questa email è già registrata.',
        ],
        'status' => [
            'in' => 'Lo stato selezionato non è valido.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Password Corrente',
        'profile_image' => 'Immagine del Profilo',

        // Vendor fields
        'name' => 'Nome',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Conferma Password',
        'phone' => 'Numero di Telefono',
        'status' => 'Stato',

        // Social links
        'type' => 'Tipo di Piattaforma',
        'platform' => 'Nome della Piattaforma',
        'link' => 'Link della Piattaforma',

        // Menu fields
        'title' => 'Titolo del Menu',
        'order_number' => 'Numero d\'ordine',

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
        'variants.*.size_id' => 'Dimensione Variante',
        'variants.*.color_id' => 'Colore Variante',

        // Attribute name
        'name' => 'Nome Attributo',

        // Attribute values
        'values.*' => 'Valore Attributo',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Valore Attributo $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Valore (Inglese)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Inglese) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Valore (Arabo)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Arabo) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Valore (Tedesco)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Tedesco) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Valore (Spagnolo)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Spagnolo) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Valore (Persiano)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Persiano) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Valore (Francese)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Francese) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Valore (Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Valore (Indonesiano)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Indonesiano) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Valore (Italiano)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Italiano) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Valore (Giapponese)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Giapponese) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Valore (Coreano)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Coreano) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Valore (Olandese)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Olandese) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Valore (Polacco)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Polacco) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Valore (Portoghese)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Portoghese) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Valore (Russo)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Russo) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Valore (Thailandese)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Thailandese) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Valore (Turco)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Turco) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Valore (Vietnamita)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Vietnamita) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Valore (Cinese)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Valore (Cinese) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nome (Inglese)',
        'translations.en.description' => 'Descrizione (Inglese)',
        'translations.en.image' => 'Immagine (Inglese)',
        'translations.en.title' => 'Titolo (Inglese)',
        'translations.en.content' => 'Contenuto (Inglese)',
        'languages.en.title' => 'Titolo Banner (Inglese)',
        'languages.en.description' => 'Descrizione Banner (Inglese)',
        'languages.en.image' => 'Immagine Banner (Inglese)',
        'languages.en.name' => 'Nome Piattaforma (Inglese)',
        'title.en' => 'Titolo (Inglese)',

        // Arabic
        'translations.ar.name' => 'Nome (Arabo)',
        'translations.ar.description' => 'Descrizione (Arabo)',
        'translations.ar.image' => 'Immagine (Arabo)',
        'translations.ar.title' => 'Titolo (Arabo)',
        'translations.ar.content' => 'Contenuto (Arabo)',
        'languages.ar.title' => 'Titolo Banner (Arabo)',
        'languages.ar.description' => 'Descrizione Banner (Arabo)',
        'languages.ar.image' => 'Immagine Banner (Arabo)',
        'languages.ar.name' => 'Nome Piattaforma (Arabo)',
        'title.ar' => 'Titolo (Arabo)',

        // German
        'translations.de.name' => 'Nome (Tedesco)',
        'translations.de.description' => 'Descrizione (Tedesco)',
        'translations.de.image' => 'Immagine (Tedesco)',
        'translations.de.title' => 'Titolo (Tedesco)',
        'translations.de.content' => 'Contenuto (Tedesco)',
        'languages.de.title' => 'Titolo Banner (Tedesco)',
        'languages.de.description' => 'Descrizione Banner (Tedesco)',
        'languages.de.image' => 'Immagine Banner (Tedesco)',
        'languages.de.name' => 'Nome Piattaforma (Tedesco)',
        'title.de' => 'Titolo (Tedesco)',

        // Spanish
        'translations.es.name' => 'Nome (Spagnolo)',
        'translations.es.description' => 'Descrizione (Spagnolo)',
        'translations.es.image' => 'Immagine (Spagnolo)',
        'translations.es.title' => 'Titolo (Spagnolo)',
        'translations.es.content' => 'Contenuto (Spagnolo)',
        'languages.es.title' => 'Titolo Banner (Spagnolo)',
        'languages.es.description' => 'Descrizione Banner (Spagnolo)',
        'languages.es.image' => 'Immagine Banner (Spagnolo)',
        'languages.es.name' => 'Nome Piattaforma (Spagnolo)',
        'title.es' => 'Titolo (Spagnolo)',

        // Persian
        'translations.fa.name' => 'Nome (Persiano)',
        'translations.fa.description' => 'Descrizione (Persiano)',
        'translations.fa.image' => 'Immagine (Persiano)',
        'translations.fa.title' => 'Titolo (Persiano)',
        'translations.fa.content' => 'Contenuto (Persiano)',
        'languages.fa.title' => 'Titolo Banner (Persiano)',
        'languages.fa.description' => 'Descrizione Banner (Persiano)',
        'languages.fa.image' => 'Immagine Banner (Persiano)',
        'languages.fa.name' => 'Nome Piattaforma (Persiano)',
        'title.fa' => 'Titolo (Persiano)',

        // French
        'translations.fr.name' => 'Nome (Francese)',
        'translations.fr.description' => 'Descrizione (Francese)',
        'translations.fr.image' => 'Immagine (Francese)',
        'translations.fr.title' => 'Titolo (Francese)',
        'translations.fr.content' => 'Contenuto (Francese)',
        'languages.fr.title' => 'Titolo Banner (Francese)',
        'languages.fr.description' => 'Descrizione Banner (Francese)',
        'languages.fr.image' => 'Immagine Banner (Francese)',
        'languages.fr.name' => 'Nome Piattaforma (Francese)',
        'title.fr' => 'Titolo (Francese)',

        // Hindi
        'translations.hi.name' => 'Nome (Hindi)',
        'translations.hi.description' => 'Descrizione (Hindi)',
        'translations.hi.image' => 'Immagine (Hindi)',
        'translations.hi.title' => 'Titolo (Hindi)',
        'translations.hi.content' => 'Contenuto (Hindi)',
        'languages.hi.title' => 'Titolo Banner (Hindi)',
        'languages.hi.description' => 'Descrizione Banner (Hindi)',
        'languages.hi.image' => 'Immagine Banner (Hindi)',
        'languages.hi.name' => 'Nome Piattaforma (Hindi)',
        'title.hi' => 'Titolo (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nome (Indonesiano)',
        'translations.id.description' => 'Descrizione (Indonesiano)',
        'translations.id.image' => 'Immagine (Indonesiano)',
        'translations.id.title' => 'Titolo (Indonesiano)',
        'translations.id.content' => 'Contenuto (Indonesiano)',
        'languages.id.title' => 'Titolo Banner (Indonesiano)',
        'languages.id.description' => 'Descrizione Banner (Indonesiano)',
        'languages.id.image' => 'Immagine Banner (Indonesiano)',
        'languages.id.name' => 'Nome Piattaforma (Indonesiano)',
        'title.id' => 'Titolo (Indonesiano)',

        // Italian
        'translations.it.name' => 'Nome (Italiano)',
        'translations.it.description' => 'Descrizione (Italiano)',
        'translations.it.image' => 'Immagine (Italiano)',
        'translations.it.title' => 'Titolo (Italiano)',
        'translations.it.content' => 'Contenuto (Italiano)',
        'languages.it.title' => 'Titolo Banner (Italiano)',
        'languages.it.description' => 'Descrizione Banner (Italiano)',
        'languages.it.image' => 'Immagine Banner (Italiano)',
        'languages.it.name' => 'Nome Piattaforma (Italiano)',
        'title.it' => 'Titolo (Italiano)',

        // Japanese
        'translations.ja.name' => 'Nome (Giapponese)',
        'translations.ja.description' => 'Descrizione (Giapponese)',
        'translations.ja.image' => 'Immagine (Giapponese)',
        'translations.ja.title' => 'Titolo (Giapponese)',
        'translations.ja.content' => 'Contenuto (Giapponese)',
        'languages.ja.title' => 'Titolo Banner (Giapponese)',
        'languages.ja.description' => 'Descrizione Banner (Giapponese)',
        'languages.ja.image' => 'Immagine Banner (Giapponese)',
        'languages.ja.name' => 'Nome Piattaforma (Giapponese)',
        'title.ja' => 'Titolo (Giapponese)',

        // Korean
        'translations.ko.name' => 'Nome (Coreano)',
        'translations.ko.description' => 'Descrizione (Coreano)',
        'translations.ko.image' => 'Immagine (Coreano)',
        'translations.ko.title' => 'Titolo (Coreano)',
        'translations.ko.content' => 'Contenuto (Coreano)',
        'languages.ko.title' => 'Titolo Banner (Coreano)',
        'languages.ko.description' => 'Descrizione Banner (Coreano)',
        'languages.ko.image' => 'Immagine Banner (Coreano)',
        'languages.ko.name' => 'Nome Piattaforma (Coreano)',
        'title.ko' => 'Titolo (Coreano)',

        // Dutch
        'translations.nl.name' => 'Nome (Olandese)',
        'translations.nl.description' => 'Descrizione (Olandese)',
        'translations.nl.image' => 'Immagine (Olandese)',
        'translations.nl.title' => 'Titolo (Olandese)',
        'translations.nl.content' => 'Contenuto (Olandese)',
        'languages.nl.title' => 'Titolo Banner (Olandese)',
        'languages.nl.description' => 'Descrizione Banner (Olandese)',
        'languages.nl.image' => 'Immagine Banner (Olandese)',
        'languages.nl.name' => 'Nome Piattaforma (Olandese)',
        'title.nl' => 'Titolo (Olandese)',

        // Polish
        'translations.pl.name' => 'Nome (Polacco)',
        'translations.pl.description' => 'Descrizione (Polacco)',
        'translations.pl.image' => 'Immagine (Polacco)',
        'translations.pl.title' => 'Titolo (Polacco)',
        'translations.pl.content' => 'Contenuto (Polacco)',
        'languages.pl.title' => 'Titolo Banner (Polacco)',
        'languages.pl.description' => 'Descrizione Banner (Polacco)',
        'languages.pl.image' => 'Immagine Banner (Polacco)',
        'languages.Pl.name' => 'Nome Piattaforma (Polacco)',
        'title.pl' => 'Titolo (Polacco)',

        // Portuguese
        'translations.pt.name' => 'Nome (Portoghese)',
        'translations.pt.description' => 'Descrizione (Portoghese)',
        'translations.pt.image' => 'Immagine (Portoghese)',
        'translations.pt.title' => 'Titolo (Portoghese)',
        'translations.pt.content' => 'Contenuto (Portoghese)',
        'languages.pt.title' => 'Titolo Banner (Portoghese)',
        'languages.pt.description' => 'Descrizione Banner (Portoghese)',
        'languages.pt.image' => 'Immagine Banner (Portoghese)',
        'languages.pt.name' => 'Nome Piattaforma (Portoghese)',
        'title.pt' => 'Titolo (Portoghese)',

        // Russian
        'translations.ru.name' => 'Nome (Russo)',
        'translations.ru.description' => 'Descrizione (Russo)',
        'translations.ru.image' => 'Immagine (Russo)',
        'translations.ru.title' => 'Titolo (Russo)',
        'translations.ru.content' => 'Contenuto (Russo)',
        'languages.ru.title' => 'Titolo Banner (Russo)',
        'languages.ru.description' => 'Descrizione Banner (Russo)',
        'languages.ru.image' => 'Immagine Banner (Russo)',
        'languages.ru.name' => 'Nome Piattaforma (Russo)',
        'title.ru' => 'Titolo (Russo)',

        // Thai
        'translations.th.name' => 'Nome (Thailandese)',
        'translations.th.description' => 'Descrizione (Thailandese)',
        'translations.th.image' => 'Immagine (Thailandese)',
        'translations.th.title' => 'Titolo (Thailandese)',
        'translations.th.content' => 'Contenuto (Thailandese)',
        'languages.th.title' => 'Titolo Banner (Thailandese)',
        'languages.th.description' => 'Descrizione Banner (Thailandese)',
        'languages.th.image' => 'Immagine Banner (Thailandese)',
        'languages.th.name' => 'Nome Piattaforma (Thailandese)',
        'title.th' => 'Titolo (Thailandese)',

        // Turkish
        'translations.tr.name' => 'Nome (Turco)',
        'translations.tr.description' => 'Descrizione (Turco)',
        'translations.tr.image' => 'Immagine (Turco)',
        'translations.tr.title' => 'Titolo (Turco)',
        'translations.tr.content' => 'Contenuto (Turco)',
        'languages.tr.title' => 'Titolo Banner (Turco)',
        'languages.tr.description' => 'Descrizione Banner (Turco)',
        'languages.tr.image' => 'Immagine Banner (Turco)',
        'languages.tr.name' => 'Nome Piattaforma (Turco)',
        'title.tr' => 'Titolo (Turco)',

        // Vietnamese
        'translations.vi.name' => 'Nome (Vietnamita)',
        'translations.vi.description' => 'Descrizione (Vietnamita)',
        'translations.vi.image' => 'Immagine (Vietnamita)',
        'translations.vi.title' => 'Titolo (Vietnamita)',
        'translations.vi.content' => 'Contenuto (Vietnamita)',
        'languages.vi.title' => 'Titolo Banner (Vietnamita)',
        'languages.vi.description' => 'Descrizione Banner (Vietnamita)',
        'languages.vi.image' => 'Immagine Banner (Vietnamita)',
        'languages.vi.name' => 'Nome Piattaforma (Vietnamita)',
        'title.vi' => 'Titolo (Vietnamita)',

        // Chinese
        'translations.zh.name' => 'Nome (Cinese)',
        'translations.zh.description' => 'Descrizione (Cinese)',
        'translations.zh.image' => 'Immagine (Cinese)',
        'translations.zh.title' => 'Titolo (Cinese)',
        'translations.zh.content' => 'Contenuto (Cinese)',
        'languages.zh.title' => 'Titolo Banner (Cinese)',
        'languages.zh.description' => 'Descrizione Banner (Cinese)',
        'languages.zh.image' => 'Immagine Banner (Cinese)',
        'languages.zh.name' => 'Nome Piattaforma (Cinese)',
        'title.zh' => 'Titolo (Cinese)',
    ],
];
