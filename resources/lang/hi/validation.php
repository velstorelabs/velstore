<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute फ़ील्ड आवश्यक है।',
    'string' => ':attribute एक स्ट्रिंग होना चाहिए।',
    'max' => ':attribute :max अक्षरों से अधिक नहीं हो सकता।',
    'min' => ':attribute कम से कम :min अक्षरों का होना चाहिए।',
    'image' => ':attribute एक छवि होनी चाहिए।',
    'mimes' => ':attribute प्रकार की फ़ाइल होनी चाहिए: :values।',
    'array' => ':attribute एक एरे होना चाहिए।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'lte' => ':attribute :value के बराबर या उससे कम होना चाहिए।',
    'regex' => ':attribute का प्रारूप अमान्य है।',
    'confirmed' => ':attribute की पुष्टि मेल नहीं खाती।',
    'incorrect_current_password' => 'वर्तमान पासवर्ड गलत है।',

    'password' => [
        'letters' => ':attribute में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute में बड़े और छोटे दोनों अक्षर होने चाहिए।',
        'numbers' => ':attribute में कम से कम एक संख्या होनी चाहिए।',
        'symbols' => ':attribute में कम से कम एक प्रतीक होना चाहिए।',
        'uncompromised' => ':attribute डेटा लीक में पाया गया है। कृपया एक अलग :attribute चुनें।',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'पासवर्ड की पुष्टि मेल नहीं खाती।',
            'min' => 'पासवर्ड कम से कम :min अक्षरों का होना चाहिए।',
            'symbols' => 'पासवर्ड में कम से कम एक प्रतीक होना चाहिए।',
        ],
        'phone' => [
            'regex' => 'फोन नंबर में केवल अंक, रिक्त स्थान, डैश और वैकल्पिक + चिन्ह हो सकता है।',
        ],
        'email' => [
            'unique' => 'यह ईमेल पहले से पंजीकृत है।',
        ],
        'status' => [
            'in' => 'चयनित स्थिति अमान्य है।',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'वर्तमान पासवर्ड',
        'profile_image' => 'प्रोफ़ाइल छवि',

        // Vendor fields
        'name' => 'नाम',
        'email' => 'ईमेल',
        'password' => 'पासवर्ड',
        'password_confirmation' => 'पासवर्ड पुष्टि',
        'phone' => 'फोन नंबर',
        'status' => 'स्थिति',

        // Social links
        'type' => 'प्लेटफ़ॉर्म प्रकार',
        'platform' => 'प्लेटफ़ॉर्म नाम',
        'link' => 'प्लेटफ़ॉर्म लिंक',

        // Menu fields
        'title' => 'मेनू शीर्षक',
        'order_number' => 'ऑर्डर नंबर',

        // Dynamic variants
        'variants.*.name' => 'वेरिएंट नाम',
        'variants.*.price' => 'वेरिएंट मूल्य',
        'variants.*.discount_price' => 'वेरिएंट छूट मूल्य',
        'variants.*.stock' => 'वेरिएंट स्टॉक',
        'variants.*.SKU' => 'वेरिएंट SKU',
        'variants.*.barcode' => 'वेरिएंट बारकोड',
        'variants.*.weight' => 'वेरिएंट वजन',
        'variants.*.dimensions' => 'वेरिएंट आयाम',
        'variants.*.language_code' => 'वेरिएंट भाषा कोड',
        'variants.*.size_id' => 'वेरिएंट आकार',
        'variants.*.color_id' => 'वेरिएंट रंग',

        // Attribute name
        'name' => 'विशेषता का नाम',

        // Attribute values
        'values.*' => 'विशेषता का मान',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "विशेषता का मान $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'मान (अंग्रेज़ी)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "मान (अंग्रेज़ी) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'मान (अरबी)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "मान (अरबी) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'मान (जर्मन)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "मान (जर्मन) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'मान (स्पेनिश)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "मान (स्पेनिश) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'मान (फारसी)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "मान (फारसी) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'मान (फ्रेंच)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "मान (फ्रेंच) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'मान (हिंदी)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "मान (हिंदी) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'मान (इंडोनेशियाई)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "मान (इंडोनेशियाई) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'मान (इतालवी)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "मान (इतालवी) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'मान (जापानी)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "मान (जापानी) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'मान (कोरियाई)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "मान (कोरियाई) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'मान (डच)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "मान (डच) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'मान (पोलिश)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "मान (पोलिश) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'मान (पुर्तगाली)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "मान (पुर्तगाली) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'मान (रूसी)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "मान (रूसी) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'मान (थाई)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "मान (थाई) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'मान (तुर्की)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "मान (तुर्की) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'मान (वियतनामी)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "मान (वियतनामी) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'मान (चीनी)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "मान (चीनी) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'नाम (अंग्रेज़ी)',
        'translations.en.description' => 'विवरण (अंग्रेज़ी)',
        'translations.en.image' => 'छवि (अंग्रेज़ी)',
        'translations.en.title' => 'शीर्षक (अंग्रेज़ी)',
        'translations.en.content' => 'सामग्री (अंग्रेज़ी)',
        'languages.en.title' => 'बैनर शीर्षक (अंग्रेज़ी)',
        'languages.en.description' => 'बैनर विवरण (अंग्रेज़ी)',
        'languages.en.image' => 'बैनर छवि (अंग्रेज़ी)',
        'languages.en.name' => 'प्लेटफ़ॉर्म नाम (अंग्रेज़ी)',
        'title.en' => 'शीर्षक (अंग्रेज़ी)',

        // Arabic
        'translations.ar.name' => 'नाम (अरबी)',
        'translations.ar.description' => 'विवरण (अरबी)',
        'translations.ar.image' => 'छवि (अरबी)',
        'translations.ar.title' => 'शीर्षक (अरबी)',
        'translations.ar.content' => 'सामग्री (अरबी)',
        'languages.ar.title' => 'बैनर शीर्षक (अरबी)',
        'languages.ar.description' => 'बैनर विवरण (अरबी)',
        'languages.ar.image' => 'बैनर छवि (अरबी)',
        'languages.ar.name' => 'प्लेटफ़ॉर्म नाम (अरबी)',
        'title.ar' => 'शीर्षक (अरबी)',

        // German
        'translations.de.name' => 'नाम (जर्मन)',
        'translations.de.description' => 'विवरण (जर्मन)',
        'translations.de.image' => 'छवि (जर्मन)',
        'translations.de.title' => 'शीर्षक (जर्मन)',
        'translations.de.content' => 'सामग्री (जर्मन)',
        'languages.de.title' => 'बैनर शीर्षक (जर्मन)',
        'languages.de.description' => 'बैनर विवरण (जर्मन)',
        'languages.de.image' => 'बैनर छवि (जर्मन)',
        'languages.de.name' => 'प्लेटफ़ॉर्म नाम (जर्मन)',
        'title.de' => 'शीर्षक (जर्मन)',

        // Spanish
        'translations.es.name' => 'नाम (स्पेनिश)',
        'translations.es.description' => 'विवरण (स्पेनिश)',
        'translations.es.image' => 'छवि (स्पेनिश)',
        'translations.es.title' => 'शीर्षक (स्पेनिश)',
        'translations.es.content' => 'सामग्री (स्पेनिश)',
        'languages.es.title' => 'बैनर शीर्षक (स्पेनिश)',
        'languages.es.description' => 'बैनर विवरण (स्पेनिश)',
        'languages.es.image' => 'बैनर छवि (स्पेनिश)',
        'languages.es.name' => 'प्लेटफ़ॉर्म नाम (स्पेनिश)',
        'title.es' => 'शीर्षक (स्पेनिश)',

        // Persian
        'translations.fa.name' => 'नाम (फ़ारसी)',
        'translations.fa.description' => 'विवरण (फ़ारसी)',
        'translations.fa.image' => 'छवि (फ़ारसी)',
        'translations.fa.title' => 'शीर्षक (फ़ारसी)',
        'translations.fa.content' => 'सामग्री (फ़ारसी)',
        'languages.fa.title' => 'बैनर शीर्षक (फ़ारसी)',
        'languages.fa.description' => 'बैनर विवरण (फ़ारसी)',
        'languages.fa.image' => 'बैनर छवि (फ़ारसी)',
        'languages.fa.name' => 'प्लेटफ़ॉर्म नाम (फ़ारसी)',
        'title.fa' => 'शीर्षक (फ़ारसी)',

        // French
        'translations.fr.name' => 'नाम (फ्रेंच)',
        'translations.fr.description' => 'विवरण (फ्रेंच)',
        'translations.fr.image' => 'छवि (फ्रेंच)',
        'translations.fr.title' => 'शीर्षक (फ्रेंच)',
        'translations.fr.content' => 'सामग्री (फ्रेंच)',
        'languages.fr.title' => 'बैनर शीर्षक (फ्रेंच)',
        'languages.fr.description' => 'बैनर विवरण (फ्रेंच)',
        'languages.fr.image' => 'बैनर छवि (फ्रेंच)',
        'languages.fr.name' => 'प्लेटफ़ॉर्म नाम (फ्रेंच)',
        'title.fr' => 'शीर्षक (फ्रेंच)',

        // Hindi
        'translations.hi.name' => 'नाम (हिंदी)',
        'translations.hi.description' => 'विवरण (हिंदी)',
        'translations.hi.image' => 'छवि (हिंदी)',
        'translations.hi.title' => 'शीर्षक (हिंदी)',
        'translations.hi.content' => 'सामग्री (हिंदी)',
        'languages.hi.title' => 'बैनर शीर्षक (हिंदी)',
        'languages.hi.description' => 'बैनर विवरण (हिंदी)',
        'languages.hi.image' => 'बैनर छवि (हिंदी)',
        'languages.hi.name' => 'प्लेटफ़ॉर्म नाम (हिंदी)',
        'title.hi' => 'शीर्षक (हिंदी)',

        // Indonesian
        'translations.id.name' => 'नाम (इंडोनेशियाई)',
        'translations.id.description' => 'विवरण (इंडोनेशियाई)',
        'translations.id.image' => 'छवि (इंडोनेशियाई)',
        'translations.id.title' => 'शीर्षक (इंडोनेशियाई)',
        'translations.id.content' => 'सामग्री (इंडोनेशियाई)',
        'languages.id.title' => 'बैनर शीर्षक (इंडोनेशियाई)',
        'languages.id.description' => 'बैनर विवरण (इंडोनेशियाई)',
        'languages.id.image' => 'बैनर छवि (इंडोनेशियाई)',
        'languages.id.name' => 'प्लेटफ़ॉर्म नाम (इंडोनेशियाई)',
        'title.id' => 'शीर्षक (इंडोनेशियाई)',

        // Italian
        'translations.it.name' => 'नाम (इतालवी)',
        'translations.it.description' => 'विवरण (इतालवी)',
        'translations.it.image' => 'छवि (इतालवी)',
        'translations.it.title' => 'शीर्षक (इतालवी)',
        'translations.it.content' => 'सामग्री (इतालवी)',
        'languages.it.title' => 'बैनर शीर्षक (इतालवी)',
        'languages.it.description' => 'बैनर विवरण (इतालवी)',
        'languages.it.image' => 'बैनर छवि (इतालवी)',
        'languages.it.name' => 'प्लेटफ़ॉर्म नाम (इतालवी)',
        'title.it' => 'शीर्षक (इतालवी)',

        // Japanese
        'translations.ja.name' => 'नाम (जापानी)',
        'translations.ja.description' => 'विवरण (जापानी)',
        'translations.ja.image' => 'छवि (जापानी)',
        'translations.ja.title' => 'शीर्षक (जापानी)',
        'translations.ja.content' => 'सामग्री (जापानी)',
        'languages.ja.title' => 'बैनर शीर्षक (जापानी)',
        'languages.ja.description' => 'बैनर विवरण (जापानी)',
        'languages.ja.image' => 'बैनर छवि (जापानी)',
        'languages.ja.name' => 'प्लेटफ़ॉर्म नाम (जापानी)',
        'title.ja' => 'शीर्षक (जापानी)',

        // Korean
        'translations.ko.name' => 'नाम (कोरियाई)',
        'translations.ko.description' => 'विवरण (कोरियाई)',
        'translations.ko.image' => 'छवि (कोरियाई)',
        'translations.ko.title' => 'शीर्षक (कोरियाई)',
        'translations.ko.content' => 'सामग्री (कोरियाई)',
        'languages.ko.title' => 'बैनर शीर्षक (कोरियाई)',
        'languages.ko.description' => 'बैनर विवरण (कोरियाई)',
        'languages.ko.image' => 'बैनर छवि (कोरियाई)',
        'languages.ko.name' => 'प्लेटफ़ॉर्म नाम (कोरियाई)',
        'title.ko' => 'शीर्षक (कोरियाई)',

        // Dutch
        'translations.nl.name' => 'नाम (डच)',
        'translations.nl.description' => 'विवरण (डच)',
        'translations.nl.image' => 'छवि (डच)',
        'translations.nl.title' => 'शीर्षक (डच)',
        'translations.nl.content' => 'सामग्री (डच)',
        'languages.nl.title' => 'बैनर शीर्षक (डच)',
        'languages.nl.description' => 'बैनर विवरण (डच)',
        'languages.nl.image' => 'बैनर छवि (डच)',
        'languages.nl.name' => 'प्लेटफ़ॉर्म नाम (डच)',
        'title.nl' => 'शीर्षक (डच)',

        // Polish
        'translations.pl.name' => 'नाम (पोलिश)',
        'translations.pl.description' => 'विवरण (पोलिश)',
        'translations.pl.image' => 'छवि (पोलिश)',
        'translations.pl.title' => 'शीर्षक (पोलिश)',
        'translations.pl.content' => 'सामग्री (पोलिश)',
        'languages.pl.title' => 'बैनर शीर्षक (पोलिश)',
        'languages.pl.description' => 'बैनर विवरण (पोलिश)',
        'languages.pl.image' => 'बैनर छवि (पोलिश)',
        'languages.Pl.name' => 'प्लेटफ़ॉर्म नाम (पोलिश)',
        'title.pl' => 'शीर्षक (पोलिश)',

        // Portuguese
        'translations.pt.name' => 'नाम (पुर्तगाली)',
        'translations.pt.description' => 'विवरण (पुर्तगाली)',
        'translations.pt.image' => 'छवि (पुर्तगाली)',
        'translations.pt.title' => 'शीर्षक (पुर्तगाली)',
        'translations.pt.content' => 'सामग्री (पुर्तगाली)',
        'languages.pt.title' => 'बैनर शीर्षक (पुर्तगाली)',
        'languages.pt.description' => 'बैनर विवरण (पुर्तगाली)',
        'languages.pt.image' => 'बैनर छवि (पुर्तगाली)',
        'languages.pt.name' => 'प्लेटफ़ॉर्म नाम (पुर्तगाली)',
        'title.pt' => 'शीर्षक (पुर्तगाली)',

        // Russian
        'translations.ru.name' => 'नाम (रूसी)',
        'translations.ru.description' => 'विवरण (रूसी)',
        'translations.ru.image' => 'छवि (रूसी)',
        'translations.ru.title' => 'शीर्षक (रूसी)',
        'translations.ru.content' => 'सामग्री (रूसी)',
        'languages.ru.title' => 'बैनर शीर्षक (रूसी)',
        'languages.ru.description' => 'बैनर विवरण (रूसी)',
        'languages.ru.image' => 'बैनर छवि (रूसी)',
        'languages.ru.name' => 'प्लेटफ़ॉर्म नाम (रूसी)',
        'title.ru' => 'शीर्षक (रूसी)',

        // Thai
        'translations.th.name' => 'नाम (थाई)',
        'translations.th.description' => 'विवरण (थाई)',
        'translations.th.image' => 'छवि (थाई)',
        'translations.th.title' => 'शीर्षक (थाई)',
        'translations.th.content' => 'सामग्री (थाई)',
        'languages.th.title' => 'बैनर शीर्षक (थाई)',
        'languages.th.description' => 'बैनर विवरण (थाई)',
        'languages.th.image' => 'बैनर छवि (थाई)',
        'languages.th.name' => 'प्लेटफ़ॉर्म नाम (थाई)',
        'title.th' => 'शीर्षक (थाई)',

        // Turkish
        'translations.tr.name' => 'नाम (तुर्की)',
        'translations.tr.description' => 'विवरण (तुर्की)',
        'translations.tr.image' => 'छवि (तुर्की)',
        'translations.tr.title' => 'शीर्षक (तुर्की)',
        'translations.tr.content' => 'सामग्री (तुर्की)',
        'languages.tr.title' => 'बैनर शीर्षक (तुर्की)',
        'languages.tr.description' => 'बैनर विवरण (तुर्की)',
        'languages.tr.image' => 'बैनर छवि (तुर्की)',
        'languages.tr.name' => 'प्लेटफ़ॉर्म नाम (तुर्की)',
        'title.tr' => 'शीर्षक (तुर्की)',

        // Vietnamese
        'translations.vi.name' => 'नाम (वियतनामी)',
        'translations.vi.description' => 'विवरण (वियतनामी)',
        'translations.vi.image' => 'छवि (वियतनामी)',
        'translations.vi.title' => 'शीर्षक (वियतनामी)',
        'translations.vi.content' => 'सामग्री (वियतनामी)',
        'languages.vi.title' => 'बैनर शीर्षक (वियतनामी)',
        'languages.vi.description' => 'बैनर विवरण (वियतनामी)',
        'languages.vi.image' => 'बैनर छवि (वियतनामी)',
        'languages.vi.name' => 'प्लेटफ़ॉर्म नाम (वियतनामी)',
        'title.vi' => 'शीर्षक (वियतनामी)',

        // Chinese
        'translations.zh.name' => 'नाम (चीनी)',
        'translations.zh.description' => 'विवरण (चीनी)',
        'translations.zh.image' => 'छवि (चीनी)',
        'translations.zh.title' => 'शीर्षक (चीनी)',
        'translations.zh.content' => 'सामग्री (चीनी)',
        'languages.zh.title' => 'बैनर शीर्षक (चीनी)',
        'languages.zh.description' => 'बैनर विवरण (चीनी)',
        'languages.zh.image' => 'बैनर छवि (चीनी)',
        'languages.zh.name' => 'प्लेटफ़ॉर्म नाम (चीनी)',
        'title.zh' => 'शीर्षक (चीनी)',
    ],
];
