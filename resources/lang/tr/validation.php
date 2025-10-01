<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute alanı zorunludur.',
    'string' => ':attribute alanı bir metin olmalıdır.',
    'max' => ':attribute alanı :max karakterden uzun olamaz.',
    'min' => ':attribute alanı en az :min karakter olmalıdır.',
    'image' => ':attribute alanı bir resim olmalıdır.',
    'mimes' => ':attribute alanı şu türde bir dosya olmalıdır: :values.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'integer' => ':attribute alanı bir tam sayı olmalıdır.',
    'lte' => ':attribute alanı :value değerinden küçük veya eşit olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Burada özel alan adları tanımlayabilirsiniz.
    | Bu, doğrulama mesajlarını daha okunabilir hale getirir.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'İsim',
        'email' => 'E-posta',
        'password' => 'Parola',
        'password_confirmation' => 'Parola Onayı',
        'phone' => 'Telefon Numarası',
        'status' => 'Durum',

        // Dynamic variants
        'variants.*.name' => 'Varyant Adı',
        'variants.*.price' => 'Varyant Fiyatı',
        'variants.*.discount_price' => 'Varyant İndirimli Fiyatı',
        'variants.*.stock' => 'Varyant Stoku',
        'variants.*.SKU' => 'Varyant SKU',
        'variants.*.barcode' => 'Varyant Barkodu',
        'variants.*.weight' => 'Varyant Ağırlığı',
        'variants.*.dimensions' => 'Varyant Ölçüleri',
        'variants.*.language_code' => 'Varyant Dil Kodu',
        'variants.*.size_id' => 'Varyant Boyutu',
        'variants.*.color_id' => 'Varyant Rengi',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'İsim (İngilizce)',
        'translations.en.description' => 'Açıklama (İngilizce)',
        'translations.en.image' => 'Resim (İngilizce)',
        'languages.en.title' => 'Banner Başlığı (İngilizce)',
        'languages.en.description' => 'Banner Açıklaması (İngilizce)',
        'languages.en.image' => 'Banner Resmi (İngilizce)',

        // Arabic
        'translations.ar.name' => 'İsim (Arapça)',
        'translations.ar.description' => 'Açıklama (Arapça)',
        'translations.ar.image' => 'Resim (Arapça)',
        'languages.ar.title' => 'Banner Başlığı (Arapça)',
        'languages.ar.description' => 'Banner Açıklaması (Arapça)',
        'languages.ar.image' => 'Banner Resmi (Arapça)',

        // German
        'translations.de.name' => 'İsim (Almanca)',
        'translations.de.description' => 'Açıklama (Almanca)',
        'translations.de.image' => 'Resim (Almanca)',
        'languages.de.title' => 'Banner Başlığı (Almanca)',
        'languages.de.description' => 'Banner Açıklaması (Almanca)',
        'languages.de.image' => 'Banner Resmi (Almanca)',

        // Spanish
        'translations.es.name' => 'İsim (İspanyolca)',
        'translations.es.description' => 'Açıklama (İspanyolca)',
        'translations.es.image' => 'Resim (İspanyolca)',
        'languages.es.title' => 'Banner Başlığı (İspanyolca)',
        'languages.es.description' => 'Banner Açıklaması (İspanyolca)',
        'languages.es.image' => 'Banner Resmi (İspanyolca)',

        // Persian
        'translations.fa.name' => 'İsim (Farsça)',
        'translations.fa.description' => 'Açıklama (Farsça)',
        'translations.fa.image' => 'Resim (Farsça)',
        'languages.fa.title' => 'Banner Başlığı (Farsça)',
        'languages.fa.description' => 'Banner Açıklaması (Farsça)',
        'languages.fa.image' => 'Banner Resmi (Farsça)',

        // French
        'translations.fr.name' => 'İsim (Fransızca)',
        'translations.fr.description' => 'Açıklama (Fransızca)',
        'translations.fr.image' => 'Resim (Fransızca)',
        'languages.fr.title' => 'Banner Başlığı (Fransızca)',
        'languages.fr.description' => 'Banner Açıklaması (Fransızca)',
        'languages.fr.image' => 'Banner Resmi (Fransızca)',

        // Hindi
        'translations.hi.name' => 'İsim (Hintçe)',
        'translations.hi.description' => 'Açıklama (Hintçe)',
        'translations.hi.image' => 'Resim (Hintçe)',
        'languages.hi.title' => 'Banner Başlığı (Hintçe)',
        'languages.hi.description' => 'Banner Açıklaması (Hintçe)',
        'languages.hi.image' => 'Banner Resmi (Hintçe)',

        // Indonesian
        'translations.id.name' => 'İsim (Endonezce)',
        'translations.id.description' => 'Açıklama (Endonezce)',
        'translations.id.image' => 'Resim (Endonezce)',
        'languages.id.title' => 'Banner Başlığı (Endonezce)',
        'languages.id.description' => 'Banner Açıklaması (Endonezce)',
        'languages.id.image' => 'Banner Resmi (Endonezce)',

        // Italian
        'translations.it.name' => 'İsim (İtalyanca)',
        'translations.it.description' => 'Açıklama (İtalyanca)',
        'translations.it.image' => 'Resim (İtalyanca)',
        'languages.it.title' => 'Banner Başlığı (İtalyanca)',
        'languages.it.description' => 'Banner Açıklaması (İtalyanca)',
        'languages.it.image' => 'Banner Resmi (İtalyanca)',

        // Japanese
        'translations.ja.name' => 'İsim (Japonca)',
        'translations.ja.description' => 'Açıklama (Japonca)',
        'translations.ja.image' => 'Resim (Japonca)',
        'languages.ja.title' => 'Banner Başlığı (Japonca)',
        'languages.ja.description' => 'Banner Açıklaması (Japonca)',
        'languages.ja.image' => 'Banner Resmi (Japonca)',

        // Korean
        'translations.ko.name' => 'İsim (Korece)',
        'translations.ko.description' => 'Açıklama (Korece)',
        'translations.ko.image' => 'Resim (Korece)',
        'languages.ko.title' => 'Banner Başlığı (Korece)',
        'languages.ko.description' => 'Banner Açıklaması (Korece)',
        'languages.ko.image' => 'Banner Resmi (Korece)',

        // Dutch
        'translations.nl.name' => 'İsim (Hollandaca)',
        'translations.nl.description' => 'Açıklama (Hollandaca)',
        'translations.nl.image' => 'Resim (Hollandaca)',
        'languages.nl.title' => 'Banner Başlığı (Hollandaca)',
        'languages.nl.description' => 'Banner Açıklaması (Hollandaca)',
        'languages.nl.image' => 'Banner Resmi (Hollandaca)',

        // Polish
        'translations.pl.name' => 'İsim (Lehçe)',
        'translations.pl.description' => 'Açıklama (Lehçe)',
        'translations.pl.image' => 'Resim (Lehçe)',
        'languages.pl.title' => 'Banner Başlığı (Lehçe)',
        'languages.pl.description' => 'Banner Açıklaması (Lehçe)',
        'languages.pl.image' => 'Banner Resmi (Lehçe)',

        // Portuguese
        'translations.pt.name' => 'İsim (Portekizce)',
        'translations.pt.description' => 'Açıklama (Portekizce)',
        'translations.pt.image' => 'Resim (Portekizce)',
        'languages.pt.title' => 'Banner Başlığı (Portekizce)',
        'languages.pt.description' => 'Banner Açıklaması (Portekizce)',
        'languages.pt.image' => 'Banner Resmi (Portekizce)',

        // Russian
        'translations.ru.name' => 'İsim (Rusça)',
        'translations.ru.description' => 'Açıklama (Rusça)',
        'translations.ru.image' => 'Resim (Rusça)',
        'languages.ru.title' => 'Banner Başlığı (Rusça)',
        'languages.ru.description' => 'Banner Açıklaması (Rusça)',
        'languages.ru.image' => 'Banner Resmi (Rusça)',

        // Thai
        'translations.th.name' => 'İsim (Tayca)',
        'translations.th.description' => 'Açıklama (Tayca)',
        'translations.th.image' => 'Resim (Tayca)',
        'languages.th.title' => 'Banner Başlığı (Tayca)',
        'languages.th.description' => 'Banner Açıklaması (Tayca)',
        'languages.th.image' => 'Banner Resmi (Tayca)',

        // Turkish
        'translations.tr.name' => 'İsim (Türkçe)',
        'translations.tr.description' => 'Açıklama (Türkçe)',
        'translations.tr.image' => 'Resim (Türkçe)',
        'languages.tr.title' => 'Banner Başlığı (Türkçe)',
        'languages.tr.description' => 'Banner Açıklaması (Türkçe)',
        'languages.tr.image' => 'Banner Resmi (Türkçe)',

        // Vietnamese
        'translations.vi.name' => 'İsim (Vietnamca)',
        'translations.vi.description' => 'Açıklama (Vietnamca)',
        'translations.vi.image' => 'Resim (Vietnamca)',
        'languages.vi.title' => 'Banner Başlığı (Vietnamca)',
        'languages.vi.description' => 'Banner Açıklaması (Vietnamca)',
        'languages.vi.image' => 'Banner Resmi (Vietnamca)',

        // Chinese
        'translations.zh.name' => 'İsim (Çince)',
        'translations.zh.description' => 'Açıklama (Çince)',
        'translations.zh.image' => 'Resim (Çince)',
        'languages.zh.title' => 'Banner Başlığı (Çince)',
        'languages.zh.description' => 'Banner Açıklaması (Çince)',
        'languages.zh.image' => 'Banner Resmi (Çince)',
    ],
];
