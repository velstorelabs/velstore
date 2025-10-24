<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute alanı zorunludur.',
    'string' => ':attribute bir metin olmalıdır.',
    'max' => ':attribute :max karakterden büyük olamaz.',
    'min' => ':attribute en az :min karakter olmalıdır.',
    'image' => ':attribute bir resim olmalıdır.',
    'mimes' => ':attribute şunun türünde bir dosya olmalıdır: :values.',
    'array' => ':attribute bir dizi olmalıdır.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'lte' => ':attribute :value değerinden küçük veya eşit olmalıdır.',
    'regex' => ':attribute biçimi geçersiz.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'incorrect_current_password' => 'Mevcut şifre yanlış.',

    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute hem büyük hem de küçük harf içermelidir.',
        'numbers' => ':attribute en az bir rakam içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => ':attribute bir veri ihlalinde bulunmuştur. Lütfen farklı bir :attribute seçin.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'Şifre onayı eşleşmiyor.',
            'min' => 'Şifre en az :min karakter olmalıdır.',
            'symbols' => 'Şifre en az bir sembol içermelidir.',
        ],
        'phone' => [
            'regex' => 'Telefon numarası yalnızca rakamlar, boşluklar, tireler ve isteğe bağlı + işareti içerebilir.',
        ],
        'email' => [
            'unique' => 'Bu e-posta zaten kayıtlı.',
        ],
        'status' => [
            'in' => 'Seçilen durum geçersiz.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Mevcut Şifre',
        'profile_image' => 'Profil Resmi',

        // Vendor fields
        'name' => 'İsim',
        'email' => 'E-posta',
        'password' => 'Şifre',
        'password_confirmation' => 'Şifreyi Onayla',
        'phone' => 'Telefon Numarası',
        'status' => 'Durum',

        // Social links
        'type' => 'Platform Türü',
        'platform' => 'Platform Adı',
        'link' => 'Platform Linki',

        // Menu fields
        'title' => 'Menü Başlığı',
        'order_number' => 'Sipariş Numarası',

        // Dynamic variants
        'variants.*.name' => 'Varyant Adı',
        'variants.*.price' => 'Varyant Fiyatı',
        'variants.*.discount_price' => 'İndirimli Varyant Fiyatı',
        'variants.*.stock' => 'Varyant Stoku',
        'variants.*.SKU' => 'Varyant SKU',
        'variants.*.barcode' => 'Varyant Barkodu',
        'variants.*.weight' => 'Varyant Ağırlığı',
        'variants.*.dimensions' => 'Varyant Boyutları',
        'variants.*.language_code' => 'Varyant Dil Kodu',
        'variants.*.size_id' => 'Varyant Boyutu',
        'variants.*.color_id' => 'Varyant Rengi',

        // Attribute name
        'name' => 'Özellik Adı',

        // Attribute values
        'values.*' => 'Özellik Değeri',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Özellik Değeri $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Değer (İngilizce)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (İngilizce) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Değer (Arapça)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Arapça) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Değer (Almanca)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Almanca) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Değer (İspanyolca)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (İspanyolca) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Değer (Farsça)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Farsça) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Değer (Fransızca)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Fransızca) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Değer (Hintçe)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Hintçe) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Değer (Endonezce)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Endonezce) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Değer (İtalyanca)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (İtalyanca) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Değer (Japonca)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Japonca) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Değer (Korece)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Korece) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Değer (Flemenkçe)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Flemenkçe) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Değer (Lehçe)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Lehçe) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Değer (Portekizce)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Portekizce) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Değer (Rusça)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Rusça) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Değer (Tay)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Tay) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Değer (Türkçe)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Türkçe) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Değer (Vietnamca)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Vietnamca) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Değer (Çince)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Değer (Çince) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'İsim (İngilizce)',
        'translations.en.description' => 'Açıklama (İngilizce)',
        'translations.en.image' => 'Resim (İngilizce)',
        'translations.en.title' => 'Başlık (İngilizce)',
        'translations.en.content' => 'İçerik (İngilizce)',
        'languages.en.title' => 'Banner Başlığı (İngilizce)',
        'languages.en.description' => 'Banner Açıklaması (İngilizce)',
        'languages.en.image' => 'Banner Resmi (İngilizce)',
        'languages.en.name' => 'Platform Adı (İngilizce)',
        'title.en' => 'Başlık (İngilizce)',

        // Arabic
        'translations.ar.name' => 'İsim (Arapça)',
        'translations.ar.description' => 'Açıklama (Arapça)',
        'translations.ar.image' => 'Resim (Arapça)',
        'translations.ar.title' => 'Başlık (Arapça)',
        'translations.ar.content' => 'İçerik (Arapça)',
        'languages.ar.title' => 'Banner Başlığı (Arapça)',
        'languages.ar.description' => 'Banner Açıklaması (Arapça)',
        'languages.ar.image' => 'Banner Resmi (Arapça)',
        'languages.ar.name' => 'Platform Adı (Arapça)',
        'title.ar' => 'Başlık (Arapça)',

        // German
        'translations.de.name' => 'İsim (Almanca)',
        'translations.de.description' => 'Açıklama (Almanca)',
        'translations.de.image' => 'Resim (Almanca)',
        'translations.de.title' => 'Başlık (Almanca)',
        'translations.de.content' => 'İçerik (Almanca)',
        'languages.de.title' => 'Banner Başlığı (Almanca)',
        'languages.de.description' => 'Banner Açıklaması (Almanca)',
        'languages.de.image' => 'Banner Resmi (Almanca)',
        'languages.de.name' => 'Platform Adı (Almanca)',
        'title.de' => 'Başlık (Almanca)',

        // Spanish
        'translations.es.name' => 'İsim (İspanyolca)',
        'translations.es.description' => 'Açıklama (İspanyolca)',
        'translations.es.image' => 'Resim (İspanyolca)',
        'translations.es.title' => 'Başlık (İspanyolca)',
        'translations.es.content' => 'İçerik (İspanyolca)',
        'languages.es.title' => 'Banner Başlığı (İspanyolca)',
        'languages.es.description' => 'Banner Açıklaması (İspanyolca)',
        'languages.es.image' => 'Banner Resmi (İspanyolca)',
        'languages.es.name' => 'Platform Adı (İspanyolca)',
        'title.es' => 'Başlık (İspanyolca)',

        // Persian
        'translations.fa.name' => 'İsim (Farsça)',
        'translations.fa.description' => 'Açıklama (Farsça)',
        'translations.fa.image' => 'Resim (Farsça)',
        'translations.fa.title' => 'Başlık (Farsça)',
        'translations.fa.content' => 'İçerik (Farsça)',
        'languages.fa.title' => 'Banner Başlığı (Farsça)',
        'languages.fa.description' => 'Banner Açıklaması (Farsça)',
        'languages.fa.image' => 'Banner Resmi (Farsça)',
        'languages.fa.name' => 'Platform Adı (Farsça)',
        'title.fa' => 'Başlık (Farsça)',

        // French
        'translations.fr.name' => 'İsim (Fransızca)',
        'translations.fr.description' => 'Açıklama (Fransızca)',
        'translations.fr.image' => 'Resim (Fransızca)',
        'translations.fr.title' => 'Başlık (Fransızca)',
        'translations.fr.content' => 'İçerik (Fransızca)',
        'languages.fr.title' => 'Banner Başlığı (Fransızca)',
        'languages.fr.description' => 'Banner Açıklaması (Fransızca)',
        'languages.fr.image' => 'Banner Resmi (Fransızca)',
        'languages.fr.name' => 'Platform Adı (Fransızca)',
        'title.fr' => 'Başlık (Fransızca)',

        // Hindi
        'translations.hi.name' => 'İsim (Hintçe)',
        'translations.hi.description' => 'Açıklama (Hintçe)',
        'translations.hi.image' => 'Resim (Hintçe)',
        'translations.hi.title' => 'Başlık (Hintçe)',
        'translations.hi.content' => 'İçerik (Hintçe)',
        'languages.hi.title' => 'Banner Başlığı (Hintçe)',
        'languages.hi.description' => 'Banner Açıklaması (Hintçe)',
        'languages.hi.image' => 'Banner Resmi (Hintçe)',
        'languages.hi.name' => 'Platform Adı (Hintçe)',
        'title.hi' => 'Başlık (Hintçe)',

        // Indonesian
        'translations.id.name' => 'İsim (Endonezce)',
        'translations.id.description' => 'Açıklama (Endonezce)',
        'translations.id.image' => 'Resim (Endonezce)',
        'translations.id.title' => 'Başlık (Endonezce)',
        'translations.id.content' => 'İçerik (Endonezce)',
        'languages.id.title' => 'Banner Başlığı (Endonezce)',
        'languages.id.description' => 'Banner Açıklaması (Endonezce)',
        'languages.id.image' => 'Banner Resmi (Endonezce)',
        'languages.id.name' => 'Platform Adı (Endonezce)',
        'title.id' => 'Başlık (Endonezce)',

        // Italian
        'translations.it.name' => 'İsim (İtalyanca)',
        'translations.it.description' => 'Açıklama (İtalyanca)',
        'translations.it.image' => 'Resim (İtalyanca)',
        'translations.it.title' => 'Başlık (İtalyanca)',
        'translations.it.content' => 'İçerik (İtalyanca)',
        'languages.it.title' => 'Banner Başlığı (İtalyanca)',
        'languages.it.description' => 'Banner Açıklaması (İtalyanca)',
        'languages.it.image' => 'Banner Resmi (İtalyanca)',
        'languages.it.name' => 'Platform Adı (İtalyanca)',
        'title.it' => 'Başlık (İtalyanca)',

        // Japanese
        'translations.ja.name' => 'İsim (Japonca)',
        'translations.ja.description' => 'Açıklama (Japonca)',
        'translations.ja.image' => 'Resim (Japonca)',
        'translations.ja.title' => 'Başlık (Japonca)',
        'translations.ja.content' => 'İçerik (Japonca)',
        'languages.ja.title' => 'Banner Başlığı (Japonca)',
        'languages.ja.description' => 'Banner Açıklaması (Japonca)',
        'languages.ja.image' => 'Banner Resmi (Japonca)',
        'languages.ja.name' => 'Platform Adı (Japonca)',
        'title.ja' => 'Başlık (Japonca)',

        // Korean
        'translations.ko.name' => 'İsim (Korece)',
        'translations.ko.description' => 'Açıklama (Korece)',
        'translations.ko.image' => 'Resim (Korece)',
        'translations.ko.title' => 'Başlık (Korece)',
        'translations.ko.content' => 'İçerik (Korece)',
        'languages.ko.title' => 'Banner Başlığı (Korece)',
        'languages.ko.description' => 'Banner Açıklaması (Korece)',
        'languages.ko.image' => 'Banner Resmi (Korece)',
        'languages.ko.name' => 'Platform Adı (Korece)',
        'title.ko' => 'Başlık (Korece)',

        // Dutch
        'translations.nl.name' => 'İsim (Hollandaca)',
        'translations.nl.description' => 'Açıklama (Hollandaca)',
        'translations.nl.image' => 'Resim (Hollandaca)',
        'translations.nl.title' => 'Başlık (Hollandaca)',
        'translations.nl.content' => 'İçerik (Hollandaca)',
        'languages.nl.title' => 'Banner Başlığı (Hollandaca)',
        'languages.nl.description' => 'Banner Açıklaması (Hollandaca)',
        'languages.nl.image' => 'Banner Resmi (Hollandaca)',
        'languages.nl.name' => 'Platform Adı (Hollandaca)',
        'title.nl' => 'Başlık (Hollandaca)',

        // Polish
        'translations.pl.name' => 'İsim (Lehçe)',
        'translations.pl.description' => 'Açıklama (Lehçe)',
        'translations.pl.image' => 'Resim (Lehçe)',
        'translations.pl.title' => 'Başlık (Lehçe)',
        'translations.pl.content' => 'İçerik (Lehçe)',
        'languages.pl.title' => 'Banner Başlığı (Lehçe)',
        'languages.pl.description' => 'Banner Açıklaması (Lehçe)',
        'languages.pl.image' => 'Banner Resmi (Lehçe)',
        'languages.Pl.name' => 'Platform Adı (Lehçe)',
        'title.pl' => 'Başlık (Lehçe)',

        // Portuguese
        'translations.pt.name' => 'İsim (Portekizce)',
        'translations.pt.description' => 'Açıklama (Portekizce)',
        'translations.pt.image' => 'Resim (Portekizce)',
        'translations.pt.title' => 'Başlık (Portekizce)',
        'translations.pt.content' => 'İçerik (Portekizce)',
        'languages.pt.title' => 'Banner Başlığı (Portekizce)',
        'languages.pt.description' => 'Banner Açıklaması (Portekizce)',
        'languages.pt.image' => 'Banner Resmi (Portekizce)',
        'languages.pt.name' => 'Platform Adı (Portekizce)',
        'title.pt' => 'Başlık (Portekizce)',

        // Russian
        'translations.ru.name' => 'İsim (Rusça)',
        'translations.ru.description' => 'Açıklama (Rusça)',
        'translations.ru.image' => 'Resim (Rusça)',
        'translations.ru.title' => 'Başlık (Rusça)',
        'translations.ru.content' => 'İçerik (Rusça)',
        'languages.ru.title' => 'Banner Başlığı (Rusça)',
        'languages.ru.description' => 'Banner Açıklaması (Rusça)',
        'languages.ru.image' => 'Banner Resmi (Rusça)',
        'languages.ru.name' => 'Platform Adı (Rusça)',
        'title.ru' => 'Başlık (Rusça)',

        // Thai
        'translations.th.name' => 'İsim (Tayca)',
        'translations.th.description' => 'Açıklama (Tayca)',
        'translations.th.image' => 'Resim (Tayca)',
        'translations.th.title' => 'Başlık (Tayca)',
        'translations.th.content' => 'İçerik (Tayca)',
        'languages.th.title' => 'Banner Başlığı (Tayca)',
        'languages.th.description' => 'Banner Açıklaması (Tayca)',
        'languages.th.image' => 'Banner Resmi (Tayca)',
        'languages.th.name' => 'Platform Adı (Tayca)',
        'title.th' => 'Başlık (Tayca)',

        // Turkish
        'translations.tr.name' => 'İsim (Türkçe)',
        'translations.tr.description' => 'Açıklama (Türkçe)',
        'translations.tr.image' => 'Resim (Türkçe)',
        'translations.tr.title' => 'Başlık (Türkçe)',
        'translations.tr.content' => 'İçerik (Türkçe)',
        'languages.tr.title' => 'Banner Başlığı (Türkçe)',
        'languages.tr.description' => 'Banner Açıklaması (Türkçe)',
        'languages.tr.image' => 'Banner Resmi (Türkçe)',
        'languages.tr.name' => 'Platform Adı (Türkçe)',
        'title.tr' => 'Başlık (Türkçe)',

        // Vietnamese
        'translations.vi.name' => 'İsim (Vietnamca)',
        'translations.vi.description' => 'Açıklama (Vietnamca)',
        'translations.vi.image' => 'Resim (Vietnamca)',
        'translations.vi.title' => 'Başlık (Vietnamca)',
        'translations.vi.content' => 'İçerik (Vietnamca)',
        'languages.vi.title' => 'Banner Başlığı (Vietnamca)',
        'languages.vi.description' => 'Banner Açıklaması (Vietnamca)',
        'languages.vi.image' => 'Banner Resmi (Vietnamca)',
        'languages.vi.name' => 'Platform Adı (Vietnamca)',
        'title.vi' => 'Başlık (Vietnamca)',

        // Chinese
        'translations.zh.name' => 'İsim (Çince)',
        'translations.zh.description' => 'Açıklama (Çince)',
        'translations.zh.image' => 'Resim (Çince)',
        'translations.zh.title' => 'Başlık (Çince)',
        'translations.zh.content' => 'İçerik (Çince)',
        'languages.zh.title' => 'Banner Başlığı (Çince)',
        'languages.zh.description' => 'Banner Açıklaması (Çince)',
        'languages.zh.image' => 'Banner Resmi (Çince)',
        'languages.zh.name' => 'Platform Adı (Çince)',
        'title.zh' => 'Başlık (Çince)',
    ],
];
