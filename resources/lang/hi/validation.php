<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute फ़ील्ड अनिवार्य है।',
    'string' => ':attribute एक स्ट्रिंग होनी चाहिए।',
    'max' => ':attribute :max अक्षरों से अधिक नहीं हो सकता।',
    'min' => ':attribute में कम से कम :min अक्षर होने चाहिए।',
    'image' => ':attribute एक छवि होनी चाहिए।',
    'mimes' => ':attribute प्रकार का फ़ाइल होना चाहिए: :values।',
    'array' => ':attribute एक एरे होना चाहिए।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'lte' => ':attribute :value से कम या बराबर होना चाहिए।',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | यहाँ सभी एट्रिब्यूट्स के लिए कस्टम नाम दिए गए हैं।
    | इस तरह, वैलिडेशन मैसेज अधिक पठनीय होंगे।
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'नाम',
        'email' => 'ईमेल',
        'password' => 'पासवर्ड',
        'password_confirmation' => 'पासवर्ड पुष्टि',
        'phone' => 'फोन नंबर',
        'status' => 'स्थिति',

        // Dynamic variants
        'variants.*.name' => 'वैरिएंट नाम',
        'variants.*.price' => 'वैरिएंट कीमत',
        'variants.*.discount_price' => 'वैरिएंट छूट कीमत',
        'variants.*.stock' => 'वैरिएंट स्टॉक',
        'variants.*.SKU' => 'वैरिएंट SKU',
        'variants.*.barcode' => 'वैरिएंट बारकोड',
        'variants.*.weight' => 'वैरिएंट वजन',
        'variants.*.dimensions' => 'वैरिएंट आयाम',
        'variants.*.language_code' => 'वैरिएंट भाषा कोड',
        'variants.*.size_id' => 'वैरिएंट आकार',
        'variants.*.color_id' => 'वैरिएंट रंग',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'नाम (अंग्रेज़ी)',
        'translations.en.description' => 'विवरण (अंग्रेज़ी)',
        'translations.en.image' => 'छवि (अंग्रेज़ी)',
        'languages.en.title' => 'बैनर शीर्षक (अंग्रेज़ी)',
        'languages.en.description' => 'बैनर विवरण (अंग्रेज़ी)',
        'languages.en.image' => 'बैनर छवि (अंग्रेज़ी)',

        // Arabic
        'translations.ar.name' => 'नाम (अरबी)',
        'translations.ar.description' => 'विवरण (अरबी)',
        'translations.ar.image' => 'छवि (अरबी)',
        'languages.ar.title' => 'बैनर शीर्षक (अरबी)',
        'languages.ar.description' => 'बैनर विवरण (अरबी)',
        'languages.ar.image' => 'बैनर छवि (अरबी)',

        // German
        'translations.de.name' => 'नाम (जर्मन)',
        'translations.de.description' => 'विवरण (जर्मन)',
        'translations.de.image' => 'छवि (जर्मन)',
        'languages.de.title' => 'बैनर शीर्षक (जर्मन)',
        'languages.de.description' => 'बैनर विवरण (जर्मन)',
        'languages.de.image' => 'बैनर छवि (जर्मन)',

        // Spanish
        'translations.es.name' => 'नाम (स्पेनिश)',
        'translations.es.description' => 'विवरण (स्पेनिश)',
        'translations.es.image' => 'छवि (स्पेनिश)',
        'languages.es.title' => 'बैनर शीर्षक (स्पेनिश)',
        'languages.es.description' => 'बैनर विवरण (स्पेनिश)',
        'languages.es.image' => 'बैनर छवि (स्पेनिश)',

        // Persian
        'translations.fa.name' => 'नाम (फ़ारसी)',
        'translations.fa.description' => 'विवरण (फ़ारसी)',
        'translations.fa.image' => 'छवि (फ़ारसी)',
        'languages.fa.title' => 'बैनर शीर्षक (फ़ारसी)',
        'languages.fa.description' => 'बैनर विवरण (फ़ारसी)',
        'languages.fa.image' => 'बैनर छवि (फ़ारसी)',

        // French
        'translations.fr.name' => 'नाम (फ़्रेंच)',
        'translations.fr.description' => 'विवरण (फ़्रेंच)',
        'translations.fr.image' => 'छवि (फ़्रेंच)',
        'languages.fr.title' => 'बैनर शीर्षक (फ़्रेंच)',
        'languages.fr.description' => 'बैनर विवरण (फ़्रेंच)',
        'languages.fr.image' => 'बैनर छवि (फ़्रेंच)',

        // Hindi
        'translations.hi.name' => 'नाम (हिंदी)',
        'translations.hi.description' => 'विवरण (हिंदी)',
        'translations.hi.image' => 'छवि (हिंदी)',
        'languages.hi.title' => 'बैनर शीर्षक (हिंदी)',
        'languages.hi.description' => 'बैनर विवरण (हिंदी)',
        'languages.hi.image' => 'बैनर छवि (हिंदी)',

        // Indonesian
        'translations.id.name' => 'नाम (इंडोनेशियाई)',
        'translations.id.description' => 'विवरण (इंडोनेशियाई)',
        'translations.id.image' => 'छवि (इंडोनेशियाई)',
        'languages.id.title' => 'बैनर शीर्षक (इंडोनेशियाई)',
        'languages.id.description' => 'बैनर विवरण (इंडोनेशियाई)',
        'languages.id.image' => 'बैनर छवि (इंडोनेशियाई)',

        // Italian
        'translations.it.name' => 'नाम (इटालियन)',
        'translations.it.description' => 'विवरण (इटालियन)',
        'translations.it.image' => 'छवि (इटालियन)',
        'languages.it.title' => 'बैनर शीर्षक (इटालियन)',
        'languages.it.description' => 'बैनर विवरण (इटालियन)',
        'languages.it.image' => 'बैनर छवि (इटालियन)',

        // Japanese
        'translations.ja.name' => 'नाम (जापानी)',
        'translations.ja.description' => 'विवरण (जापानी)',
        'translations.ja.image' => 'छवि (जापानी)',
        'languages.ja.title' => 'बैनर शीर्षक (जापानी)',
        'languages.ja.description' => 'बैनर विवरण (जापानी)',
        'languages.ja.image' => 'बैनर छवि (जापानी)',

        // Korean
        'translations.ko.name' => 'नाम (कोरियाई)',
        'translations.ko.description' => 'विवरण (कोरियाई)',
        'translations.ko.image' => 'छवि (कोरियाई)',
        'languages.ko.title' => 'बैनर शीर्षक (कोरियाई)',
        'languages.ko.description' => 'बैनर विवरण (कोरियाई)',
        'languages.ko.image' => 'बैनर छवि (कोरियाई)',

        // Dutch
        'translations.nl.name' => 'नाम (डच)',
        'translations.nl.description' => 'विवरण (डच)',
        'translations.nl.image' => 'छवि (डच)',
        'languages.nl.title' => 'बैनर शीर्षक (डच)',
        'languages.nl.description' => 'बैनर विवरण (डच)',
        'languages.nl.image' => 'बैनर छवि (डच)',

        // Polish
        'translations.pl.name' => 'नाम (पोलिश)',
        'translations.pl.description' => 'विवरण (पोलिश)',
        'translations.pl.image' => 'छवि (पोलिश)',
        'languages.pl.title' => 'बैनर शीर्षक (पोलिश)',
        'languages.pl.description' => 'बैनर विवरण (पोलिश)',
        'languages.pl.image' => 'बैनर छवि (पोलिश)',

        // Portuguese
        'translations.pt.name' => 'नाम (पुर्तगाली)',
        'translations.pt.description' => 'विवरण (पुर्तगाली)',
        'translations.pt.image' => 'छवि (पुर्तगाली)',
        'languages.pt.title' => 'बैनर शीर्षक (पुर्तगाली)',
        'languages.pt.description' => 'बैनर विवरण (पुर्तगाली)',
        'languages.pt.image' => 'बैनर छवि (पुर्तगाली)',

        // Russian
        'translations.ru.name' => 'नाम (रूसी)',
        'translations.ru.description' => 'विवरण (रूसी)',
        'translations.ru.image' => 'छवि (रूसी)',
        'languages.ru.title' => 'बैनर शीर्षक (रूसी)',
        'languages.ru.description' => 'बैनर विवरण (रूसी)',
        'languages.ru.image' => 'बैनर छवि (रूसी)',

        // Thai
        'translations.th.name' => 'नाम (थाई)',
        'translations.th.description' => 'विवरण (थाई)',
        'translations.th.image' => 'छवि (थाई)',
        'languages.th.title' => 'बैनर शीर्षक (थाई)',
        'languages.th.description' => 'बैनर विवरण (थाई)',
        'languages.th.image' => 'बैनर छवि (थाई)',

        // Turkish
        'translations.tr.name' => 'नाम (तुर्की)',
        'translations.tr.description' => 'विवरण (तुर्की)',
        'translations.tr.image' => 'छवि (तुर्की)',
        'languages.tr.title' => 'बैनर शीर्षक (तुर्की)',
        'languages.tr.description' => 'बैनर विवरण (तुर्की)',
        'languages.tr.image' => 'बैनर छवि (तुर्की)',

        // Vietnamese
        'translations.vi.name' => 'नाम (वियतनामी)',
        'translations.vi.description' => 'विवरण (वियतनामी)',
        'translations.vi.image' => 'छवि (वियतनामी)',
        'languages.vi.title' => 'बैनर शीर्षक (वियतनामी)',
        'languages.vi.description' => 'बैनर विवरण (वियतनामी)',
        'languages.vi.image' => 'बैनर छवि (वियतनामी)',

        // Chinese
        'translations.zh.name' => 'नाम (चीनी)',
        'translations.zh.description' => 'विवरण (चीनी)',
        'translations.zh.image' => 'छवि (चीनी)',
        'languages.zh.title' => 'बैनर शीर्षक (चीनी)',
        'languages.zh.description' => 'बैनर विवरण (चीनी)',
        'languages.zh.image' => 'बैनर छवि (चीनी)',
    ],
];
